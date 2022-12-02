# ITS255A Junior Software Developer - Technical Challenge

This technical challenge is intended for applicants to the University of Aberdeen post ITS255A Junior Software Developer.

It will assess your ability to develop a usable and acecessible user interface in a PHP environment. This application is built in Laravel, a popular PHP framework.

Please complete this technical challenge if you are interested in joining the Web Applications Development Team as a Junior Software Developer.

## Pre-requisites

The following software is required to complete this technical challenge:

- Git
- npm (NodeJS 16.x)
- Composer 2.x
- PHP 8.1.x
- MariaDB 10.4.x
- a modern web browser, such as Chrome

**Tip for Windows users**: XAMPP is a free Apache distribution which contains PHP and MariaDB and is suited for this technical challenge. Alternatively, you can use Docker, WAMP or any other platform you wish (e.g. MAMP for macOS users).

Composer, npm and Git will need to be installed separately. It is recommended to install these tools and set up your PHP/MariaDB instance before commencing the technical challenge.


## Setup instructions

1. Clone the repo.

```sh
$ git clone git@github.com:uofa/its255a-tech-challenge.git
```

2. Open a terminal at the root of the repo. Install PHP assets (make sure your PHP version is 8.1.x. You can check this by running `php --version` in the terminal).

```sh
$ composer install
```

3. Copy the `.env.example` file and rename it to `.env`. Pay attention to the settings for `DB_HOST`, `DB_PORT`, `DB_DATABASE` etc. You can change them if your database is running on a different port, but it is recommended to leave these settings as default and use 3306.

4. Open the `.env` file and set the `APP_URL` to a suitable value (e.g. `http://127.0.0.1:8000` or whichever port you want to run your application from). Please note you won't be able to visit this URL until after the application is served in Step 9.

5. Set the application key.

```sh
$ php artisan key:generate
```

6. Run the migrations and seed the database. This command will prompt you to create a database.

```sh
# Run the migrations
$ php artisan migrate

# When prompted to create a database, type 'y' and press enter

# Seed the database
$ php artisan db:seed
```

7. Install the third-party assets.

```sh
$ npm install
```

8. Open a new terminal and navigate to the root of the repo. Build the assets and start Vite.

```sh
$ npm run dev

# Vite watches for code changes and dynamically rebuilds your views/assets etc.

```

9. Serve the application. You can specify a port using the ` --port=8000` flag, otherwise 8000 will be used by default.

```sh
$ php artisan serve
```

10. After serving the application, a URL will be displayed in the terminal. Copy and paste this into a web browser.  You should see a welcome page with the Laravel logo and some links to Laravel documentation.

## Logging in

A barebones application has been set up for you. On the welcome page, you will see two links in the top right-hand corner: "Log in" and "Register".

1. Click "Register" and fill in the form. Note this application does not do mailbox verification, so feel free to set any email address you wish here.

2. After completing registration, you will be automatically logged in and presented with a dashboard containing instructions to complete the technical challenge, along with some pointers.

## Support

In the first instance, please refer to documentation on [https://laravel.com/docs/9.x](https://laravel.com/docs/9.x).

If you have any further questions please reach out to Tracy Stasch-Goode by email at [t.stasch-goode@abdn.ac.uk](t.stasch-goode@abdn.ac.uk).
