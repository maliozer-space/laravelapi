<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostResourceCollection;

class PostController extends Controller
{
    /**
     * @return PostResourceCollection
     */
    public function index(): PostResourceCollection
    {
        return new PostResourceCollection(Posts::paginate());
    }

    /**
     * @param Post $post
     * @return PostResource
     */
    public function show(Posts $post): PostResource
    {
        return new PostResource($post);
    }
}
