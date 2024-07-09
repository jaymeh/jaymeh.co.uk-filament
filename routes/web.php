<?php

use Illuminate\Support\Facades\Route;
use Jaymeh\Posts\Http\Controllers\PostsController;

Route::get('blog/{slug}', [PostsController::class, 'show'])->name('posts.show');
