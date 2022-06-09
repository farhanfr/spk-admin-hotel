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

Route::get('/','Common\CommonController@index');

Route::get('/dashboard','Dashboard\DashboardController@index')->name('dashboard');

Route::prefix('/common')->group(function ()
{
    Route::get('/formlogin','Common\CommonController@index')->name('common.formlogin');
    Route::post('/login', 'Common\CommonController@login')->name('common.login');
    Route::get('/logout', 'Common\CommonController@logout')->name('common.logout');
//    Route::get('/formadd', 'Alternatif\AlternatifController@create')->name('alternatif.formtambah');
//    Route::post('/add', 'Alternatif\AlternatifController@store')->name('alternatif.add');
//    Route::get('/formupdate/{id}', 'Alternatif\AlternatifController@edit')->name('alternatif.formedit');
//    Route::post('/edit/{id}', 'Alternatif\AlternatifController@update')->name('alternatif.update');
//    Route::post('/delete/{id}', 'Alternatif\AlternatifController@destroy')->name('alternatif.delete');
});

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

Route::prefix('/penjabaran')->group(function ()
{
    Route::get('/', 'Penjabaran\PenjabaranController@index')->name('penjabaran');
    Route::get('/formadd/{id}', 'Penjabaran\PenjabaranController@create')->name('penjabaran.formadd');
    Route::post('/add/{id}', 'Penjabaran\PenjabaranController@store')->name('penjabaran.add');
    Route::get('/formupdate/{id}', 'Penjabaran\PenjabaranController@edit')->name('penjabaran.formedit');
    Route::post('/edit/{id}', 'Penjabaran\PenjabaranController@update')->name('penjabaran.update');
//    Route::post('/delete/{id}', 'Penjabaran\PenjabaranController@destroy')->name('penjabaran.delete');
});

Route::prefix('/perhitungan')->group(function ()
{
    Route::get('/', 'Perhitungan\PerhitunganController@index')->name('perhitungan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
