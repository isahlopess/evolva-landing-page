# 📊 Evolva: Landing Page SaaS Interativa (Full-Stack)

Este projeto é uma Landing Page moderna e interativa construída para demonstrar proficiência no ecossistema de desenvolvimento web Full-Stack. Ele simula a página inicial de um software SaaS (Software as a Service) com ênfase em Gestão e Crescimento.

---

## ✨ Funcionalidades Principais

O projeto **Evolva** destaca o desenvolvimento de componentes reativos e a integração limpa entre frontend e backend.

* **Comunicação Vue/Laravel:** Formulário de subscrição no rodapé que envia dados (e-mail) para um *endpoint* Laravel para validação em tempo real (AJAX via Axios).
* **Interatividade Frontend (Vue.js):** Seção de preços dinâmica que alterna entre planos "Mensal" e "Anual" (com cálculo de desconto) usando a Composition API.
* **Design Sofisticado (Tailwind CSS):** Estilização moderna e responsiva.
* **UX/Acessibilidade:**
    * **Modo Escuro (Dark Mode):** Alternância de tema gerenciada pelo Vue.js com persistência via `localStorage`.
    * **Animações:** Efeitos de rolagem suave (Smooth Scroll) e animações de entrada (AOS) para as seções, elevando a experiência do utilizador.

---

## 🛠️ Tecnologias Utilizadas

| Categoria | Tecnologia |
| :--- | :--- |
| **Backend/Framework** | Laravel 11+ |
| **Frontend/Reatividade** | Vue.js 3 (Composition API) |
| **Estilização** | Tailwind CSS (Com Dark Mode baseado em classes) |
| **Compilação de Assets** | Vite |
| **Interatividade** | Axios (AJAX), AOS (Animate On Scroll) |
| **Banco de Dados** | SQLite/MySQL (Usado para simular validação de unicidade na tabela `users`) |

---

## ⚙️ Como Rodar o Projeto Localmente

Siga estas instruções para configurar e executar o projeto **Evolva** na sua máquina local.

### 1. Pré-requisitos

Você precisará ter instalado:

* PHP (v8.2 ou superior)
* Composer
* Node.js e NPM
* Um servidor web (Laragon, XAMPP, Valet ou Docker/Sail)

### 2. Instalação e Configuração

```bash
# Clone o repositório
git clone https://github.com/isahlopess/evolva-landing-page evolva-saas-lp
cd evolva-saas-lp

# Instale as dependências do Composer (Backend)
composer install

# Crie e configure o ambiente
cp .env.example .env

# Gere a chave de aplicação
php artisan key:generate

# Instale as dependências do Node (Frontend e Tailwind)
npm install

# Instale o Laravel Breeze e compile os assets
php artisan breeze:install vue
# Nota: O código já está configurado, mas este passo garante que o scaffolding Breeze base exista.
```
### 3. Execução

Abra dois terminais na pasta raiz do projeto:

1.  **Terminal 1 (Vite - Compilação e Hot Reload):**
    ```bash
    npm run dev
    ```

2.  **Terminal 2 (Laravel - Servidor):**
    ```bash
    php artisan serve
    ```

O projeto estará acessível em `http://127.0.0.1:8000`.

---

### 📝 Documentação e Contribuição

Este projeto foi criado como parte de um portfólio. Para referências sobre o framework, consulte a documentação oficial.

* [Documentação Oficial do Laravel](https://laravel.com/docs)
* [Documentação Oficial do Vue.js](https://vuejs.org/guide/introduction.html)
* [Documentação Oficial do Tailwind CSS](https://tailwindcss.com/docs)
