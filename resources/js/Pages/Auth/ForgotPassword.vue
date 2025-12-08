<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
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
        <Head title="Esqueceu a Senha" />

        <h1 class="text-gray-900 dark:text-white font-bold text-2xl mb-1">Redefinir Senha</h1>
        <p class="text-sm font-normal text-gray-600 dark:text-gray-400 mb-4">
            Sem problemas! Insira seu endereço de email abaixo e enviaremos um link de redefinição.
        </p>

        <div
            v-if="status"
            class="mb-4 text-sm font-medium text-green-600"
        >
            {{ status }}
        </div>

        <form @submit.prevent="submit" class="w-full">
            <div>
                <InputLabel for="email" value="Email" class="dark:text-gray-200 sr-only" />

                <div class="flex items-center border-2 border-gray-300 dark:border-gray-700 py-2 px-3 rounded-2xl mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input
                        v-model="form.email"
                        type="email"
                        id="email"
                        placeholder="Endereço de Email"
                        required
                        autofocus
                        class="pl-2 outline-none border-none w-full bg-transparent dark:text-white"
                    />
                </div>
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-6 flex items-center justify-center">
                <PrimaryButton
                    class="w-full py-2 rounded-2xl justify-center bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-700 dark:hover:bg-indigo-600 text-base font-semibold"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Enviar Link de Redefinição
                </PrimaryButton>
            </div>

            <p class="text-center text-sm text-gray-600 dark:text-gray-400 mt-4">
                <Link :href="route('login')" class="text-indigo-600 dark:text-indigo-400 font-semibold hover:underline">
                    Voltar ao Login
                </Link>
            </p>
        </form>
    </GuestLayout>
</template>
