<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke(){
        $posts =  Post::paginate(5);
        return view('post.index', compact('posts'));
    }

}
