<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Registo" />

        <form @submit.prevent="submit" class="bg-white dark:bg-gray-900 w-full max-w-sm p-4">

            <h1 class="text-gray-900 dark:text-white font-bold text-2xl mb-1">Crie sua Conta</h1>
            <p class="text-sm font-normal text-gray-600 dark:text-gray-400 mb-7">Comece a evoluir hoje.</p>

            <div>
                <label for="name" class="sr-only">Nome</label>
                <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <input
                        id="name"
                        type="text"
                        placeholder="Seu Nome Completo"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                        class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                    />
                </div>
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <label for="email" class="sr-only">Email</label>
                <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input
                        id="email"
                        type="email"
                        placeholder="Seu Melhor Email"
                        v-model="form.email"
                        required
                        autocomplete="username"
                        class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                    />
                </div>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <label for="password" class="sr-only">Password</label>
                <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input
                        id="password"
                        type="password"
                        placeholder="Sua Senha"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                        class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                    />
                </div>
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <label for="password_confirmation" class="sr-only">Confirm Password</label>
                <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    <input
                        id="password_confirmation"
                        type="password"
                        placeholder="Confirme a Senha"
                        v-model="form.password_confirmation"
                        required
                        autocomplete="new-password"
                        class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                    />
                </div>
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="mt-6 flex items-center justify-end">
                <Link
                    :href="route('login')"
                    class="rounded-md text-sm text-indigo-600 dark:text-indigo-400 underline hover:text-indigo-800 dark:hover:text-indigo-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900"
                >
                    Já está registrado?
                </Link>

                <button
                    type="submit"
                    class="ms-4 w-full py-2 rounded-2xl bg-indigo-600 dark:bg-indigo-700 hover:bg-indigo-700 dark:hover:bg-indigo-600 text-white font-semibold mb-2 text-base"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Registar
                </button>
            </div>
        </form>
    </GuestLayout>
</template>
