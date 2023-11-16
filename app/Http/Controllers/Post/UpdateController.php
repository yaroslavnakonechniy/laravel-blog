<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\TagRequest;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Controllers\Post\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(PostRequest $request, TagRequest $tag_req, $post_id){

        $this->service->update($request, $tag_req, $post_id);
        
        return redirect()->route('posts.index')->with('success', 'Дані булo оновлено успішно');

    }

}
