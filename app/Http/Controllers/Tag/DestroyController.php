<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class DestroyController extends Controller
{
    public function __invoke($tag_id){
        $tag = Tag::find($tag_id);

        $tag->delete();

        return redirect()->route('tag.index')->with('success', 'Тег було видалено успішно');
    }
}
