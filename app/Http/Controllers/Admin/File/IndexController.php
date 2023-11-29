<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class IndexController extends Controller
{
    public function __invoke(){
        
        $files =  File::paginate(5);

        return view('admin.file.index', compact('files'));
    }

}
