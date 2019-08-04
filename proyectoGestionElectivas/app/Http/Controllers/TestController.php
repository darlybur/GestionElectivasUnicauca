<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function import(){
        $path = public_path('archivoSalones.csv');
        return file_get_contents($path);
    }
}
