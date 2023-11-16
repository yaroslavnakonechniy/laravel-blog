<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Post\BaseController;

class StoreController extends BaseController
{
    public function __invoke(PostRequest $request, TagRequest $tag_req){

        $this->service->store($request, $tag_req);

        return redirect()->route('posts.index')->with('success', 'Дані булo додано успішно');

    }

}
