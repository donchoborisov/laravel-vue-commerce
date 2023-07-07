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
   <ProductModal v-model="showModal" :product="productModel" />
   <ProductsTable/>
</div>

</template>

<script setup>
import { ref } from 'vue';
import ProductModal from './ProductModal.vue';
import ProductsTable from './ProductsTable.vue';



const showModal = ref(false)

function showProductModal() {
    showModal.value = true
}

const productModel = ref({
    id:'',
    title:'',
    image:'',
    description:'',
    price:''
})

</script>

<style>

</style>
