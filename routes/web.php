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
    return view('index');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');
Route::get('/infoportada', 'InfoportadaController');

Route::get('/inicio', 'InicioController');
Route::get('/acercade', 'AcercadeController');
Route::get('/preguntas', 'PreguntaController');
Route::get('/infouniversidades', 'InfoController');
Route::post('/respuestas', 'RespuestaController');



