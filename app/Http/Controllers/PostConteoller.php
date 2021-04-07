<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostConteoller extends Controller
{
    public function storePost(Request $request)
    {
        Post::create($request);
    }
}
