<script setup>
import { ref } from 'vue';
import { TransitionRoot, TransitionChild, Dialog, DialogTitle, DialogOverlay } from '@headlessui/vue';

defineProps({
    isOpen: {
        type: Boolean,
        default: false
    },
    class: {
        type: String,
        default: 'max-w-xl'
    },
    title: {
        type: String,
        default: 'Modal Title'
    }
});

const isOpen = ref(false)
</script>

<template>
    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" @close="$emit('closeModal')">
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="min-h-screen px-4 text-center">
                    <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0"
                        enter-to="opacity-100" leave="duration-200 ease-in" leave-from="opacity-100" leave-to="opacity-0">
                        <DialogOverlay class="fixed inset-0 bg-black/50" />
                    </TransitionChild>

                    <span class="inline-block h-screen align-middle" aria-hidden="true">
                        &#8203;
                    </span>

                    <TransitionChild as="template" enter="duration-300 ease-out" enter-from="opacity-0 scale-95"
                        enter-to="opacity-100 scale-100" leave="duration-200 ease-in" leave-from="opacity-100 scale-100"
                        leave-to="opacity-0 scale-95">
                        <div :class="class"
                            class="inline-block w-full p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl dark:bg-slate-900">
                            <DialogTitle class="text-lg font-medium dark:text-slate-300 text-slate-700"> {{ title }} </DialogTitle>

                            <div class="relative mt-6">
                                <slot />
                            </div>
                        </div>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
