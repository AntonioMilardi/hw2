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

Route::get('/', 'App\Http\Controllers\LoginController@register_form');

Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login_form');


Route::get('register', 'App\Http\Controllers\LoginController@register_form');
Route::post('register', 'App\Http\Controllers\LoginController@do_register_form');
Route::get('logout', 'App\Http\Controllers\LoginController@logout'); 

Route::get('Home','App\Http\Controllers\DefaultController@principale'); 

Route::get("Home/cerca/{text}", "App\Http\Controllers\DefaultController@cerca")->name('cerca');
Route::post("Home/aggiungi", "App\Http\Controllers\DefaultController@aggiungi")->name('aggiungi');
Route::get("Home/rimuovi/{querytitolo}", "App\Http\Controllers\DefaultController@rimuovi")->name('rimuovi');

Route::get('NotizieTue', 'App\Http\Controllers\NotizieTueController@controllo');
Route::get('NotizieTue/stampapreferiti', 'App\Http\Controllers\NotizieTueController@stampapreferiti');

Route::get('Profilo', 'App\Http\Controllers\ProfiloController@controllo');
Route::get('Profilo/mostracredenziali', 'App\Http\Controllers\ProfiloController@mostracredenziali');
Route::get('elimina', 'App\Http\Controllers\ProfiloController@elimina')->name('elimina');


Route::get('controlloPassword', 'App\Http\Controllers\PasswordController@controllo');
Route::post('controlloPassword', 'App\Http\Controllers\PasswordController@verifica');

Route::get('cambioCredenziali', 'App\Http\Controllers\cambioController@controllo');
Route::post('cambioCredenziali', 'App\Http\Controllers\cambioController@cambio');