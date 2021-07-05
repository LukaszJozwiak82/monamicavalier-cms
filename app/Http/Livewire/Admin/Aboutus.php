<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;

class Aboutus extends Component
{
    public $post;
    public $valuePl;
    public $valueEn;


    public function mount(){

       $this->post = Post::where('category_id', Category::getCategoryId('About'))->first();

       $this->valuePl = $this->post->getTranslation('value', 'pl');
       $this->valueEn = $this->post->getTranslation('value', 'en');
    }

    public function render()
    {

        return view('livewire.admin.aboutus', ['post' => $this->post]);
    }

    public function savePost(Post $model): void {

        $model->setTranslation('value', 'pl', $this->valuePl);
        $model->setTranslation('value', 'en', $this->valueEn);

        $model->save();

        session()->flash('message', 'Wpis został zmieniony!');
    }
}
