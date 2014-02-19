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

Route::get('/', array('as' => 'root', function() {
        return View::make('hello');
    }));

Route::group(array('prefix' => App::getLocale()), function() {
            // MultiLanguage routes here

            Route::get('/', array('as' => 'home', function() {
                    return View::make('hello');
                }));
        });

App::missing(function($exception) {
            return Response::view('errors.404', array(), 404);
        }); // Confide routes