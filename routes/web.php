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
Route::get('/companies', 'CompaniesController@index')->name('companies.index');
Route::post('/companies/store', 'CompaniesController@store')->name('companies.store');
Route::get('/companies/create', 'CompaniesController@create')->name('companies.create');
Route::put('/companies/{id}/update', 'CompaniesController@update')->name('companies.update');
Route::get('/companies/{id}/edit', 'CompaniesController@edit')->name('companies.edit');
Route::get('/companies/{id}/show', 'CompaniesController@show')->name('companies.show');
Route::get('/companies/{id}/delete', 'CompaniesController@delete')->name('companies.delete');

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
Route::get('/apihome', 'ControllerApi\ApiHomeController@index')->name('apihome.index');




