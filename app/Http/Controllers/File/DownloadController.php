<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class DownloadController extends Controller
{
    public function __invoke($file_id){
        
        $file =  File::find($file_id);

        return Storage::download($file->path);;
    }

}