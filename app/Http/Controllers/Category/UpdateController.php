<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(CategoryRequest $req, $category){
        $category =  Category::find($category);

        $category->title = $req->input('title');
        $category->save();

        return redirect()->route('category.index')->with('success','Категорію було оновлено успішно');
    }

}
