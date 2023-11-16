<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use App\Http\Controllers\Tag\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(TagRequest $req, $tag_id){

        $this->service->update($req, $tag_id);

        return redirect()->route('tag.index')->with('success', 'Тег було оновлено успішно');
    }
}
