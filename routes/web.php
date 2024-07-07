<?php

use Illuminate\Support\Facades\Route;
use Jaymeh\Posts\Http\Controllers\PostsController;

Route::get('blog', [PostsController::class, 'index'])->name('posts.index');
Route::get('{slug}', [PostsController::class, 'show'])->name('posts.show');
