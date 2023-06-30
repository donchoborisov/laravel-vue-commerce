 <template>
   <div v-if="currentUser.id" class="flex h-full bg-gray-200">


      <Sidebar :class="{'-ml-[200px]': !sidebarOpened}"/>

      <div class="flex-1">
      <Navbar @toggle-sidebar="toggleSidebar"/>

       <!-- content -->
       <main class="p-6" >


            <router-view></router-view>


       </main>
       <!-- end content -->

      </div>
    </div>
    <div v-else class="min-h-full bg-gray-200 flex items-center justify-center">

       <Spinner />

    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import Sidebar from './Sidebar.vue';
import Navbar from './Navbar.vue';
import Spinner from './core/Spinner.vue';
import store from '../store';
import {computed} from 'vue';

const {title} = defineProps({
    title:String
})

const sidebarOpened = ref(true)

function toggleSidebar() {
 sidebarOpened.value = !sidebarOpened.value
}

onMounted(() => {

    store.dispatch('getUser')

    handleSidebarOpened();
    window.addEventListener('resize', handleSidebarOpened)
})

onUnmounted(() => {
window.removeEventListener('resize', handleSidebarOpened)
});

function handleSidebarOpened() {

    sidebarOpened.value = window.outerWidth > 768;

}

const currentUser = computed(() => store.state.user.data);

</script>

<style>

</style>
