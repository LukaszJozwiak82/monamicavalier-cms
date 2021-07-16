<?php
declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Post;
use App\Traits\PostTrait;
use Livewire\Component;

class ShowPost extends Component
{

    use PostTrait;

    public $post;

    public function mount(Post $post){
        $this->post = $post;
    }

    public function render()
    {
        // $post = $this->post::with('photos')->findOrFail($this->post->id);
        return view('livewire.show-post');
    }


}

