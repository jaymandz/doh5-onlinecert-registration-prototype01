<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
<<<<<<< HEAD
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
=======
import Label from '@/Components/Label.vue';
import Button from '@/Components/Button.vue';
import Input from '@/Components/Input.vue';
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset
            link that will allow you to choose a new one.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
<<<<<<< HEAD
                <InputLabel for="email" value="Email" />

                <TextInput
=======
                <Label for="email" value="Email" />

                <Input
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="flex items-center justify-end mt-4">
<<<<<<< HEAD
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Email Password Reset Link
                </PrimaryButton>
=======
                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Email Password Reset Link
                </Button>
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
            </div>
        </form>
    </GuestLayout>
</template>
