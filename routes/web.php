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

//toda esta parte me parece que esta fuera de servicio

Route::get('/', 'zybController@index')->name('principal');

Route::post('/', 'zybController@form')->name('cargardato');
// Route::post('/', 'zybController@form')->name('principal');

Route::any('/administrador', 'zybController@consultarPreguntas')->name('admin');

Route::get('/welcome', function(){
return view('welcome');
})->name('bienvenidos');

Route::get('/prueba', function(){
return view('prueba');
})->name('nueva_seccion');

Route::post('/prueba', 'zybController@store')->name('nueva_seccion');

// Envio de mails (funcionando!)

Route::resource('mail', 'MailController');