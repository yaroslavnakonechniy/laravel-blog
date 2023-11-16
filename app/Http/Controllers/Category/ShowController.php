<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class ShowController extends Controller
{
    public function __invoke($category){
        $category = Category::find($category);

        return view('category.show', compact('category'));
        
    }

}
