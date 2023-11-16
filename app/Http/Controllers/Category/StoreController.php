<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class StoreController extends Controller
{
    public function __invoke(CategoryRequest $req){
        $category = new Category();

        $category->title = $req->input('title');
        $category->save();

        return redirect()->route('category.index')->with('success','Нову категорію було додано успішно');
    }

}
