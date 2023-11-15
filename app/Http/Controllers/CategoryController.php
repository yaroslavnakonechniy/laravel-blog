<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(){
        
        return view('category.create');

    }

    public function store(CategoryRequest $req){
        $category = new Category();

        $category->title = $req->input('title');
        $category->save();

        return redirect()->route('category.index')->with('success','Нову категорію було додано успішно');
    }

    public function show($category){
        $category = Category::find($category);

        return view('category.show', compact('category'));
        
    }
    public function edit($category){
        $category = Category::find($category);

        return view('category.edit', compact('category'));
        
    }
    
    public function update(CategoryRequest $req, $category){
        $category =  Category::find($category);

        $category->title = $req->input('title');
        $category->save();

        return redirect()->route('category.index')->with('success','Категорію було оновлено успішно');
    }
    

    public function destroy($category){
        $category =  Category::find($category);
        $category->delete();

        return redirect()->route('category.index')->with('success','Категорію було видалено успішно');
    }
}
