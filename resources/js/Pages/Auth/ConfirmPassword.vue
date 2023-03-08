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

const form = useForm({
    password: '',
});

const submit = () => {
    form.post(route('password.confirm'), {
        onFinish: () => form.reset(),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Confirm Password" />

        <div class="mb-4 text-sm text-gray-600">
            This is a secure area of the application. Please confirm your password before continuing.
        </div>

        <form @submit.prevent="submit">
            <div>
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
                    autocomplete="current-password"
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex justify-end mt-4">
<<<<<<< HEAD
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Confirm
                </PrimaryButton>
=======
                <Button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Confirm
                </Button>
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
            </div>
        </form>
    </GuestLayout>
</template>
