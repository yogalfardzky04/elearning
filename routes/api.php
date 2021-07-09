<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users','App\Http\Controllers\Api\UsersController@index')->name('api.users.index');
Route::post('/users','App\Http\Controllers\Api\UsersController@store')->name('api.users.store');
Route::get('/users/{id}','App\Http\Controllers\Api\UsersController@show')->name('api.users.show');
Route::put('/users/{id}','App\Http\Controllers\Api\UsersController@update')->name('api.users.update');
Route::delete('/users/{id}','App\Http\Controllers\Api\UsersController@destroy')->name('api.users.destroy');

Route::get('/modul','App\Http\Controllers\Api\ModulController@index')->name('api.modul.index');
Route::post('/modul','App\Http\Controllers\Api\ModulController@store')->name('api.modul.store');
Route::get('/modul/{id}','App\Http\Controllers\Api\ModulController@show')->name('api.modul.show');
Route::put('/modul/{id}','App\Http\Controllers\Api\ModulController@update')->name('api.modul.update');
Route::delete('/modul/{id}','App\Http\Controllers\Api\ModulController@destroy')->name('api.modul.destroy');

Route::get('/modul_kategori','App\Http\Controllers\Api\ModulKategoriController@index')->name('api.modul_kategori.index');

Route::get('/video','App\Http\Controllers\Api\VideoController@index')->name('api.video.index');
Route::post('/video','App\Http\Controllers\Api\VideoController@store')->name('api.video.store');
Route::get('/video/{id}','App\Http\Controllers\Api\VideoController@show')->name('api.video.show');
Route::put('/video/{id}','App\Http\Controllers\Api\VideoController@update')->name('api.video.update');
Route::delete('/video/{id}','App\Http\Controllers\Api\VideoController@destroy')->name('api.video.destroy');

Route::get('/video_favorite','App\Http\Controllers\Api\VideoFavoriteController@index')->name('api.video_favorite.index');
Route::post('/video_favorite','App\Http\Controllers\Api\VideoFavoriteController@store')->name('api.video_favorite.store');

Route::get('/video_riwayat','App\Http\Controllers\Api\VideoRiwayatController@index')->name('api.video_riwayat.index');
Route::post('/video_riwayat','App\Http\Controllers\Api\VideoRiwayatController@store')->name('api.video_riwayat.store');

Route::get('/komentar','App\Http\Controllers\Api\KomentarController@index')->name('api.komentar.index');
Route::post('/komentar','App\Http\Controllers\Api\KomentarController@store')->name('api.komentar.store');