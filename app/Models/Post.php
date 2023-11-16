<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;

class Post extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function category(){
        
        return $this->belongsTo(Category::class);
    }

    public function tags(){

        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
}
