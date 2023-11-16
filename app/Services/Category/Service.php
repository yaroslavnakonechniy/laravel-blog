<?php

namespace App\Services\Category;

use App\Models\Category;

class Service {

    public function store( $req){
        
        $category = new Category();

        $category->title = $req->input('title');
        $category->save();


    }

    public function update($req, $category){
        
        $category =  Category::find($category);

        $category->title = $req->input('title');
        $category->save();
    }
}