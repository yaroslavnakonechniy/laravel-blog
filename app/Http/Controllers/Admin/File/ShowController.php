<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class ShowController extends Controller
{
    public function __invoke($file_id){
        
        $file =  File::find($file_id);

        return view('admin.file.show', compact('file'));
    }

}
