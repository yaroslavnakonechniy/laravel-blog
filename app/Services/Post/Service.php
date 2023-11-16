<?php

namespace App\Services\Post;

use App\Models\Post; 
use App\Models\Tag;

class Service {

    public function store( $request, $tag_req){
        
        $post = new Post();
        $tag = new Tag();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');

        $tag->tag_id = $tag_req->input('tag_id');
        $tags=$tag['tag_id'];
        
        $post->save();
        
        $post->tags()->attach($tags);

    }

    public function update($request, $tag_req, $post_id){
        
        $post = Post::find($post_id);
        $tag = new Tag();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');

        $tag->tag_id = $tag_req->input('tag_id');
        $tags=$tag['tag_id'];
        
        $post->save();
        
        $post->tags()->sync($tags);
    }
}