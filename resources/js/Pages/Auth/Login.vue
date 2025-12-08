<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: { type: Boolean },
    status: { type: String },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
        onSuccess: () => {
            window.location = route('home');
        }
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="bg-white dark:bg-gray-900 w-full max-w-sm p-4">

            <h1 class="text-gray-900 dark:text-white font-bold text-2xl mb-1">Olá!</h1>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400 mb-7">Bem-vindo(a) ao Evolva!</p>

            <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                </svg>
                <input
                    v-model="form.email"
                    type="email"
                    id="email"
                    placeholder="Endereço de Email"
                    required
                    class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                />
            </div>
            <InputError class="mt-2" :message="form.errors.email" />

            <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                </svg>
                <input
                    v-model="form.password"
                    type="password"
                    id="password"
                    placeholder="Senha"
                    required
                    class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                />
            </div>
            <InputError class="mt-2" :message="form.errors.password" />

            <div class="flex justify-between items-center mb-4">
                <label class="flex items-center">
                    <input
                        type="checkbox"
                        name="remember"
                        v-model="form.remember"
                        class="rounded-full border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-800"
                    >
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Lembrar-me</span>
                </label>

                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-sm hover:text-indigo-600 dark:text-indigo-400 cursor-pointer"
                >
                    Esqueceu a senha?
                </Link>
            </div>

            <button
                type="submit"
                class="block w-full bg-indigo-600 dark:bg-indigo-700 mt-4 py-2 rounded-2xl text-white font-semibold mb-2 hover:bg-indigo-700 dark:hover:bg-indigo-600"
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Entrar
            </button>

            <p class="text-sm text-center font-normal text-gray-600 dark:text-gray-400 mt-4">
                Não tem conta?
                <Link :href="route('register')" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">
                    Registre-se
                </Link>
            </p>

        </form>
    </GuestLayout>
</template>
