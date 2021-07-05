<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index($id): View {

        $post = Post::with('photos')->findOrFail($id);

        return view('dog', ['post' => $post]);
    }
}
