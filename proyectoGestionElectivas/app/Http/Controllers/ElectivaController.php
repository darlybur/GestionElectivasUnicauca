<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Electiva;
Use Exception;

class ElectivaController extends Controller
{
    public function registrarElectivaVista()
    {
        return view('pagesElectivas/registrarElectivas');
    }

    public function registrarElectiva()
    {
        $data= request()->all();

        try {

            Electiva::create([
                'codigo' => $data['codigo'], 'nombre' => $data['nombre'], 'cupo' => $data['cupo']
            ]);

            $mensaje='Electiva registrada exitosamente';


            session()->flash('mensajeDeRegistroExitoso',  $mensaje);

        }
        catch (Exception $e){
            echo 'error al registrar la  electiva';
            $errorCode = $e->errorInfo[1];
            if($errorCode == 1062){
               $mensaje='error, existe una electiva registrada con el codigo '.$data['codigo'];
            }
            else{
                $mensaje='error, al registrar la electiva con el codigo '.$data['codigo'];
            }
            session()->flash('mensajeDeRegistroError',  $mensaje);
        }

        return view('pagesElectivas/registrarElectivas');
    }

    public function actualizarElectivaVista($codigo)
    {
        $electiva = Electiva::findOrFail($codigo);

        return view('pagesElectivas/editarElectiva', compact('electiva',$electiva));
    }

    public function listarElectivas()
    {
        $electivas = Electiva::all();
       
        return view('pagesElectivas/listarElectivas',compact('electivas',$electivas));
    }

    public static function listarNombreElectivas()
    {
        $electivas = Electiva::all();
        

        return $electivas;
    }


    public function actualizarElectiva($codigo)
    {
        try {
            $electiva = Electiva::findOrFail($codigo);
            $data = request()->all();


            $electiva->codigo = $data['codigo'];
            $electiva->nombre = $data['nombre'];
            $electiva->cupo = $data['cupo'];
            $electiva->save();

            $mensaje='Electiva actualizada exitosamente';
            session()->flash('mensajeDeActualizacionExitosa',  $mensaje);
        }
        catch (Exception $e)
        {
            $mensaje='error, al actualizar la electiva con el codigo '.$data['codigo'];
            session()->flash('mensajeDeActualizacionErronea',  $mensaje);
        }
        $electivas = Electiva::all();
        return view('pagesElectivas/listarElectivas',compact('electivas',$electivas));
    }

    public function eliminarElectiva($codigo)
    {
        try{

            $electiva = Electiva::findOrFail($codigo);
            $electiva->delete();
            $mensaje='Electiva eliminada exitosamente';

            session()->flash('mensajeDeEliminacionExitosa',  $mensaje);

        }
        catch (Exception $e)
        {
            $mensaje='error, al eliminar la electiva con el codigo '.$codigo;
            session()->flash('mensajeDeEliminacionErronea',  $mensaje);
        }

        $electivas = Electiva::all();
        return view('pagesElectivas/listarElectivas',compact('electivas',$electivas));
    }
}
