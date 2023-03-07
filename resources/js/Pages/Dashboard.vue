<script setup>
import { ref } from 'vue'

import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import NavLink from '@/Components/NavLink.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'

const props = defineProps({
    successType: String,
})

const isShowingImportSuccessNotif = ref(props.successType == 'sImport')
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-3">
                    <SecondaryButton @click="$event.view.location.href = '/provinces'">
                        Manage provinces
                    </SecondaryButton>
                    <SecondaryButton @click="$event.view.location.href = '/importCsv'">
                        Import CSV from NHFR
                    </SecondaryButton>
                </div>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg onlinecert-content-card">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>
        <div class="space-y-5">
        <div v-if="isShowingImportSuccessNotif" class="absolute mx-auto max-w-[400px] rounded-xl border border-secondary-50 bg-white p-4 text-sm shadow-lg bottom-6 right-6">
            <button class="absolute top-4 right-4 ml-auto text-secondary-500 hover:text-secondary-900" @click="isShowingImportSuccessNotif = false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
            </svg>
            </button>
            <div class="flex space-x-4">
            <div class="flex-1">
                <h4 class="pr-6 font-medium text-secondary-900">Facilities have been successfully imported</h4>
                <div class="mt-1 text-secondary-500"></div>
                <div class="mt-2 flex space-x-4">
                <button class="inline-block font-medium leading-loose text-secondary-500 hover:text-secondary-900" @click="isShowingImportSuccessNotif = false">Dismiss</button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </AuthenticatedLayout>
</template>
