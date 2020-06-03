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

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\Web\HomeController')->name('home');
Route::get('/contacts', 'Web\ContactController@index')->name('contacts');
Route::post('contatct', 'Web\ContactController@store')->name('contact.create');
Route::get('search', 'Web\SearchController')->name('search');
