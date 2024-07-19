<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Model
    |--------------------------------------------------------------------------
    |
    | The model to use when interacting with the posts.
    |
    */
    'model' => Jaymeh\FilamentPosts\Models\Post::class,

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | Which model should be used when handling the author relationship.
    |
    */
    'user_model' => App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | Posts base route
    |--------------------------------------------------------------------------
    |
    | The base route for filtering by tags.
    |
    */
    'posts_base_route' => 'blog',

    /*
    |--------------------------------------------------------------------------
    | Tags base route
    |--------------------------------------------------------------------------
    |
    | The base route for filtering by tags.
    |
    */
    'tags_base_route' => 'categories',
];
