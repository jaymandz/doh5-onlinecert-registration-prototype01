<script setup>
import { ref } from 'vue';

defineProps(['modelValue', 'className']);

defineEmits(['update:modelValue']);

const input = ref(null);
</script>

<template>
    <select :class="className"
        class="appearance-none relative block w-full text-ellipsis mt-1 px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm placeholder-transparent dark:bg-slate-900 dark:text-slate-200 dark:border-slate-800 dark:focus:ring-2 dark:focus:ring-slate-800 dark:focus:ring-offset-2 dark:focus:outline-none dark:focus:ring-offset-slate-900"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
        <slot />
    </select>
</template>
