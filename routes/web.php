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

Route::get('/administrador', 'zybController@consultarPreguntas')->name('admin');

Route::get('/asesoria', function(){
return view('servicio1');
})->name('servicio1');

Route::get('/consultoria', function(){
return view('servicio2');
})->name('servicio2');

Route::get('/auditorias', function(){
return view('servicio3');
})->name('servicio3');

Route::get('/coaching', function(){
return view('servicio4');
})->name('servicio4');

Route::get('/web', function(){
return view('servicio5');
})->name('servicio5');

Route::get('/producto', function(){
return view('servicio6');
})->name('servicio6');


Route::post('/prueba', 'zybController@store')->name('nueva_seccion');

// Envio de mails (funcionando!)

Route::resource('mail', 'MailController');