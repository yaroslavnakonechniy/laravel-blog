<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class EditController extends Controller
{
    public function __invoke($category){
        $category = Category::find($category);

        return view('admin.category.edit', compact('category'));
        
    }

}
