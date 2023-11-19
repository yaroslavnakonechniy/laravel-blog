<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Category\BaseController;

class StoreController extends BaseController
{
    public function __invoke(CategoryRequest $req){

        $this->service->store($req);

        return redirect()->route('admin.category.index')->with('success','Нову категорію було додано успішно');
    }

}
