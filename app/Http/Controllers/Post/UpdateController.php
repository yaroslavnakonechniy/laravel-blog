<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\TagRequest;
use App\Models\Post;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(PostRequest $request, TagRequest $tag_req, $post_id){
        $post = Post::find($post_id);
        $tag = new Tag();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');

        $tag->tag_id = $tag_req->input('tag_id');
        $tags=$tag['tag_id'];
        
        $post->save();
        
        $post->tags()->sync($tags);
        
        return redirect()->route('posts.index')->with('success', 'Дані булo оновлено успішно');

    }

}
