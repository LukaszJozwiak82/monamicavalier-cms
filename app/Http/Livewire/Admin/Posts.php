<?php
declare(strict_types=1);

namespace App\Http\Livewire\Admin;

use Exception;
use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Traits\PostTrait;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use PostTrait;
    use WithFileUploads;

    public $post;
    public $post2;
    public $titlePl;
    public $titleEn;
    public $contentPl;
    public $contentEn;
    public $confirmingPostAdd = false;
    public $featuredImg;
    public $additionalPhotos;
    public $model;
    public $modalConfirmDeleteVisible = false;
    public $modalConfirmPhotoVisible = false;
    public $modalConfirmEditVisible = false;
    public $modelId = null;

    protected $rules = [
        'titlePl' => 'required',
        'titleEn' => 'required',
        'contentPl' => 'required',
        'contentEn' => 'required',
        'featuredImg' => 'nullable|image',
        'additionalPhotos.*' => 'nullable|image',

    ];

    public function render()
    {
        $posts = Post::where('category_id', Category::getCategoryId('Post'))->orderBy('id','DESC')->get();
        return view('livewire.admin.posts', ['posts'=> $posts]);
    }

    public function getPostData($id = null): Array {

        $img = null;

        if(!empty($this->featuredImg) || $this->featuredImg != null){
            $img = $this->featuredImg->hashName();
        }

        $data = [
            'postId' => $id,
            'category_id' => Category::getCategoryId('post'),
            'title' => [
                'pl'=> $this->titlePl,
                'en'=> $this->titleEn
            ],
            'value'=> [
                'pl' => $this->contentPl,
                'en' => $this->contentEn,
            ],
            'image' => $img,
        ];

        if(empty($this->featuredImg) || $this->featuredImg == null){
            unset($data['image']);
        }

        return $data;

    }


    public function confirmPostAdd(){

        $this->titlePl = '';
        $this->titleEn = '';
        $this->contentPl = '';
        $this->contentEn = '';
        $this->featuredImg = null;
        $this->additionalPhotos = null;
        $this->confirmingPostAdd = true;
    }

    public function savePost(): void {

        $this->validate();

        $this->storePost($this->getPostData(null));

        $this->confirmingPostAdd = false;
        session()->flash('message', 'Rekord został dodany!');
    }

    public function confirmPostDeletion($id): void {
        $this->modelId = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function confirmPostEdit($id): void {
        $this->featuredImg = null;
        $this->additionalPhotos = null;
        $this->modelId = $id;
        $this->post2 = Post::find($this->modelId);
        $this->titlePl = $this->post2->getTranslation('title', 'pl');
        $this->titleEn = $this->post2->getTranslation('title', 'en');
        $this->contentPl = $this->post2->getTranslation('value', 'pl');
        $this->contentEn = $this->post2->getTranslation('value', 'en');
        $this->modalConfirmEditVisible = true;
    }

    public function deletePost(): void {
        try{
            $this->destroyPost($this->modelId);
            $this->modalConfirmDeleteVisible = false;
            session()->flash('message', 'Post permanentnie usunięty!');
        } catch (Exception $e) {
            session()->flash('message', 'Nie można usunąć rekordu');
        }
    }

    public function confirmPhotoShow($id): void {
        $this->emit('getPostId', $id);
        $this->modalConfirmPhotoVisible = true;
    }

    public function changePostStatus(Post $post): void
    {
        $post->status = $post->status == 1 ? 0 : 1;
        $post->save();
        session()->flash('message', 'Status został zmieniony!');
    }

    public function updatePost($id): void {

        $this->validate();

        $this->storePost($this->getPostData($id));

        $this->modalConfirmEditVisible = false;
        session()->flash('message', 'Status został zmieniony!');
    }
}
