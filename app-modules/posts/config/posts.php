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
    'model' => Jaymeh\Posts\Models\Post::class,

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | Which model should be used when handling the author relationship.
    |
    */
    'user_model' => App\Models\User::class,
];
