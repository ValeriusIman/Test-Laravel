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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/izin','Api\IzinController@addIzin');
Route::get('/getIzin','Api\IzinController@getIzin');
Route::post('/document','Api\documentController@addDocument');
Route::get('/izin/{id}','Api\documentController@addDocument');
