<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Exports\ElectivasExport;
use App\Imports\ElectivasImport;
<<<<<<< HEAD
use App\franja_disponible_salon;
use App\Salon;
=======
>>>>>>> c039dbb9724195cbdcea03f41b4ff02d1695a8de
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
<<<<<<< HEAD
 
=======
   
>>>>>>> c039dbb9724195cbdcea03f41b4ff02d1695a8de
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
<<<<<<< HEAD
        $mensaje='ELECTIVAS CARGADAS CON ÉXITO';

            session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);

        session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
    }

   
=======
        $mensaje='Datos de electivas cargados con exito';

            session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
    }
>>>>>>> c039dbb9724195cbdcea03f41b4ff02d1695a8de
}