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

use App\Http\Middleware\ConvertXmlToArray;

Route::get('/index', 'FanController@index')->name('index');

Route::post('/fan', 'FanController@store')->name('fan.store');

Route::get('/formulario/{id?}', 'FanController@edit')->name('fan.formulario');

Route::get('/update/{id}', 'FanController@update')->name('fan.update');
//Route::post('/form', 'FanController@store')->name('fan.newFan');


