<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Certification from '@/Svg/Certification.vue';
import Button from '@/Components/Button.vue';
import ArrowRight from '@/Svg/ArrowRight.vue';

defineProps({
    canLogin: Boolean,
});
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
