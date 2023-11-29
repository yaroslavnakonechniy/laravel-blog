<?php

namespace App\Services\File;

use App\Models\File;
use Illuminate\Support\Facades\Storage;

class Service {

    public function store( $request ){
        
        $file = new File();

        if($request->hasFile('path')) {
            $file->path = $request->file('path')->store('public');
            $file->save();
        }
    }

    public function update($request, $file_id){

        $file = File::find($file_id);

        Storage::disk('')->delete($file->path);

        if($request->hasFile('path')) {
            $file->path = $request->file('path')->store('public');
            $file->save();
        }

    }

    public function destroy( $file_id){

        $file = File::find($file_id);

        Storage::disk('')->delete($file->path);

        $file->delete();
    }


}