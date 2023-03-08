<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <p class="text-red-600 text-sm leading-6 block">
            {{ message }}
        </p>
    </div>
</template>
