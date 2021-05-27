<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard','DashboardController@index');
Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@destroy');
