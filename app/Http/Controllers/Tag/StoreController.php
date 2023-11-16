<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\TagRequest;

class StoreController extends Controller
{
    public function __invoke(TagRequest $req){
        $tag = new Tag();

        $tag->title = $req->input('title');
        $tag->save();

        return redirect()->route('tag.index')->with('success', 'Новий тег було додано успішно');
    }

}
