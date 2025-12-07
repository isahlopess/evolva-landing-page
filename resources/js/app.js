import './bootstrap';
import '../css/app.css';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { createApp } from 'vue';
import Pricing from './Components/Pricing.vue';
import ThemeToggle from "@/Components/ThemeToggle.vue";

if (document.getElementById('pricing-app')) {
    createApp(Pricing)
        .mount('#pricing-app');
}

if (document.getElementById('theme-app')) {
    createApp(ThemeToggle)
        .mount('#theme-app');
}

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000,
        once: true,
    });

    const form = document.getElementById('subscribe-form');
    const messageStatus = document.getElementById('message-status');

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            messageStatus.textContent = 'Enviando...';
            messageStatus.className = 'mt-4 text-sm text-yellow-400';

            const formData = new FormData(form);

            try {
                const response = await axios.post(form.action, formData);
                messageStatus.textContent = response.data.message;
                messageStatus.className = 'mt-4 text-sm text-green-400';
                form.reset();

            } catch (error) {
                const errors = error.response.data.errors;
                let errorMessage = 'Ocorreu um erro.';

                if (errors && errors.email) {
                    errorMessage = errors.email[0];
                }

                messageStatus.textContent = errorMessage;
                messageStatus.className = 'mt-4 text-sm text-red-400';
            }
        });
    }
});
