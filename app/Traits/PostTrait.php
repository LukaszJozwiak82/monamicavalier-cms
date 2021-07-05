<?php
declare(strict_types=1);

namespace App\Traits;

use App\Models\Post;
use App\Models\AdditionalPhoto;
use Illuminate\Support\Facades\Storage;

trait PostTrait {


    public function storePost($data): void {


        if(!empty($this->featuredImg)){
            $this->featuredImg->store('public/photos');
        }

        if($data['postId'] != null){
            Post::find($data['postId'])->update($data);
        } else{
            $this->model = Post::create($data);
        }

        if(!empty($this->additionalPhotos)){
            foreach($this->additionalPhotos as $photo){
                $photo->store('public/additional_photos');
                AdditionalPhoto::create([
                    'post_id' => $this->model->id,
                    'filename' => $photo->hashName(),
                ]);
            }
        }
    }

    public function destroyPost($id): void {
        $post = Post::find($id);
        $image = $post->image;
        $this->deletePhoto('public/photos/'.$image);
        $post->delete();

        $photos = AdditionalPhoto::where('post_id',$id)->get();
        foreach($photos as $photo){
            $this->deletePhoto('public/additional_photos/'.$photo->filename);
        }

    }

    public function deletePhoto($path): void {
        Storage::delete($path);
    }

}
