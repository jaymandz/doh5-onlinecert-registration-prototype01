<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
<<<<<<< HEAD
        <p class="text-sm text-red-600">
=======
        <p class="text-red-600 text-sm leading-6 block">
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
            {{ message }}
        </p>
    </div>
</template>
