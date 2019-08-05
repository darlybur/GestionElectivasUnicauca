<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\ElectivasExport;
use App\Imports\ElectivasImport;
use App\franja_disponible_salon;

use App\Salon;
use Maatwebsite\Excel\Facades\Excel;
  
class CargarDatosController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       return view('import');
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new ElectivasExport, 'electivas.xlsx');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new ElectivasImport,request()->file('file'));
        $mensaje='ELECTIVAS CARGADAS CON ÉXITO';

            session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);

        session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
    
    }
}