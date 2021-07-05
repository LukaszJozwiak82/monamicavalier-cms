<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\AdditionalPhoto;


class PostAdditionalPhotos extends Component
{

    public $postId;


    protected $listeners = ['getPostId'];

    public function getPostId($postId){

        $this->postId = $postId;
    }

    public function render()
    {
        $items = AdditionalPhoto::where('post_id',$this->postId)->get();
        return view('livewire.admin.post-additional-photos',['photos' => $items]);
    }

    public function confirmPhotoDeletion($id){
        $photo = AdditionalPhoto::find($id);
        $image_path = 'storage/additional_photos/'.$photo->filename;
        unlink($image_path);
        $photo->delete();
    }
}
