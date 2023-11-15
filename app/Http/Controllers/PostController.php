<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(){
        $posts =  Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store(PostRequest $request){
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');

        $post->save();
        
        return redirect()->route('posts.index')->with('success', 'Дані булo додано успішно');

    }
    
    public function show($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();

        return view('post.show', compact('post', 'categories'));
    }

    public function edit($post_id){
        $post = Post::find($post_id);
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(PostRequest $request, $post_id){
        $post = Post::find($post_id);

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->category_id = $request->input('category_id');
        
        $post->save();
        
        return redirect()->route('posts.index')->with('success', 'Дані булo оновлено успішно');

    }

    public function destroy($post_id){
        $post = Post::find($post_id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Дані булo видалено успішно');

    }
    
}
