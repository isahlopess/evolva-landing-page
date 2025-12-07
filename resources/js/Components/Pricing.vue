<template>
    <div class="flex flex-col items-center">
        <div class="inline-flex p-1 bg-indigo-200 rounded-full mb-12 dark:bg-gray-700">
            <button
                @click="isMonthly = true"
                :class="{'bg-indigo-600 text-white shadow-md': isMonthly, 'text-gray-700 dark:text-gray-300': !isMonthly}"
                :aria-pressed="isMonthly"
                class="py-2 px-6 rounded-full text-sm font-semibold transition duration-300"
            >
                Mensal
            </button>
            <button
                @click="isMonthly = false"
                :class="{'bg-indigo-600 text-white shadow-md': !isMonthly, 'text-gray-700 dark:text-gray-300': isMonthly}"
                :aria-pressed="!isMonthly"
                class="py-2 px-6 rounded-full text-sm font-semibold transition duration-300 relative"
            >
                Anual
                <span class="absolute top-0 right-0 -mt-2 -mr-2 bg-yellow-500 text-xs font-bold text-white rounded-full px-2 py-0.5 transform rotate-6">
                    -20%
                </span>
            </button>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3 w-full">
            <div class="bg-white border border-gray-200 rounded-xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl
                        dark:bg-gray-800 dark:border-gray-700 dark:shadow-none dark:hover:shadow-indigo-500/30">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Plano Básico</h3>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Ideal para freelancers e pequenos projetos.</p>
                <div class="mt-6 flex items-baseline">
                    <span class="text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        R$ {{ currentPrice(29) }}
                    </span>
                    <span class="ml-1 text-xl font-medium text-gray-500 dark:text-gray-400">/{{ isMonthly ? 'mês' : 'ano' }}</span>
                </div>
                <a href="#" class="mt-8 block w-full bg-indigo-100 text-indigo-700 py-3 rounded-lg font-semibold text-center hover:bg-indigo-200
                         dark:bg-indigo-700 dark:text-white dark:hover:bg-indigo-600">
                    Começar
                </a>
                <ul class="mt-6 space-y-3 text-gray-600 dark:text-gray-400">
                    <li>✔️ 1 Usuário</li>
                    <li>✔️ 1 GB de Armazenamento</li>
                    <li>❌ Suporte 24/7</li>
                </ul>
            </div>

            <div class="bg-indigo-600 text-white rounded-xl shadow-2xl p-8 ring-4 ring-indigo-400 transform scale-105
                        dark:bg-indigo-700 dark:shadow-indigo-600/50 dark:ring-indigo-500">
                <h3 class="text-2xl font-bold">Plano Pro</h3> <p class="mt-4 text-indigo-200 dark:text-indigo-300">Para equipas em crescimento que precisam de mais poder.</p>
                <div class="mt-6 flex items-baseline">
                    <span class="text-5xl font-extrabold tracking-tight">
                        R$ {{ currentPrice(59) }}
                    </span>
                    <span class="ml-1 text-xl font-medium">/{{ isMonthly ? 'mês' : 'ano' }}</span>
                </div>
                <a href="#" class="mt-8 block w-full bg-white text-indigo-700 py-3 rounded-lg font-bold text-center hover:bg-indigo-50 transition duration-300
                         dark:bg-white dark:text-indigo-800 dark:hover:bg-indigo-100">
                    Mudar para Pro
                </a>
                <ul class="mt-6 space-y-3 text-indigo-100 dark:text-indigo-200">
                    <li>✔️ 10 Usuários</li>
                    <li>✔️ 100 GB de Armazenamento</li>
                    <li>✔️ Suporte Prioritário 24/7</li>
                    <li>✔️ Relatórios Avançados</li>
                </ul>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl shadow-lg p-8 transform transition duration-300 hover:shadow-xl
                        dark:bg-gray-800 dark:border-gray-700 dark:shadow-none dark:hover:shadow-indigo-500/30">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Plano Empresarial</h3>
                <p class="mt-4 text-gray-500 dark:text-gray-400">Soluções completas para grandes organizações.</p>
                <div class="mt-6 flex items-baseline">
                    <span class="text-5xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                        R$ {{ currentPrice(199) }}
                    </span>
                    <span class="ml-1 text-xl font-medium text-gray-500 dark:text-gray-400">/{{ isMonthly ? 'mês' : 'ano' }}</span>
                </div>
                <a href="#" class="mt-8 block w-full bg-indigo-100 text-indigo-700 py-3 rounded-lg font-semibold text-center hover:bg-indigo-200
                         dark:bg-indigo-700 dark:text-white dark:hover:bg-indigo-600">
                    Fale Connosco
                </a>
                <ul class="mt-6 space-y-3 text-gray-600 dark:text-gray-400">
                    <li>✔️ Usuários Ilimitados</li>
                    <li>✔️ Armazenamento Ilimitado</li>
                    <li>✔️ Suporte 24/7 Dedicado</li>
                    <li>✔️ Integrações Customizadas</li>
                </ul>
            </div>

        </div>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const isMonthly = ref(true);

const currentPrice = (basePrice) => {
    if (isMonthly.value) {
        return basePrice;
    }

    const annualPrice = basePrice * 10;
    return annualPrice;
};
</script>
