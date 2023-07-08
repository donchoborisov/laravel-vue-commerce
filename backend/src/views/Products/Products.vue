<template>
  <div>

  <div class="flex items-center justify-between mb-3">
    <button type="submit"
    @click="showProductModal"
    class="py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none
    focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
    >
    Add New Product
    </button>
  </div>
   <ProductModal v-model="showModal" :product="productModel" @close="onModalClose" />
   <ProductsTable @clickEdit="editProduct"/>
</div>

</template>

<script setup>
import { ref } from 'vue';
import ProductModal from './ProductModal.vue';
import ProductsTable from './ProductsTable.vue';
import store from '../../store';



const showModal = ref(false)

function showProductModal() {
    showModal.value = true
}

const DEFAULT_EMPTY_OBJECT = {
    id:'',
    title:'',
    image:'',
    description:'',
    price:''
}
const productModel = ref({...DEFAULT_EMPTY_OBJECT})

function editProduct(product) {
  store.dispatch('getProduct', product.id)
   .then(({data}) => {
    productModel.value = data
    showProductModal()
   })
}

function onModalClose() {
  productModel.value = {...DEFAULT_EMPTY_OBJECT}
}

</script>

<style>

</style>
