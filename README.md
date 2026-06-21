<p align="center">
  <a href="https://github.com/joao-brit0/Arabet_es" target="_blank">
    <img src="public/images/banner.png" width="100%" alt="AraBet Banner" />
  </a>
</p>

<p align="center">
  A modern, integrated web platform built to simulate a sports betting system focused on Alagoas soccer.
</p>

<p align="center">
  <a href="#about"><img src="https://img.shields.io/badge/About-24292e?style=for-the-badge&logo=info&logoColor=white" alt="About" /></a>
  <a href="#demo"><img src="https://img.shields.io/badge/Demo-24292e?style=for-the-badge&logo=airplay&logoColor=white" alt="Demo" /></a>
  <a href="#built-with"><img src="https://img.shields.io/badge/Built%20With-24292e?style=for-the-badge&logo=react&logoColor=61DAFB" alt="Built With" /></a>
  <a href="#getting-started"><img src="https://img.shields.io/badge/Getting%20Started-24292e?style=for-the-badge&logo=laravel&logoColor=FF2D20" alt="Getting Started" /></a>
  <a href="#environment-variables--security"><img src="https://img.shields.io/badge/Security-24292e?style=for-the-badge&logo=springsecurity&logoColor=6DB33F" alt="Security" /></a>
  <a href="#contributing"><img src="https://img.shields.io/badge/Contributing-24292e?style=for-the-badge&logo=github&logoColor=white" alt="Contributing" /></a>
</p>
</br>

<br><hr><br>

<div id="about"></div>

<p align="left">
  <b style="font-size:24px;">About</b>
</p>

AraBet is all about providing a realistic sports betting experience, allowing users to place simple and multiple bets, manage simulated wallets, and track their bet history. It features a robust PHP/Laravel backend REST API and a fast, responsive React frontend smoothly connected via Inertia.js.

<br><hr><br>

<div id="demo"></div>

<p align="left">
  <b style="font-size:32px;">Demo</b>
</p>

<p align="center">
  <img src="public/images/demoArabet.gif" width="100%" alt="AraBet Demo" />
</p>
<br><hr><br>

<div id="built-with"></div>

<p align="left">
  <b style="font-size:32px;">Built With</b>
</p>

This project is built using the following major frameworks, libraries, and tools:


* [![React][React-shield]][React-url]
* [![Vite][Vite-shield]][Vite-url]
* [![Laravel][Laravel-shield]][Laravel-url]
* [![Inertia][Inertia-shield]][Inertia-url]
* [![Tailwind][Tailwind-shield]][Tailwind-url]
* [![PostgreSQL][Postgres-shield]][Postgres-url]
* [![Docker][Docker-shield]][Docker-url]

[React-shield]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://react.dev/
[Vite-shield]: https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=FFD62B
[Vite-url]: https://vite.dev/
[Laravel-shield]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com/
[Inertia-shield]: https://img.shields.io/badge/Inertia.js-9553E9?style=for-the-badge&logo=inertia&logoColor=white
[Inertia-url]: https://inertiajs.com/
[Tailwind-shield]: https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwind-url]: https://tailwindcss.com/
[Postgres-shield]: https://img.shields.io/badge/PostgreSQL-316192?style=for-the-badge&logo=postgresql&logoColor=white
[Postgres-url]: https://www.postgresql.org/
[Docker-shield]: https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white
[Docker-url]: https://www.docker.com/

<br><hr><br>

<div id="getting-started"></div>

<p align="left">
  <b style="font-size:32px;">Getting Started</b>
</p>

The easiest way to run the entire stack (Frontend, Backend, Database, and migrations) is using Docker alongside Composer and NPM.
### Prerequisites
Make sure you have the following installed on your machine:
- Docker & Docker Compose
- Node.js & NPM
- PHP & Composer

### Execution Steps

1. **Clone the Repository:**
   ```bash
   $ git clone https://github.com/joao-brit0/Arabet_es.git
   $ cd Arabet_es
   ```
   

2. **Setup Backend & Database:**
   
   Run the following commands at the project root to fetch dependencies, configure the environment, and generate the app key:
   ```bash
   $ composer install
   $ cp .env.example .env
   $ php artisan key:generate
   ```
   
>[!NOTE]
   >Ensure your PostgreSQL connection details are correctly set in the .env file before proceeding.

```bash
$ php artisan migrate --seed
```

  
3. **Spin up the Frontend & Serve the App:**

    Install JavaScript dependencies and start the Vite and Laravel servers:
```bash
   $ npm install
   $ composer run dev
```   


4. **Accessing the Applications:**

    Once initialization completes, you can access the applications at:
    * **Web Application:** `http://localhost:8000`
   * **Vite HMR (Development):** `http://localhost:5173`

<br><hr><br>

<div id="environment-variables--security"></div>

<p align="left">
  <b style="font-size:32px;">Environment Variables & Security</b>
</p>

Security is a priority for AraBet, especially concerning simulated wallet transactions and database interactions.

* **.env File:** Never commit your `.env` file to version control. It contains sensitive credentials such as your `DB_PASSWORD` and `APP_KEY`. Use `.env.example` to share the required environment structure with other developers.
* **Database Transactions:** Financial operations (like placing a bet or distributing prizes) are protected using `DB::transaction()` and row-level locking (`lockForUpdate()`) to prevent race conditions and balance duplication.
* **Validation:** All inputs are strictly validated using Laravel's Form Requests to prevent SQL Injection and Cross-Site Scripting (XSS).

<br><hr><br>

<div id="contributing"></div>

<p align="left">
  <b style="font-size:32px;">Contributing</b>
</p>

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<br><hr><br>

<h2>Authors</h2>

<table align="center">
  <tr>
    <td align="center">
      <a href="https://github.com/joao-brit0">
        <img src="https://github.com/joao-brit0.png" width="100px;" style="border-radius: 50%;" alt="João Brito"/><br />
        <sub><b>João Brito</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/Ewerton-Cavalcante-AL">
        <img src="https://github.com/Ewerton-Cavalcante-AL.png" width="100px;" style="border-radius: 50%;" alt="Ewerton Cavalcante"/><br />
        <sub><b>Ewerton Cavalcante</b></sub>
      </a>
    </td>
    <td align="center">
      <a href="https://github.com/IgorSantos20">
        <img src="https://github.com/IgorSantos20.png" width="100px;" style="border-radius: 50%;" alt="Igor Santos"/><br />
        <sub><b>Igor Santos</b></sub>
      </a>
    </td>
  </tr>
</table>

<h2>License</h2>

This project is licensed under the [MIT License](LICENSE).