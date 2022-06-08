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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard','Dashboard\DashboardController@index');

Route::prefix('/alternatif')->group(function ()
{
    Route::get('/', 'Alternatif\AlternatifController@index')->name('alternatif');
    Route::get('/formadd', 'Alternatif\AlternatifController@create')->name('alternatif.formtambah');
    Route::post('/add', 'Alternatif\AlternatifController@store')->name('alternatif.add');
    Route::get('/formupdate/{id}', 'Alternatif\AlternatifController@edit')->name('alternatif.edit');
    Route::post('/edit/{id}', 'Alternatif\AlternatifController@update')->name('alternatif.update');
    Route::post('/delete/{id}', 'Alternatif\AlternatifController@destroy')->name('alternatif.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
