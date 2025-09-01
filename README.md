<p align="center">
  <img src="docs/readme.jpg" alt="Logo" loading="lazy">

  <p align="center">
    Async is an open-source tool for small, async-first developer teams. It helps teams stay aligned, deliver projects, and manage essentials — without endless meetings or juggling a dozen SaaS tools.
  </p>

  <p align="center">
    <a href="https://codecov.io/gh/get-async/marketing">
      <img src="https://codecov.io/gh/get-async/marketing/graph/badge.svg?token=7aoDgGFZQr" alt="codecov">
    </a>
    <a href="https://opensource.org/licenses/MIT">
      <img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License: MIT">
    </a>
  </p>
</p>

## What is this?

Async is a tool for remote-first, asynchronous small dev companies. This repository is the marketing site for this tool.

## Installation

This site is a regular [Laravel](https://laravel.com) application; it's built on top of Laravel and uses regular Blade / Tailwind CSS for the frontend, sprinkled with [Alpine.js](https://alpinejs.dev/) and [Alpine AJAX](https://alpine-ajax.js.org/) for some interactivity. We stick to Laravel conventions as much as possible.

In terms of local development, you can use the following requirements:

- PHP 8.4 with SQLite, GD, and other common extensions.
- Node.js 16 or more recent.
- Bun.

If you have these requirements, you can start by cloning the repository and installing the dependencies:

```bash
git clone https://github.com/get-async/marketing.git

cd marketing

git checkout -b feat/your-feature # or fix/your-fix
```

> **Don't push directly to the `main` branch**. Instead, create a new branch and push it to your branch.

Next, install the dependencies:

```bash
composer install

bun install
```

After that, set up your `.env` file:

```bash
cp .env.example .env

php artisan key:generate
```

Prepare your database and run the migrations:

```bash
touch database/database.sqlite

php artisan migrate
```

Link the storage to the public folder:

```bash
php artisan storage:link
```

In a **separate terminal**, build the assets in watch mode:

```bash
npm run dev
```

Finally, start the development server:

```bash
php artisan serve
```

## Credits

- [Regis Freyd](https://github.com/djaiss)

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
