<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(){
       
        return view('admin.file.create');
    }

}