<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\writerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'home']);
Route::get('/about', [homeController::class, 'aboutus']);
Route::get('/posts/{post:slug}', [PostController::class, 'index'])->name('posts.index');
Route::get('/writers', [writerController::class, 'index'])->name('writer.index');
Route::get('/writers/{writer:slug}', [writerController::class, 'show'])->name('writer.show');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/popular', [PostController::class, 'popular'])->name('posts.popular'); 