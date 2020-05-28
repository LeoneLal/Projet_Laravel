<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('apiauth')->group(function(){  
    Route::get('entreprisesapi', 'ApiEntreprisesController@index')->name('api.entreprises.index');
    //Route::get('entreprisesapi/{api_token}', 'ApiEntreprisesController@indexnav')->name('api.entreprises.indexnav');
    Route::post('entreprisesapi/store', 'ApiEntreprisesController@store')->name('api.entreprises.store.index');
    //Route::get('/entreprises', 'EntreprisesController@index')->name('entreprises.index');
});

