<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Http\Controllers\Tag\BaseController;

class StoreController extends BaseController
{
    public function __invoke(TagRequest $req){

        $this->service->store($req);

        return redirect()->route('tag.index')->with('success', 'Новий тег було додано успішно');
    }

}
