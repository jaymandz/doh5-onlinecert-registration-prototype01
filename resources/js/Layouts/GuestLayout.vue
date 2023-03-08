<script setup>
<<<<<<< HEAD
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
=======
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
<<<<<<< HEAD
        <div>
            <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
=======
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
            <slot />
        </div>
    </div>
</template>
