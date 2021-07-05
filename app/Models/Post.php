<?php

namespace App\Models;

use App\Models\Category;
use App\Models\AdditionalPhoto;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = ['category_id','title','value','image'];
    public $translatable = ['title','value'];


    public function photos(){

        return $this->hasMany(AdditionalPhoto::class);

    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
