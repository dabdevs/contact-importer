<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    // Processing file uploading
    public function upload() 
    {
        $files = request()->files; dd($files);
    }

}
