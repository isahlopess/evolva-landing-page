<template>
    <button
        @click="toggleTheme"
        :aria-label="isDark ? 'Ativar Modo Claro' : 'Ativar Modo Escuro'"
        class="p-2 rounded-full transition duration-300 transform"
        :class="isDark ? 'text-white bg-indigo-600 hover:bg-indigo-700 shadow-lg' : 'text-indigo-600 hover:bg-indigo-100'"
    >
        <svg v-if="!isDark" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="5"></circle>
            <line x1="12" y1="1" x2="12" y2="3"></line>
            <line x1="12" y1="21" x2="12" y2="23"></line>
            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
            <line x1="1" y1="12" x2="3" y2="12"></line>
            <line x1="21" y1="12" x2="23" y2="12"></line>
            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
        </svg>

        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
    </button>
</template>

<script setup>
import { ref, watch, onMounted } from 'vue';
const isDark = ref(false);
function applyTheme(value) {
    if (value) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
}

function toggleTheme() {
    isDark.value = !isDark.value;
}

watch(isDark, (newValue) => {
    applyTheme(newValue);
});

onMounted(() => {
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (savedTheme) {
        isDark.value = savedTheme === 'dark';
    } else {
        isDark.value = prefersDark;
    }
    applyTheme(isDark.value);
});
</script>
