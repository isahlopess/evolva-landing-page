<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Evolva | Gestão e Crescimento</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('images/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/android-chrome-192x192.png') }}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-gray-900">

<header class="bg-white shadow-sm sticky top-0 z-50 dark:bg-gray-800">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-2 text-3xl font-extrabold text-indigo-700">
            <img src="{{ asset('images/favicon-32x32.png') }}" alt="Evolva Logo" class="h-8 w-8">
            <span>Evolva</span>
        </div>

        <div class="space-x-4 flex items-center">
            <div id="theme-app" class="flex"></div>
            <a href="#features" class="text-gray-600 hover:text-indigo-700 font-medium dark:text-gray-300 dark:hover:text-indigo-400">Recursos</a>
            <a href="#precos" class="text-gray-600 hover:text-indigo-700 font-medium dark:text-gray-300 dark:hover:text-indigo-400">Preços</a>

            @auth
                <div x-data="{ open: false }" class="relative">

                    <button
                        @click="open = !open"
                        class="p-2 border border-transparent rounded-full text-white bg-indigo-600 hover:bg-indigo-700 transition duration-300 shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a1.5 1.5 0 011.488-1.394h14.022a1.5 1.5 0 011.488 1.394" />
                        </svg>
                    </button>

                    <div
                        x-show="open"
                        @click.outside="open = false"
                        class="absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5 z-10"
                        style="display: none;"
                    >
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="w-full text-left flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l3 3m0 0l-3 3m3-3H4.5" />
                                </svg>
                                Deslogar
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">Entrar</a>
            @endauth
        </div>
    </nav>
</header>

<main>
    <section id="hero" class="pt-20 pb-10 text-center bg-white dark:bg-gray-900">
        <h1 class="text-6xl font-extrabold tracking-tight text-gray-900 sm:text-7xl dark:text-white">
            A Próxima Geração em <span class="text-indigo-600">Gestão e Crescimento</span>.
        </h1>
        <p class="mt-6 text-xl text-gray-500 max-w-3xl mx-auto dark:text-gray-400">
            Desenvolvido para escalabilidade e simplicidade. Transforme dados complexos em decisões estratégicas.
        </p>
        <div class="mt-10">
            <a href="#precos" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-xl shadow-lg text-white bg-indigo-600 hover:bg-indigo-700 transform transition duration-300 hover:scale-105">
                Experimente Gratuitamente
            </a>
        </div>
    </section>

    <section id="precos" class="bg-gray-100 max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 dark:bg-gray-800" data-aos="zoom-in" data-aos-duration="600">
        <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-16 dark:text-white">Escolha o Plano Perfeito</h2>
        <div id="pricing-app"></div>
    </section>

    <section id="features" class="bg-gray-100 py-20 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-extrabold text-gray-900 text-center mb-16 dark:text-white" data-aos="fade-down">
                Por Que a <span class="text-indigo-600 dark:text-indigo-400">Evolva</span> é a Escolha de Líderes
            </h2>

            <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 dark:bg-gray-800 dark:shadow-none dark:hover:shadow-indigo-500/30" data-aos="fade-up" data-aos-delay="0">
                    <div class="text-indigo-600 text-4xl mb-4">✨</div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Interface Intuitiva</h3>
                    <p class="mt-2 text-gray-500 dark:text-gray-300">Navegue com facilidade. Reduza o tempo de integração da equipa com um design focado na experiência do utilizador.</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 dark:bg-gray-800 dark:shadow-none dark:hover:shadow-indigo-500/30" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-indigo-600 text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Performance Inigualável</h3>
                    <p class="mt-2 text-gray-500 dark:text-gray-300">Construído com tecnologia moderna (Vite/Laravel), garantindo carregamentos de página ultrarrápidos e latência mínima.</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition duration-300 dark:bg-gray-800 dark:shadow-none dark:hover:shadow-indigo-500/30" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-indigo-600 text-4xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Segurança de Nível Empresarial</h3>
                    <p class="mt-2 text-gray-500 dark:text-gray-300">Proteja seus dados. Utilizamos o sistema de segurança robusto do Laravel e práticas de criptografia líderes de mercado.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-12 dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-col items-center mb-10 border-b border-gray-700 pb-8">
                <h3 class="text-2xl font-bold mb-4">Mantenha-se Atualizado!</h3>
                <form id="subscribe-form" class="flex w-full max-w-lg">
                    @csrf
                    <input
                        type="email"
                        id="email-input"
                        name="email"
                        placeholder="Digite seu melhor email"
                        required
                        class="flex-1 min-w-0 appearance-none rounded-l-md border border-white px-4 py-3 text-base
                           text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500
                           focus:border-indigo-500
                           dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:border-gray-600"
                    >
                    <button
                        type="submit"
                        class="flex-shrink-0 bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-6 rounded-r-md transition duration-300"
                    >
                        Subscrever
                    </button>
                </form>
                <p id="message-status" class="mt-4 text-sm"></p>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">

                <p class="order-2 md:order-1 mt-4 md:mt-0">
                    &copy; 2025 Evolva. Todos os direitos reservados.
                </p>

                <div class="order-1 md:order-2 space-x-6">
                    <a href="#" class="hover:text-white transition duration-300">Privacidade</a>
                    <a href="#" class="hover:text-white transition duration-300">Termos</a>
                    <a href="#" class="hover:text-white transition duration-300">Suporte</a>
                </div>
            </div>
        </div>
    </footer>
</main>
</body>
</html>
