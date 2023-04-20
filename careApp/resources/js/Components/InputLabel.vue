<script setup>
defineProps({
    value: {
        type: String,
    },
});
</script>

<template>
    <label class="block font-medium font-bold text-md text-black-700" style="font-family:serif;">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
</template>
