# 📊 Evolva: Landing Page SaaS Interativa (Full-Stack)

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/Vue.js-3-42B883?style=for-the-badge&logo=vuedotjs&logoColor=white"/>
  <img src="https://img.shields.io/badge/TailwindCSS-3-38B2AC?style=for-the-badge&logo=tailwindcss&logoColor=white"/>
  <img src="https://img.shields.io/badge/Vite-Bundler-646CFF?style=for-the-badge&logo=vite&logoColor=white"/>
  <img src="https://img.shields.io/badge/Axios-HTTP%20Client-5A29E4?style=for-the-badge&logo=axios&logoColor=white"/>
</p>

<p align="center">
  <strong>Landing Page moderna, interativa e totalmente responsiva construída com Laravel + Vue.js.</strong><br/>
  Simula uma página inicial de SaaS focada em gestão, crescimento e UX avançada.
</p>


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
