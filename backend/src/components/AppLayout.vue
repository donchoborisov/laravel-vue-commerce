 <template>
   <div class="flex min-h-full bg-gray-200">


      <Sidebar/>

      <div class="flex-1">
      <TopHeader/>

       <!-- content -->
       <main class="p-6" >


            <router-view></router-view>


       </main>
       <!-- end content -->

      </div>
    </div>
</template>

<script setup>
import Sidebar from './Sidebar.vue'
import TopHeader from './TopHeader.vue';

</script>

<style>

</style>
