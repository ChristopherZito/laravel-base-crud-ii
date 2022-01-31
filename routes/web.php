<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesPage@home') -> name('home');

Route::get('movie/{id}', 'MoviesPage@movie') -> name('movie');


Route::get('create', 'MoviesPage@create') -> name('create');
Route::post('store', 'MoviesPage@store') -> name('store');

Route::get('edit/{id}', 'MoviesPage@edit') -> name('edit');
Route::post('update/{id}', 'MoviesPage@update') -> name('update');

Route::get('delete/{id}', 'MoviesPage@delete') -> name('delete');