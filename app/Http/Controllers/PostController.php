<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){

        $posts = post::all();
        return view('posts.index', compact($posts));
    }
}
