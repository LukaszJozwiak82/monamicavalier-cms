<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public function render()
    {
        $posts = Post::where('status',1)
        ->orderByDesc('id')
        ->get();
        return view('livewire.show-posts',[ 'posts' => $posts]);
    }
}
