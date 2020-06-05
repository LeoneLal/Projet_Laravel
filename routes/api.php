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
    Route::get('entreprisesapi', 'ControllerApi\ApiEntreprisesController@index')->name('api.entreprises.index');
    Route::get('entreprisesapi/{id}/detail', 'ConrtollerApi\ApiEntreprisesController@detail')->name('api.entreprises.detail');
    Route::get('entreprisesapi/{id}/user', 'ControllerApi\ApiEntreprisesController@user')->name('api.entreprises.user');
});

