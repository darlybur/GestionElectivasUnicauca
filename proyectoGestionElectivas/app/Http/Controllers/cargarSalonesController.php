<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EstudiantesExport;
use App\Imports\EstudiantesImport;
use Maatwebsite\Excel\Facades\Excel;

use App\franja_disponible_salon;
use App\Salon;

class cargarSalonesController extends Controller
{

    public function importExportViewU()
    {
       return view('importSalones');
    }

    public function importSalones(){
        $path = public_path('datosSalones.csv');
        $lines = file($path);
        $utf8_lines = array_map('utf8_encode', $lines);
        $reemplazarLineas = str_replace(';',',',$utf8_lines);  
        $array = array_map('str_getcsv', $reemplazarLineas);

        for($i = 1; $i < sizeof($array); ++$i){
            
            for($j = 2; $j < 32; ++$j){
                if(!empty(strtolower($array[$i][$j]))){
                    $franja_disponible_salon = new franja_disponible_salon();
                    $franja_disponible_salon->NUMEROFRANJA = $array[0][$j];
                    $franja_disponible_salon->NUMEROSALON = $this->getNumeroSalon($array[$i][0], $array[$i][1]);
                    $franja_disponible_salon->save();  
                }
                
            } 
        }
        $mensaje='SALONES CARGADOS CON ÉXITO';

            session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);

        session()->flash('mensajeDeCargarDatosExitoso',  $mensaje);
        return back();
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
