<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

class UpdateController extends Controller
{
    public function __invoke(TagRequest $req, $tag_id){
        $tag = Tag::find($tag_id);

        $tag->title = $req->input('title');
        $tag->update();

        return redirect()->route('tag.index')->with('success', 'Тег було оновлено успішно');
    }

}
