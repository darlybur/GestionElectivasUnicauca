<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\FranjaVotada;

class HorarioController extends Controller
{

public function mostrarVistaHorarioDocente()
{

    $results = DB::select('select distinct franja_disponible_salons.numerofranja
                               from franja_disponible_salons
                               right join salons on
                               franja_disponible_salons.numerosalon = salons.numerosalon');
                               $arrayHorariosSalonesDisponible = array();
        foreach($results as $contenido)
        {

                array_push($arrayHorariosSalonesDisponible, $contenido->numerofranja);

        }

    $electivasAMostrar=ElectivaController::listarNombreElectivas();

    return view('pagesElectivas/seleccionHorario', compact('arrayHorariosSalonesDisponible'),compact('electivasAMostrar'));

}
public function validarVotacion($correo)
{
    $results = DB::select('select count(*)
                            as resultado
                            from franjavotada
                            where correousuario = :correo',['correo'=>$correo]);
    return $results;
}


public function mostrarVistaHorarioEstudiante()
{

    $codigoElectiva=request()->input('codigoElectiva');
    request()->session()->put('codigoElectiva', $codigoElectiva);
    $results = DB::select('select numerofranja
    from franjavotada
    where codigoelectiva = :codigo',['codigo'=>$codigoElectiva]);
   $arrayHorariosDisponiblesDocente = array();
        foreach($results as $contenido)
        {

                array_push($arrayHorariosDisponiblesDocente, $contenido->numerofranja);

        }

    return view('pagesElectivas/seleccionHorarioEstudiantePrincipal', compact('arrayHorariosDisponiblesDocente'));

}

public function mostrarVistaElectivasASeleccionarEstudiante()
{
    $electivasAMostrar=ElectivaController::listarNombreElectivas();

    return view('pagesElectivas/seleccionHorarioEstudiante', compact('electivasAMostrar'));

}

public function registrarHorarioSalon()
    {
        $data = request()->input('models');
        $cantidad = sizeof($data);

        if($cantidad>=2)
        {
        // $correoSesion = request()->session()->get("email");
        $correoSesion='juan@unicauca.edu.co';
        $codigoElectiva=request()->input('codigoElectiva');;

        echo $correoSesion;
        echo $codigoElectiva;
        try {

                for($i=0;$i<$cantidad;$i++)
                {
                    //echo $data[$i];
                    FranjaVotada::create([
                        'CODIGOELECTIVA' => $codigoElectiva,
                        'CORREOUSUARIO'=>$correoSesion,
                        'NUMEROFRANJA'=>$data[$i]
                    ]);
                }

            $mensaje='El horario seleccionado ha sido registrado existosamente';
            session()->flash('mensajeDeRegistroExitoso',  $mensaje);
        }
        catch (Exception $e){
            $mensaje='Ocurrio un error al registrar el horario';
            session()->flash('mensajeDeRegistroError',  $mensaje);
        }

    }
    else
    {
        $mensaje='Debe seleccionar minimo dos flajas para dictar la electiva';
        session()->flash('mensajeDeRegistroError',  $mensaje);
    }

        $results = DB::select('select distinct franja_disponible_salons.numerofranja
        from franja_disponible_salons
        right join salons on
        franja_disponible_salons.numerosalon = salons.numerosalon');
        $arrayHorariosSalonesDisponible = array();
        foreach($results as $contenido)
        {

        array_push($arrayHorariosSalonesDisponible, $contenido->numerofranja);

        }

        $electivasAMostrar=ElectivaController::listarNombreElectivas();

        return view('pagesElectivas/seleccionHorario', compact('arrayHorariosSalonesDisponible'),compact('electivasAMostrar'));
  

    }

    public function registrarHorarioEstudiante()
    {
        $data = request()->input('models');
        $cantidad = sizeof($data);
       if($cantidad>=2)
       {
            // $correoSesion = request()->session()->get("email");
            $correoSesion='catalina@unicauca.edu.co';
            $codigoElectiva= request()->session()->get('codigoElectiva');

            echo $correoSesion;
            echo $codigoElectiva;
            try {

                    for($i=0;$i<$cantidad;$i++)
                    {
                        //echo $data[$i];
                        FranjaVotada::create([
                            'CODIGOELECTIVA' => $codigoElectiva,
                            'CORREOUSUARIO'=>$correoSesion,
                            'NUMEROFRANJA'=>$data[$i]
                        ]);
                    }

                $mensaje='El horario seleccionado ha sido registrado existosamente';
                session()->flash('mensajeDeRegistroExitoso',  $mensaje);
            }
            catch (Exception $e){
                $mensaje='Ocurrio un error al registrar el horario';
                session()->flash('mensajeDeRegistroError',  $mensaje);
            }

        }
        else
        {
            $mensaje='Debe seleccionar minimo dos flanjas de asistencia para la electiva';
            session()->flash('mensajeDeRegistroError',  $mensaje);
        }

        $electivasAMostrar=ElectivaController::listarNombreElectivas();

        return view('pagesElectivas/seleccionHorarioEstudiante', compact('electivasAMostrar'));
    }




}
