<?php

use Illuminate\Support\Facades\Route;

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/about','StaticPagesController@about')->name('about');
Route::get('/help', 'StaticPagesController@help') ->name('help');

Route::resource('users', 'UsersController');
