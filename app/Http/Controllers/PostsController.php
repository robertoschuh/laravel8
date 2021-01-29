<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug) 
    {

        return view('post', [
            'post' => Post::where('slug', $slug)->firstORFail()
        ]);
    }
}
