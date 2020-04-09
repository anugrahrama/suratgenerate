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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->prefix('home')->group(
    function () {
        // surat generate


        Route::prefix('surat')->namespace('Admin')->group(
            function () {
                // surat kegiatan
                Route::prefix('suratkegiatan')->group(
                    function (){
                        Route::get('/','SuratKegiatanController@index')->name('index');
                        Route::get('/create','SuratKegiatanController@create')->name('create');
                        Route::post('/store','SuratKegiatanController@store')->name('store');
                        Route::get('/edit/{id}','SuratKegiatanController@edit')->name('edit');
                        Route::post('/update/{id}','SuratKegiatanController@update')->name('update');
                        Route::delete('/delete/{id}','SuratKegiatanController@destroy')->name('delete');
                        // generate
                        Route::get('/generate/{id}', 'SuratAllController@index')->name('generate');
                        // end generate
                    }
                );
                // end surat kegiatan
            }
        );
    }
);
