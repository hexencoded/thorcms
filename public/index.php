<?php
$start_microtime = microtime(true);

// Setting up error reporting and display errors for the startup process
error_reporting(-1);
ini_set('display_errors', 1);

// Set default timezone to avoid timezone warnings
date_default_timezone_set('UTC');

// Initial default server resources
ini_set('memory_limit', '128M');
ini_set('max_execution_time', 60);
ini_set('post_max_size', '16M');
ini_set('upload_max_filesize', '16M');

// Initial default locale and charset
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');
ini_set('default_mimetype', 'text/html');
setlocale(LC_ALL, 'en_US.UTF8');

// Session security
ini_set('session.auto_start', 0);
ini_set('session.use_cookies', true);
ini_set('session.use_only_cookies', true); # do not use PHPSESSID in urls
ini_set('session.use_trans_sid', false); # do not use PHPSESSID in urls
ini_set('session.hash_function', 1); # use sha1 algorithm (160 bits)
ini_set('session.cookie_httponly', true);

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight these users.
|
*/

$app = require_once __DIR__.'/../bootstrap/start.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can simply call the run method,
| which will execute the request and send the response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have whipped up for them.
|
*/

$app->run();
