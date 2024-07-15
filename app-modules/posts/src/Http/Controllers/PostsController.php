<?php

namespace Jaymeh\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Jaymeh\FilamentPosts\Models\Post as ModelsPost;
use Jaymeh\Posts\Models\Post;
use Jaymeh\Posts\Repositories\PostRepository;

class PostsController
{
    /**
     * Constructor for class.
     *
     * @param PostRepository $postsRepository
     */
    public function __construct(protected PostRepository $postsRepository) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // Get all published posts from Repo.
        // $posts = $this->postsRepository
        //     ->published()
        //     ->paginate(10);

        // return view('posts-module::index', ['posts' => $posts]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = $this->postsRepository
            // ->with()
            ->published()
            ->where(['slug' => $slug])
            ->firstOrFail();

        return view('posts-module::post', [
            'post' => $post,
        ]);
    }
}
