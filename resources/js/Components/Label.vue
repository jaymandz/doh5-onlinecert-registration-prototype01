<script setup>
defineProps({
    value: {
        type: String
    },
    extra: {
        type: String
    },
    required: {
        type: Boolean,
        default: false
    },
    class: {
        type: String,
        default: 'text-xs'
    }
});
</script>

<template>
    <label :class="class" class="block font-medium text-slate-600 dark:text-slate-300">
        <span v-if="value">{{ value }} <span v-if="extra" class="font-normal text-xs italic">({{ extra }})</span></span>
        <span class="text-red-700" v-if="required">*</span>
        <span v-else>
            <slot />
        </span>
    </label>
</template>
