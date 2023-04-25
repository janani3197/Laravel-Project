<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
const form = useForm({
  ChoosenCarer: '',
});
</script>


<template>
  <BootstrapLayout>
    <div class="container">

      <h3>Your care for the day has been received </h3>

      <h3>Pending confirmation from caretaker : {{ CaretakerInfo.name }} </h3>


              

  </div>
  </BootstrapLayout>
</template>

<script>

export default {
    data() {
        return {
            message: 'Hello there!'
        }
    },

    props: {
        CaretakerInfo: {
            required: true,
            // type: Array
        }
    },

    methods: {
        someFunction() {
            // alert('i was clicked!');
        }
    },

    mounted() {
        console.log('I live!');
    }
}

</script>