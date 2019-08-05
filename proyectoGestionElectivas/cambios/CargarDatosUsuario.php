<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EstudiantesExport;
use App\Imports\EstudiantesImport;
use Maatwebsite\Excel\Facades\Excel;

class CargarDatosUsuario extends Controller
{
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportViewU()
    {
       return view('importU');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportU() 
    {
        return Excel::download(new EstudiantesExport, 'usuarios.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importU() 
    {
        Excel::import(new EstudiantesImport,request()->file('file'));
        $mensaje='USUARIOS CARGADOS CON ÉXITO';

            session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
    }
}
