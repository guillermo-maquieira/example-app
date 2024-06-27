<?php

use App\Http\Controllers\BookmarkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookmarkController::class, 'index'])
    ->name('bookmarks.index');
Route::get('/bookmarks/{bookmark}', [BookmarkController::class, 'show'])
    ->name('bookmarks.show');