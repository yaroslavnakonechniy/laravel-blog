<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\File\BaseController;
use App\Models\File;

class UpdateController extends BaseController
{
    public function __invoke(Request $request, $file_id ){

        $this->service->update($request, $file_id);

        return redirect()->route('admin.file.index')->with('success', 'Дані булo додано успішно');
    }
}