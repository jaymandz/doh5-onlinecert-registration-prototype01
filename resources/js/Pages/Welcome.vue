<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Certification from '@/Svg/Certification.vue';
import Check from '@/Svg/Check.vue';
import ArrowRight from '@/Svg/ArrowRight.vue';
import Button from '@/Components/Button.vue';
import Modal from '@/Components/Modal.vue';
import Input from '@/Components/Input.vue';
import InputError from '@/Components/InputError.vue';
import Select from '@/Components/Select.vue';
import Label from '@/Components/Label.vue';

defineProps({
    canLogin: Boolean,
});

const isOpen = ref(false);

const openModal = () => {
    isOpen.value = true
};

const closeModal = () => {
    isOpen.value = false
};
</script>

<template>
    <Head title="Welcome" />

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-green-500 selection:text-white text-slate-700">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link>

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in
                </Link>
            </template>
        </div>

        <div class="max-w-7xl mx-auto">
            <div class="grid lg:min-h-screen lg:grid lg:place-content-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="grid place-content-center">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl md:leading-tight font-bold mb-4">A Web Application for <span class="text-green-700">DOH RO5</span> Facility Certification</h1>

                        <p class="text-base md:text-lg leading-snug mb-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis nesciunt, fugiat doloremque earum excepturi, odio voluptas reiciendis possimus a necessitatibus qui aut. Ducimus iure consequuntur omnis consectetur, necessitatibus quas sit.</p>

                        <Button class="sm:w-48" @click="openModal">
                            <span class="mr-2 font-semibold">Get Certified</span>
                            <ArrowRight class="fill-slate-200" />
                        </Button>
                    </div>

                    <div class="hidden sm:grid place-content-center">
                        <Certification width="360" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Modal :show="isOpen" title="Facility Certification" @close="closeModal">
        <form>
            <div class="flex flex-col space-y-3">
                <div class="relative">
                    <Label for="facility-code" value="Facility Code" required />
                    <Input type="text" v-model="facility_code" placeholder="DOH00000000000000" required />
                    <InputError v-if="facility_code" :message="facility_code" />
                </div>
                
                <div class="relative">
                    <Label for="program" value="Program" required />
                    <Select>
                        <option value="" selected disabled>-- Select program --</option>
                        <option value="ABTC">ABTC</option>
                        <option value="TB DOTS">TB DOTS</option>
                    </Select>
                </div>
            </div>

            <div class="mt-5 flex items-center justify-between space-x-8">
                <span class="text-xs max-w-xs">Don't have health facility code? Check here at the <a href="https://nhfr.doh.gov.ph/" target="_blank" class="underline text-sky-600">National Health Facility Registry</a></span>

                <Link :href="route('assessment-tool')" class="cursor-pointer flex justify-between items-center px-5 py-2 text-sm font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-slate-800 text-white bg-green-700 hover:bg-green-800 focus:ring-green-600 dark:focus:ring-green-600': category === 'primary">
                    <Check class="fill-slate-200 h-5 w-5 mr-1" />
                    <span>Proceed</span>
                </Link>
            </div>
        </form>
    </Modal>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
