<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head ,Link} from '@inertiajs/vue3';
import { ref } from 'vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>



<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header >
            <h2  style="font-family: Geneva; font-size: 30px; font-weight: bolder; "><center>WELCOME TO CARE4YOU!!</center></h2>
        </template>

            <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div> -->
            <h2 class = mt-4 style="font-family: Geneva; font-size: 30px; font-weight: bolder;"><center>What do you want to do today?</center></h2>
            <div class="d-grid gap-6 mx-auto mt-4 mb-8" style="width: 200px;">
                    <Link @click="newBooking" :href="route('patient.booking')" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md  focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 mb-4">
                     New Booking </Link>

            </div>

            <div class="d-grid gap-6 mx-auto mt-4" style="width: 200px;">
                    <Link @click="newBooking" :href="route('patient.booking')" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md  focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 mb-4">
                     Manage Booking </Link>

            </div>

    </AuthenticatedLayout>
</template>
