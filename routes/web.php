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
    Route::get('/formupdate/{id}', 'Alternatif\AlternatifController@edit')->name('alternatif.formedit');
    Route::post('/edit/{id}', 'Alternatif\AlternatifController@update')->name('alternatif.update');
    Route::post('/delete/{id}', 'Alternatif\AlternatifController@destroy')->name('alternatif.delete');
});

Route::prefix('/kriteria')->group(function ()
{
    Route::get('/', 'Kriteria\KriteriaController@index')->name('kriteria');
    Route::get('/formadd', 'Kriteria\KriteriaController@create')->name('kriteria.formadd');
    Route::post('/add', 'Kriteria\KriteriaController@store')->name('kriteria.add');
    Route::get('/formupdate/{id}', 'Kriteria\KriteriaController@edit')->name('kriteria.edit');
    Route::post('/edit/{id}', 'Kriteria\KriteriaController@update')->name('kriteria.update');
    Route::post('/delete/{id}', 'Kriteria\KriteriaController@destroy')->name('kriteria.delete');
});

Route::prefix('/crip')->group(function ()
{
    Route::get('/', 'Crip\CripController@index')->name('crip');
    Route::get('/formadd', 'Crip\CripController@create')->name('crip.formadd');
    Route::post('/add', 'Crip\CripController@store')->name('crip.add');
    Route::get('/formupdate/{id}', 'Crip\CripController@edit')->name('crip.formedit');
    Route::post('/edit/{id}', 'Crip\CripController@update')->name('crip.update');
    Route::post('/delete/{id}', 'Crip\CripController@destroy')->name('crip.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
