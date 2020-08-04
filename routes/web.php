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
    return view('welcome');
});
 
Route::get('/etudiants', function(){
    return view('etudiants.form');
});

Route::get('/etudiants/liste', 'EtudiantsController@liste')->name('liste');

Route::post('/etudiants/form', 'EtudiantsController@store')->name('enregistrer');

Route::get('/etudiants/delete/{id}', 'EtudiantsController@destroy')->name('delete');

Route::get('/etudiants/show/{id}' , 'EtudiantsController@show')->name('Details');

Route::get('/etudiants/edit/{id}' , 'EtudiantsController@edit')->name('edit');

Route::post('/etudiants/update/{id}' , 'EtudiantsController@update')->name('update');
