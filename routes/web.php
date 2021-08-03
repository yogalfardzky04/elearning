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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function(){

	
	Route::resource('/user','App\Http\Controllers\UserController')->names('user');

	Route::resource('/modul','App\Http\Controllers\ModulController')->names('modul');
	Route::resource('/modul_kategori','App\Http\Controllers\ModulKategoriController')->names('modul_kategori');

	Route::resource('/video','App\Http\Controllers\VideoController')->names('video');
	Route::resource('/video_favorite','App\Http\Controllers\VideoFavoriteController')->names('video_favorite');
	Route::resource('/video_riwayat','App\Http\Controllers\VideoRiwayatController')->names('video_riwayat');

	Route::resource('/komentar','App\Http\Controllers\KomentarController')->names('komentar');
});
