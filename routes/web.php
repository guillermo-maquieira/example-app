<?php

use App\Http\Controllers\BookmarkController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookmarkController::class, 'index'])
    ->name('bookmarks.index');
Route::get('/bookmarks/{bookmark}', [BookmarkController::class, 'show'])->name('bookmarks.show');;
Route::get('/bookmarks/create', [BookmarkController::class, 'create'])->name('bookmarks.create');
Route::post('/bookmarks', [BookmarkController::class, 'store'])->name('bookmarks.store');
Route::delete('/bookmarks/{bookmark}', [BookmarkController::class, 'destroy'])->name('bookmarks.destroy');