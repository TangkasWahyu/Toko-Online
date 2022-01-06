<?php

use App\Http\Controllers\BerandaController;
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

Route::get('/', 'BerandaController@index')->name('beranda');
Route::post('/pushData', 'BerandaController@store');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/Daftar', 'LoginController@register');
Route::post('/Masuk', 'LoginController@masuk');
