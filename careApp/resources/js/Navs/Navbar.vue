<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #6776FD; font-family:Helvetica;">
        <div class="container-fluid">
                <a class="navbar-brand" href="#" style="color: white;font-weight: bolder;">CARE4YOU</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item" >
                            <a class="nav-link active" aria-current="page"  style="font-weight: bold;" href="#">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" style="font-weight: bold;" href="#">Why Choose Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" style="font-weight: bold;" href="#">Our Care Homes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" style="font-weight: bold;" href="#">Careers</a>
                        </li>

                    </ul>
                        <Link @click="Logout" :href="route('logout')" method="post">
                            <button class="btn btn-success ms-auto" type="submit">Logout</button>
                        </Link>
                        
                    

                </div>

        </div>

    </nav>

</template>