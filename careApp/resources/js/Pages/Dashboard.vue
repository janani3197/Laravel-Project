<script setup>
import { Head , Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import BootstrapLayout from '@/Layouts/BootstrapLayout.vue';


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <BootstrapLayout>

        <h2 class = "mt-4" style="font-family: Georgia; font-weight: bolder;font-size: 34px;"><center>HELLO name GOOD DAY!</center></h2>


        <div class="container mt-4">
            <div class="row">
                 <div class="col-md-8" style="border-right: 1px solid black; font-family: Georgia;">
                    <h2><center>What do you want to do today?</center></h2>
                    <div class="text-center mt-5"> 
                    <div>
                        <Link @click="newBooking" :href="route('patient.booking')" class="btn btn-primary btn-block">
                            NEW BOOKING 
                        </Link>
                    </div>

                    <div>
                         <Link @click="newBooking" :href="route('patient.booking')" class="btn btn-primary btn-block mt-4">
                            MANAGE BOOKING
                        </Link>
                    </div>  
                </div>  
                 </div>
        
                <div class="col-md-4 text-center" style="font-family: Georgia; font-size: 24px;">
                     My Appointments
                     <div class = "bg-secondary p-2 text-dark bg-opacity-10 mt-4" style="font-family: Georgia; font-size: 16px;">
                        <p style="font-style: italic;"><i class="bi bi-calendar-x"></i>  You have no appointment booked</p>
                     </div>
                </div>
            </div>
        </div>
    </BootstrapLayout>
</template>


