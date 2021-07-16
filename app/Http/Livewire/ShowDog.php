<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Traits\PostTrait;

class ShowDog extends Component
{

    use PostTrait;

    public $post;

    public function mount(Post $post){
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.show-dog');
    }
}
