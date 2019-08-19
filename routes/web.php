<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as' => 'root_path',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@create'
]);


/* Route::get('/', 'PagesController@home')->name('root_path');

Route::get('/about', 'PagesController@about')->name('about_path');

Route::get('/contact', 'PagesController@contact')->name('contact_path');


Route::get('/', function () {
    return view('welcome');
}); */
