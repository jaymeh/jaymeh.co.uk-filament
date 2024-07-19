<?php

namespace Jaymeh\Posts\Http\Controllers;

use Jaymeh\Posts\Repositories\PostRepository;

class TagsController
{
    public function __construct(private PostRepository $postsRepository)
    {
    }

    public function __invoke(string $tag)
    {
        $posts = $this->postsRepository->getPostsByTag($tag);

        if (!$posts) {
            abort(404);
        }

        return view('posts-module::tags.index', ['posts' => $posts]);
    }
}
