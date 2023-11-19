<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke($tag_id){
        $tag = Tag::find($tag_id);

        return view('admin.tag.show', compact('tag'));
    }

}
