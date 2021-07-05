<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
         return $this->hasMany(Post::class);
    }

    public static function getCategoryId($category){
        return Category::where('name',$category)->pluck('id')->first();
    }

}
