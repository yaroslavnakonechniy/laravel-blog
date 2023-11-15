<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function create(){
        
        return view('tag.create');
    }

    public function store(TagRequest $req){
        $tag = new Tag();

        $tag->title = $req->input('title');
        $tag->save();

        return redirect()->route('tag.index')->with('success', 'Новий тег було додано успішно');
    }

    public function show($tag_id){
        $tag = Tag::find($tag_id);

        return view('tag.show', compact('tag'));
    }

    public function edit($tag_id){
        $tag = Tag::find($tag_id);
        return view('tag.edit', compact('tag'));
    }

    public function update(TagRequest $req, $tag_id){
        $tag = Tag::find($tag_id);

        $tag->title = $req->input('title');
        $tag->update();

        return redirect()->route('tag.index')->with('success', 'Тег було оновлено успішно');
    }

    public function destroy($tag_id){
        $tag = Tag::find($tag_id);

        $tag->delete();

        return redirect()->route('tag.index')->with('success', 'Тег було видалено успішно');
    }

}
