<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import TextInput from '@/Components/TextInput.vue'

defineProps({
    csrfToken: String,
})
</script>

<template>
    <Head title="Import CSV from NHFR" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Import CSV from NHFR</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <SecondaryButton class="mb-3" @click="$event.view.location.href = 'dashboard'">
                    To dashboard
                </SecondaryButton>
                <div class="bg-white overflow-y-auto shadow-sm sm:rounded-lg p-6 onlinecert-content-card">
                    <form enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" :value="csrfToken">
                        <p class="mb-4">Upload a CSV file exported from the NHFR using the field below.</p>
                        <div class="mb-4">
                            <TextInput required name="csv_file" type="file"></TextInput>
                        </div>
                        <PrimaryButton>Upload</PrimaryButton>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
