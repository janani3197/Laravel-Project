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

    </BootstrapLayout>

    </template>