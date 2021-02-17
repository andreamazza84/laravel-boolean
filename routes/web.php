<?php

use Illuminate\Support\Facades\Route;

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

//Con controller//
//->HOME
Route::get('/', 'BlogController@index')->name('home');

//->BLOG
Route::get('/blog', 'BlogController@blog')->name('blog');

//->CONTATTI
Route::get('/contacts', 'BlogController@contatti')->name('contatti');



