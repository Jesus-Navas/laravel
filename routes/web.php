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

Route::get('/', 'App\Http\Controllers\ProfesorController@index')->name('formCrear');
Route::post('/createProfesor', 'App\Http\Controllers\ProfesorController@store')->name('crearProfesor');
Route::get('/profesores', 'App\Http\Controllers\ProfesorController@show')->name('mostrarProfesores');
Route::get('/profesor', 'App\Http\Controllers\ProfesorController@show')->name('formEditarProfesor');
Route::put('/profesor', 'App\Http\Controllers\ProfesorController@update')->name('editarProfesor');
