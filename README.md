Thor starter application
======

CMS Framework for Laravel 4
  
## IMPORTANT NOTE

This project is being rewritten as the [Thor CMS Framework](https://github.com/thorfw), under the   **thorfw** organisation, with separated, tested and reusable components.

If you still want the an usable demo of the old version, use [this downloadable](https://github.com/thorfw/starter/releases/download/0.1.0/thorfw-0.1.0.zip) that includes all the needed dependencies.

## Requirements
* PHP 5.4+
* SQL database connection

## Setup
1) Configure your database settings under /app/config/database.php

2) Migrate and seed database

    php artisan migrate --package="mjolnic/thor"
    php artisan db:seed --class="Mjolnic\Thor\Seeder\DatabaseSeeder"

3) Navigate to the public folder URL


Default users and their passwords: admin/admin, user/user


IMPORTANT: This project is still in a very early stage and is not ready for production.
