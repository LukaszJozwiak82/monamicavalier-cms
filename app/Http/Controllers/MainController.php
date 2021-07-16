<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function index(){
        $posts = Post::where('status',1)
        ->orderByDesc('id')
        ->get();
        return view('main',[ 'posts' => $posts]);
    }
}
