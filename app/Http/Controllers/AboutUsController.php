<?php
declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(): View {
        $cat = Category::where('name','About')->first();

       $post = Post::where('category_id',$cat->id)->first();
        return view('about', ['post' => $post]);
    }
}
