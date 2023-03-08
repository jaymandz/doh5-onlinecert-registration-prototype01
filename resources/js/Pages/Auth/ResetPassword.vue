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

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.store'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Reset Password" />

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

            <div class="mt-4">
<<<<<<< HEAD
                <InputLabel for="password" value="Password" />

                <TextInput
=======
                <Label for="password" value="Password" />

                <Input
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
<<<<<<< HEAD
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
=======
                <Label for="password_confirmation" value="Confirm Password" />

                <Input
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
<<<<<<< HEAD
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Reset Password
                </PrimaryButton>
=======
                <Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Reset Password
                </Button>
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
            </div>
        </form>
    </GuestLayout>
</template>
