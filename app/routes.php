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

// When users hit a route without a language,
// redirect them to the default one using a 302 redirect
Route::get('/', function() {
    return Redirect::to(Lang::code(), 302);
});

// all other routes that share the same path, common in all languages
Route::langGroup(function() {
    Route::get('/', function() {
        return 'Homepage in ' . Lang::code();
    });
    Route::get('/foo/', function() {
        return 'Foo page in ' . Lang::code();
    });
    // current Language model instance
    Route::get('/info/', function() {
        return Lang::language();
    });
});