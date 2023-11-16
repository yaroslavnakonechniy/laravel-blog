<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class DestroyController extends Controller
{
    public function __invoke($category){
        $category =  Category::find($category);
        $category->delete();

        return redirect()->route('category.index')->with('success','Категорію було видалено успішно');
    }
}
