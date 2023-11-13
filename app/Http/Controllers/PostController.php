<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(){
        $posts =  Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(){
        
        return view('post.create');
    }

    public function store(PostRequest $request){
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();
        
        return redirect()->route('posts.index')->with('success', 'Дані булo додано успішно');

    }
    
    public function show($post_id){
        $post = Post::find($post_id);
        return view('post.show', compact('post'));
    }

    public function edit($post_id){
        $post = Post::find($post_id);
        return view('post.edit', compact('post'));
    }

    public function update(PostRequest $request, $post_id){
        $post = Post::find($post_id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();
        
        return redirect()->route('posts.index')->with('success', 'Дані булo оновлено успішно');

    }

    public function destroy($post_id){
        $post = Post::find($post_id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Дані булo видалено успішно');

    }
    
}
