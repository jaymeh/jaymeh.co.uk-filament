<?php

use Illuminate\Support\Facades\Route;
use Jaymeh\Posts\Http\Controllers\TagsController;
use Jaymeh\Posts\Http\Controllers\PostsController;

Route::get(
    config('posts.posts_base_route', 'posts') . '/{slug}',
    [PostsController::class, 'show']
)->name('posts.show');

Route::get(
    config('posts.tags_base_route', 'tags') . '/{tag}',
    TagsController::class
)->name('posts.index');
