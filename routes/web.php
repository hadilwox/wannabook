<?php

use App\Http\Controllers\Ajax\LikeController;
use App\Http\Controllers\Ajax\SearchController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShareController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/book/{book}', [BookController::class, 'index'])->name('books.id');

Route::post('/book/create', [BookController::class, 'create'])->name('book.create');

Route::post('/ajax/search', [SearchController::class, 'search'])->name('ajax.search');
Route::post('/ajax/like', [LikeController::class, 'like'])->name('ajax.like');

Route::post('/book/{book}/comment/add', [CommentController::class, 'add'])->name('comment.add');
