<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
    category: {
        type: String,
        default: 'primary'
    }
});
</script>

<template>
    <button :type="type"
        class="cursor-pointer flex justify-center items-center px-5 py-2 text-sm font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-slate-800"
        :class="{
            'text-slate-100 bg-green-700 hover:bg-green-800 focus:ring-green-600 dark:focus:ring-green-600': category === 'primary',
            'text-slate-100 bg-red-700 hover:bg-red-800 focus:ring-red-600 dark:focus:ring-red-600': category === 'danger',
            'bg-white border-gray-100 hover:bg-gray-100 focus:ring-gray-300 dark:bg-slate-900 dark:text-slate-300 dark:focus:ring-offset-slate-800 dark:focus:ring-slate-900 dark:border-slate-900 dark:hover:bg-slate-700 dark:hover:border-slate-700': category === 'muted'
        }">
        <slot />
    </button>
</template>
