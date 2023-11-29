<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\File\BaseController;
use App\Models\File;

class StoreController extends BaseController
{
    public function __invoke(Request $request){

        $this->service->store($request);

        return redirect()->route('admin.file.index')->with('success', 'Дані булo додано успішно');
    }
}