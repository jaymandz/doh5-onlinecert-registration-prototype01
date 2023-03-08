<script setup>
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
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }
            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Update Password</h2>

            <p class="mt-1 text-sm text-gray-600">
                Ensure your account is using a long, random password to stay secure.
            </p>
        </header>

        <form @submit.prevent="updatePassword" class="mt-6 space-y-6">
            <div>
<<<<<<< HEAD
                <InputLabel for="current_password" value="Current Password" />

                <TextInput
=======
                <Label for="current_password" value="Current Password" />

                <Input
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
                    id="current_password"
                    ref="currentPasswordInput"
                    v-model="form.current_password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="current-password"
                />

                <InputError :message="form.errors.current_password" class="mt-2" />
            </div>

            <div>
<<<<<<< HEAD
                <InputLabel for="password" value="New Password" />

                <TextInput
=======
                <Label for="password" value="New Password" />

                <Input
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
                    id="password"
                    ref="passwordInput"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />

                <InputError :message="form.errors.password" class="mt-2" />
            </div>

            <div>
<<<<<<< HEAD
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
=======
                <Label for="password_confirmation" value="Confirm Password" />

                <Input
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    autocomplete="new-password"
                />

                <InputError :message="form.errors.password_confirmation" class="mt-2" />
            </div>

            <div class="flex items-center gap-4">
<<<<<<< HEAD
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>
=======
                <Button :disabled="form.processing">Save</Button>
>>>>>>> 2a9358f0223b1d0dc06d1e62cfb64fd7f75eb88a

                <Transition enter-from-class="opacity-0" leave-to-class="opacity-0" class="transition ease-in-out">
                    <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">Saved.</p>
                </Transition>
            </div>
        </form>
    </section>
</template>
