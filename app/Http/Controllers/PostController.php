<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use App\Http\Requests\TagRequest;

class PostController extends Controller
{
    public function index(){
        $posts =  Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.create', compact('categories', 'tags'));
    }

    public function store(PostRequest $request, TagRequest $tag_req){
        $post = new Post();
        $tag = new Tag();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');

        $tag->tag_id = $tag_req->input('tag_id');
        $tags=$tag['tag_id'];
        
        $post->save();
        
        $post->tags()->attach($tags);
        
        return redirect()->route('posts.index')->with('success', 'Дані булo додано успішно');

    }
    
    public function show($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.show', compact('post', 'categories', 'tags'));
    }

    public function edit($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();
        $tags =  Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(PostRequest $request, TagRequest $tag_req, $post_id){
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

    public function destroy($post_id){
        $post = Post::find($post_id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Дані булo видалено успішно');

    }
    
}
