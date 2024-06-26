<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ContactController@index')->name('welcome');
