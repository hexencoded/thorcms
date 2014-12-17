Thor CMS
======
**QUICKSTART APPLICATION**

Thor CMS is a multipurpose Laravel 4 CMS platform and CRUD generator
for everyone and any kind of project, 
built with multilingual support from the core.

* [Project website](http://thorcms.com/)
* [Demo server](http://demo.thorcms.com/)
* [Roadmap](https://github.com/thorcms/platform/pull/3)

## Requirements
* Apache 2.2 in a UNIX server (not tested in other environments yet)
* PHP 5.4+
* Database connection: By default a SQLite file is used, so you may need the PHP PDO extension with SQLite support.

I would hardly recommend you to use a [Laravel Homestead](http://laravel.com/docs/4.2/homestead) virtual machine for this project.

## Setup

Install the project using composer:

    composer create-project thor/thorcms your-project-name --prefer-dist --stability=dev

... or download or clone the source code and run `composer install` in the project folder

## Getting started

1. Run the `php artisan thor:install` command (add `-n` for silent mode)
2. Go to the `/backend` URL and login with `developer` / `developer` or  `admin`/ `admin`

You will also find a demonstration video in Youtube: https://www.youtube.com/watch?v=0TKMkN_8vKI

NOTICE that the project is under a very early development status, so it is not ready for production yet.
