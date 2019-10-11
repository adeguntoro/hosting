<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Resources\Post as PostResource;

class ArtikelController extends Controller {
    
    public function index() {

        $posts = Post::get();
        return PostResource::collection($posts);

    }

    /*
    public function show($slug) {

        $post = Post::findorfail($slug)->first();

        return response()->json([
            'message' => 'success',
            'data' => $post
        ], 200);

    }
    */

}
