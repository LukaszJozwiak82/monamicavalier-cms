<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id){
        $post = Post::with('photos')->findOrFail($id);
        // dd($post);
        return view('post',['post' => $post]);
    }
}
