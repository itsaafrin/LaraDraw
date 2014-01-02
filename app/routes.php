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

Route::get('/', function() {
            //return View::make('hello');
            return Redirect::to('/login');
        });

Route::get('/login', array('uses' => 'Authentication@getLogin'));
Route::post('/login', array('uses' => 'Authentication@postLogin'));
Route::get('/logout', array('uses' => 'Authentication@getLogout'));

Route::group(array('prefix' => 'admin', 'before' => array('admin-auth')), function() {
            Route::get('/dashboard', array('uses' => 'Admin\AdminDashboard@index'));

        });

Route::group(array('prefix' => 'user', 'before' => array('user-auth')), function() {
            Route::get('/dashboard', array('uses' => 'User\UserDashboard@index'));
        });

Route::get('/loadDB', function() {
            $admin = new Role;
            $admin->name = 'admin';
            $admin->display_name = 'Admin';
            $admin->save();

            $author = new Role;
            $author->name = 'author';
            $author->display_name = 'Author';
        });