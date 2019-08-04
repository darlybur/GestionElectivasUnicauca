<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsuariosExport;
use App\Imports\UsuariosImport;
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
        return Excel::download(new UsuariosExport, 'usuarios.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importU() 
    {
        Excel::import(new UsuariosImport,request()->file('file'));
        $mensaje='Datos de electivas cargados con éxito';

            session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
    }
}
