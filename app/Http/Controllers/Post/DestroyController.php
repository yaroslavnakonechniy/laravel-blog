<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class DestroyController extends Controller
{
    public function __invoke($post_id){
        $post = Post::find($post_id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Дані булo видалено успішно');
    }
}
