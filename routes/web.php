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
Route::put('/entreprises/{id}/update', 'EntreprisesController@update')->name('entreprises.update');
Route::get('/entreprises/{id}/edit', 'EntreprisesController@edit')->name('entreprises.edit');
Route::get('/entreprises/{id}/show', 'EntreprisesController@show')->name('entreprises.show');
Route::get('/entreprises/{id}/delete', 'EntreprisesController@delete')->name('entreprises.delete');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::get('/contact/{id}/create', 'ContactController@create')->name('contact.create');
Route::put('/contact/{id}/update', 'ContactController@update')->name('contact.update');
Route::get('/contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
Route::get('/contact/{id}/show', 'ContactController@show')->name('contact.show');
Route::get('contact/{id}/delete', 'ContactController@delete')->name('contact.delete');
