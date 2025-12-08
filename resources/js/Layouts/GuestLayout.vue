<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="h-screen flex antialiased">

        <div
            class="hidden lg:flex w-1/2 justify-around items-center p-12
                   bg-gradient-to-tr from-indigo-800 to-purple-700"
        >
            <div class="text-center">
                <h1 class="text-white font-bold text-4xl font-sans mb-1">Evolva</h1>

                <p class="text-white mt-1 max-w-sm mx-auto">
                    A plataforma mais avançada para Gestão e Crescimento Estratégico.
                </p>

                <a href="/"
                   class="block w-40 bg-white text-indigo-800 mt-8 py-3 mx-auto rounded-full font-bold shadow-lg
               hover:bg-indigo-50 transition duration-300 transform hover:scale-105"
                >
                    Conheça
                </a>
            </div>
        </div>

        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white dark:bg-gray-900 p-8 sm:p-12">

            <div class="w-full max-w-sm">
                <slot />
            </div>

        </div>
    </div>
</template>
