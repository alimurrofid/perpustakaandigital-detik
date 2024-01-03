<p align="center"><a href="#"><img src="./public/assets/images/book-logo.png" width="300" alt="Book Logo"></a></p>

## Digital Library

📖 Digital Library is a web application that is used to manage books in a library. This application is made using the Laravel 10 framework and the Tailwind CSS framework.

## Requirements Installation

requirement:

-   PHP >= 8.1
-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/en/download/)
-   [Vscode](https://code.visualstudio.com/download)
-   [Xampp](https://www.apachefriends.org/download.html)
-   [Git](https://git-scm.com/downloads)

Vscode Extension:

-   Laravel Extension Pack
-   Tailwind CSS Extension Pack
-   PostCSS Language Support

## How to install

1. Clone repository

```sh
git clone https://github.com/alimurrofid/perpustakaandigital-detik.git
```

2. Install & Update Composer

```sh
composer update
```

3. Copy .env.example to .env

```sh
copy .env.example .env
```

4. Generate Key

```sh
php artisan key:generate
```

5. Migration database

```sh
php artisan migrate
```

6. Seeding database

```sh
php artisan db:seed
```

7. Create the symbolic link

```sh
php artisan storage:link
```

8. Intall npm

```sh
npm install -D tailwindcss postcss autoprefixer flowbite
```

9. Install tailwindcss

```sh
npx tailwindcss init -p
```

10. Run npm

```sh
npm run dev
```

11. Run laravel

```sh
php artisan serve
```
