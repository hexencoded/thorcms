Thor starter project
=======

Starter Laravel 4 site featuring a blog, using [Thor](https://github.com/mjolnic/Laravel-4-CMS) as the backend

## Requirements
* PHP 5.4+
* SQL database connection

## Getting Started

1) Clone the repository (and run composer install)


    $ git clone https://github.com/mjolnic/Laravel-4-CMS-Starter.git your-project-name

... or create a new composer project (supposing that the default database connection will work)

    $ composer create-project mjolnic/thor-starter your-project-name --prefer-dist --stability=dev

2) Configure your database settings under /app/config/database.php

3) Migrate and seed database

    $ php artisan migrate --package="mjolnic/thor"
    $ php artisan db:seed --class="Mjolnic\Thor\Seeder\DatabaseSeeder"

4) Navigate to the public folder URL


Default users and their passwords: admin/admin, user/user


IMPORTANT: This project is still in a very early stage and is not ready for production.