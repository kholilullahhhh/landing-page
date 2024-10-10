<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\MateriController@index')->name('index.materi');

Route::get('form/{id}', 'App\Http\Controllers\PendaftarController@create')->name('form.pendaftar');
Route::post('private-class', 'App\Http\Controllers\PendaftarController@store')->name('store.pendaftar');
Route::get('invoice/{id}', 'App\Http\Controllers\PendaftarController@invoice')->name('invoice');


// Route::get('/form', function () {
//     return view('form');
// });


