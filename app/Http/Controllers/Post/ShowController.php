<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.show', compact('post', 'categories', 'tags'));
    }

}
