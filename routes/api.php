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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('entreprises', 'ApiEntreprisesController@index')->name('api.entreprises.index');
Route::post('entreprises/store', 'ApiEntreprisesController@store')->name('api.entreprises.store');
  

/*
Route::middleware('apiauth')->group(function(){
    Route::get('entreprises', 'ApiEntreprisesController@index')->name('api.entreprises.index');
    Route::post('entreprises/store', 'ApiEntreprisesController@store')->name('api.entreprises.store');
});
*/