<?php

use App\Http\Controllers\BookmarkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookmarkController::class, 'index'])
    ->name('bookmarks.index');
