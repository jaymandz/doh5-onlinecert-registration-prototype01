<script setup>
import { onMounted, ref } from 'vue';

defineProps(['modelValue', 'className']);

defineEmits(['update:modelValue']);

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input :class="className"
        class="appearance-none relative block mt-1 w-full px-3 py-2 border border-gray-300 text-slate-800 rounded-lg focus:outline-none focus:ring-green-700 focus:border-green-700 focus:z-10 sm:text-sm dark:bg-slate-800 dark:border-slate-700 dark:focus:border-green-700 dark:text-slate-300"
        :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
</template>

