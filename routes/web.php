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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/entreprises', 'EntreprisesController@index')->name('entreprises.index');
Route::post('/entreprises/store', 'EntreprisesController@store')->name('entreprises.store');
Route::get('/entreprises/create', 'EntreprisesController@create')->name('entreprises.create');
Route::get('/entreprises/{id}/update', 'EntreprisesController@update')->name('entreprises.update');
Route::get('/entreprises/{id}/show', 'EntreprisesController@show')->name('entreprises.show');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::get('/contact/create', 'ContactController@create')->name('contact.create');
Route::get('/contact/{id}/show', 'ContactController@show')->name('contact.show');