# Thor starter site

Starter Laravel 4 site featuring a blog, using [Thor](https://github.com/mjolnic/Laravel-4-CMS) as the backend

## Quick start

1) Clone the repository


    $ git clone https://github.com/mjolnic/thor-starter.git your-project-name

... or create a new composer project (supposing that the default database connection will work)

    $ composer create-project mjolnic/thor-starter your-project-name --prefer-dist --stability=dev

2) Configure your database settings under /app/config/database.php

3) Migrate and seed database

    $ php artisan migrate --package="mjolnic/thor"
    $ php artisan db:seed --class="Mjolnic\Thor\Seeder\DatabaseSeeder"

4) Navigate to the public folder URL
