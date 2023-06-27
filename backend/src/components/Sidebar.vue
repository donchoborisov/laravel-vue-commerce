<template>
    <!-- sidebar -->

    <div class="w-[200px] transition-all bg-indigo-700 max-h-full  text-white py-4 px-2">

        <router-link :to="{ name: 'app.dashboard'}" class="flex items-center rounded transition-colors py-1 px-2 hover:bg-black/30 mb-2 ">
            <span class="mr-2 text-gray-300">
                <HomeIcon class="w-5" />
            </span>
            <span class="text-sm font-light">
                Dashboard
            </span>

        </router-link>

        <router-link :to="{ name: 'app.products'}" class="flex items-center rounded transition-colors py-1 px-2 hover:bg-black/30 mb-2">
            <span class="mr-2 text-gray-300">
                <ViewListIcon class="w-5" />
            </span>
            <span class="text-sm ">
                Products
            </span>

        </router-link>


        <router-link :to="{ name: 'app.dashboard'}" class="flex items-center rounded transition-colors py-1 px-2 hover:bg-black/30 mb-2">
            <span class="mr-2 text-gray-300">
                <ChartBarIcon class="w-5" />
            </span>
            <span class="text-sm ">
                Reports
            </span>

        </router-link>


        <router-link :to="{ name: 'app.dashboard'}" class="flex items-center rounded transition-colors py-1 px-2 hover:bg-black/30 mb-2">
            <span class="mr-2 text-gray-300">
                <UsersIcon class="w-5" />
            </span>
            <span class="text-sm ">
                Users
            </span>

        </router-link>



      </div>

   <!-- end sidebar -->
</template>

<script setup>
import {HomeIcon, UsersIcon, ViewListIcon, ChartBarIcon} from '@heroicons/vue/outline'

</script>

<style>

</style>
