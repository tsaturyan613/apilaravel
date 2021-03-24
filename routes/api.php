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

Route::get('/services','ServiceController@index');
Route::get('/contacts','ContactController@index');
Route::post('/mail','SendMailController@send');
Route::get('/blogs','BlogController@index');
Route::get('/workers','WorkerController@index');
Route::get('/clients','ClientController@index');
Route::get('/footer/contacts','ContactController@indexFooter');
Route::get('/portfolios','PortfolioController@index');
