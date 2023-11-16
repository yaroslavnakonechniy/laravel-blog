<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Category\BaseController;

class UpdateController extends BaseController
{
    public function __invoke(CategoryRequest $req, $category){

        $this->service->update($req, $category);

        return redirect()->route('category.index')->with('success','Категорію було оновлено успішно');
    }

}
