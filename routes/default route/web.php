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
//Default road
Route::get('/home', 'HomeController@index')->name('home');



//Nearly All road are made to do some CRUD actions(modification,creation, deletion...).
//On some of them we put an id to use it in the controller.


//Route to access at company.
//You can access index and then take an company.
Route::get('/entreprises', 'EntreprisesController@index')->name('entreprises.index');
Route::post('/entreprises/store', 'EntreprisesController@store')->name('entreprises.store');
Route::get('/entreprises/create', 'EntreprisesController@create')->name('entreprises.create');
Route::put('/entreprises/{id}/update', 'EntreprisesController@update')->name('entreprises.update');
Route::get('/entreprises/{id}/edit', 'EntreprisesController@edit')->name('entreprises.edit');
Route::get('/entreprises/{id}/show', 'EntreprisesController@show')->name('entreprises.show');
Route::get('/entreprises/{id}/delete', 'EntreprisesController@delete')->name('entreprises.delete');

//Road to access at contact.
//Contacts are related to enterprise, but you can see all the contact on the navbar
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact/store', 'ContactController@store')->name('contact.store');
Route::get('/contact/{id}/create', 'ContactController@create')->name('contact.create');
Route::put('/contact/{id}/update', 'ContactController@update')->name('contact.update');
Route::get('/contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
Route::get('/contact/{id}/show', 'ContactController@show')->name('contact.show');
Route::get('contact/{id}/delete', 'ContactController@delete')->name('contact.delete');

//Road to access at request.
// You can access on request on the navbar and then add a new request.
Route::get('/demandes', 'DemandesController@index')->name('demandes.index');
Route::post('/demandes/store', 'DemandesController@store')->name('demandes.store');
Route::get('/demandes/create', 'DemandesController@create')->name('demandes.create');
Route::put('/demandes/{id}/update', 'DemandesController@update')->name('demandes.update');
Route::get('/demandes/{id}/edit', 'DemandesController@edit')->name('demandes.edit');
Route::get('/demandes/{id}/show', 'DemandesController@show')->name('demandes.show');
Route::get('/demandes/{id}/delete', 'DemandesController@delete')->name('demandes.delete');

//This is the road to acces at the API 
Route::get('/apihome', 'ApiHomeController@index')->name('apihome.index');




