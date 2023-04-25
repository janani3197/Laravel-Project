<template>

<!-- <Head title="Dashboard" /> -->
<AuthenticatedLayout>
    <h1><center>WELCOME TO BOOKCARE</center></h1>
    <h3><center>What do you want to do today?</center></h3>


    <div class="d-grid gap-2 col-2 mx-auto">
      <!-- // routes for new booking -->
      <a @click="newBooking" href="{{ route('patient.booking') }}" class="btn btn-primary" type="button">
        New Booking</a>

      <a @click="newBooking" href="{{ route('patient.booking') }}" class="btn btn-primary" type="button">
        Manage Booking</a>
    </div>

</AuthenticatedLayout>
</template>

<script>

export default {
    data() {
        return {
            message: 'Hello there!'
        }
    },

    props: {
        users: {
            required: true,
            type: Array
        }
    },

    methods: {
        someFunction() {
            alert('i was clicked!');
        }
    },

    mounted() {
        console.log('I live!');
    }
}

</script>
