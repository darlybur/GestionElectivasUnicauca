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
        $mensaje='Datos de electivas cargados con éxito';
        session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
    }

    public function importSalones(){
        $path = public_path('datosSalones.csv');
        $lines = file($path);
        $utf8_lines = array_map('utf8_encode', $lines);
        $reemplazarLineas = str_replace(';',',',$utf8_lines);  
        $array = array_map('str_getcsv', $reemplazarLineas);

        for($i = 1; $i < sizeof($array); ++$i){
            
            for($j = 2; $j < 32; ++$j){
                if(strcmp(strtolower($array[$i][$j]), 'x') == 0 ){
                    $franja_disponible_salon = new franja_disponible_salon();
                    $franja_disponible_salon->NUMEROFRANJA = $array[0][$j];
                    $franja_disponible_salon->NUMEROSALON = $this->getNumeroSalon($array[$i][0], $array[$i][1]);
                    $franja_disponible_salon->save();  
                }
                
            } 
        }
    }
    public function getNumeroSalon($numeroSalon, $descripcion){
        $salon = Salon::where('NUMEROSALON', $numeroSalon)->first();
        if($salon){
            $numeroSalon = $salon->NUMEROSALON;
        }else{
            $salon = new Salon();
            $salon->NUMEROSALON = $numeroSalon;
            $salon->DESCRIPCIONSALON = $descripcion;
            $salon->save();
        }
        return $salon->NUMEROSALON;
    }
}