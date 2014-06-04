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
        Doc::title('Thor CMS Framework')->h1('Thor CMS Framework')->error();
        return View::make('home');
    });
});

// 404
App::missing(function($e) {
    if(Admin::inAdmin()) {
        return Admin::default404();
    }else{
        Doc::title('Error 404')->h1('Error 404')->content('Page Not Found')->error(true);
        return Response::view('404', array(), 404);
    }
});