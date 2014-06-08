<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

// When visitors hit the root path, redirect them to the default language
Route::get('/', function() {
    return Redirect::to(Lang::code(), 302);
});

// All other multilingual routes
Route::langGroup(function() {
    // Multilingual home
    Route::get('/', function() {
        Doc::title('Thor CMS')->h1('Thor CMS')->error();
        return View::make('home');
    });
});