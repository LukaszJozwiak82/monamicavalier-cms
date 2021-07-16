<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\AdditionalPhoto;
use App\Repository\AdditionalPhotoRepository;

class ShowPhotos extends Component
{

    public $postId;
    public $photoId;
    public $currentPhoto;
    public $photos;
    public $photoName;
    public $files = [];
    public $key;

    protected $listeners = ['getPostId'];

    public function getPostId($ids){

        $this->postId = $ids['postId'];
        $this->photoId = $ids['photoId'];
        $this->currentPhoto = resolve(AdditionalPhotoRepository::class)->getPhoto($this->photoId);
        // $this->currentPhoto = AdditionalPhoto::find($this->photoId);
        $this->photoName = $this->currentPhoto->filename;

        if(empty($this->files)){
            $this->photos = Post::find($this->postId)->photos;
            foreach($this->photos as $item){
                array_push($this->files, $item->filename);

            }
        }
        $this->key = array_search($this->photoName, $this->files);
    }

    public function render()
    {
        return view('livewire.show-photos',['photo' => $this->photoName, 'key' => $this->key]);
    }

    public function nextPhoto(){

        $this->key = array_search($this->photoName, $this->files);

        $this->photoName = $this->files[0];

        if($this->key + 1 < count($this->files)){
            $this->photoName = $this->files[$this->key + 1];
            $this->key = array_search($this->photoName, $this->files);
        }

        $this->key = array_search($this->photoName, $this->files);

        return $this->photoName;

    }

    public function prevPhoto(){
        $this->key = array_search($this->photoName, $this->files);
        $this->photoName = $this->files[count($this->files) - 1];

        if($this->key - 1 >= 0){
            $this->photoName = $this->files[$this->key - 1];
            $this->key = array_search($this->photoName, $this->files);
        }

        $this->key = array_search($this->photoName, $this->files);

        return $this->photoName;
    }
}
