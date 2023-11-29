<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;
use App\Models\File;

class EditController extends Controller
{
    public function __invoke($file_id){
       
        $file =  File::find($file_id);

        return view('admin.file.edit', compact('file'));
    }

}