@extends('layouts.defaultDocente')
@section('content')


        <div id="contenedorMensajes">
        @if (session('mensajeDeRegistroExitoso'))
                <div class="flash-message">
                    <div class="alert alert-success">
                        {{ Session::get('mensajeDeRegistroExitoso') }}
                        {{session::forget('mensajeDeRegistroExitoso')}}
                    </div>
                </div>
        @endif
        @if (session('mensajeDeRegistroError'))
                <div class="alert alert-danger text-center animated fadeIn">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>
                        {{ Session::get('mensajeDeRegistroError') }}
                        {{session::forget('mensajeDeRegistroError')}}
                    </strong>
                </div>
            @endif
        </div>


<form class = "form-horizontal" method="POST" action="{{ url('/horario/registrarHorarioDocente') }}">

    <div class = "col-md-12 text-right">
    <select name="codigoElectiva">
        @foreach($electivasAMostrar as $electiva)
            <option value='{{$electiva->codigo}}'>{{$electiva->nombre}}</option>
        @endforeach
     </select>
    </div>

    {{ csrf_field() }}
    <div class="grid-container text-center">
    <div class="grid-dia"><H1> Hora </H1></div>
    <div class="grid-dia"><H1> Lunes </H1></div>
    <div class="grid-dia"><H1>Martes</H1></div>
    <div class="grid-dia"><H1>Miercoles</H1></div>
    <div class="grid-dia"><H1>Jueves</H1></div>
    <div class="grid-dia"><H1>Viernes</H1></div>
    <div class="grid-dia"><H1>sabado</H1></div>

    <div class="grid-dia"><H1> 7 am - 9 am</H1></div>
        @if(!in_array("L-7-9", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"> <input type="checkbox"  id='Inactivocheckbox' disable value='L-7-9' name ='models[]'  ></div>
        @else
        <div class="grid-item"> <input type="checkbox" id='checkbox'  value='L-7-9' name ='models[]'  ></div>
        @endif

        @if(!in_array("M-7-9", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="M-7-9" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="M-7-9" name ='models[]'></div>
        @endif

        @if(!in_array("MI-7-9", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="MI-7-9" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="MI-7-9" name ='models[]'></div>
        @endif


        @if(!in_array("J-7-9", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="J-7-9" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="J-7-9" name ='models[]'></div>
        @endif


        @if(!in_array("V-7-9", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="V-7-9" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="V-7-9" name ='models[]'></div>
        @endif


        @if(!in_array("S-7-9", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="S-7-9" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="S-7-9" name ='models[]'></div>
        @endif




        <div class="grid-dia"><H1> 9 am - 11 am</H1></div>

        @if(!in_array("L-9-11", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="L-9-11" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="L-9-11" name ='models[]'></div>
        @endif

        @if(!in_array("M-9-11", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="M-9-11" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="M-9-11" name ='models[]'></div>
        @endif


        @if(!in_array("MI-9-11", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="MI-9-11" name ='models[]' ></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="MI-9-11" name ='models[]'></div>
        @endif

        @if(!in_array("J-9-11", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="J-9-11" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="J-9-11" name ='models[]'></div>
        @endif

        @if(!in_array("V-9-11", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="V-9-11" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="V-9-11"  name ='models[]'></div>
        @endif


        @if(!in_array("S-9-11", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="S-9-11" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="S-9-11" name ='models[]'></div>
        @endif


        <div class="grid-dia"><H1> 11 am - 1 pm</H1></div>

        @if(!in_array("L-11-1", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="L-11-1" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="L-11-1" name ='models[]'></div>
        @endif

        @if(!in_array("M-11-1", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="M-11-1" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="M-11-1" name ='models[]'></div>
        @endif

        @if(!in_array("MI-11-1", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="MI-11-1" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="MI-11-1" name ='models[]'></div>
        @endif
        @if(!in_array("J-11-1", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="J-11-1" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="J-11-1" name ='models[]'></div>
        @endif

        @if(!in_array("V-11-1", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="V-11-1" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="V-11-1" name ='models[]'></div>
        @endif

        @if(!in_array("S-11-1", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="S-11-1" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="S-11-1" name ='models[]'></div>
        @endif


        <div class="grid-dia"><H1> 2 pm - 4 pm</H1></div>

        @if(!in_array("L-2-4", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="L-2-4" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="L-2-4" name ='models[]'></div>
        @endif

        @if(!in_array("M-2-4", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="M-2-4" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="M-2-4" name ='models[]'></div>
        @endif


        @if(!in_array("MI-2-4", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="MI-2-4"  name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="MI-2-4" name ='models[]'></div>
        @endif


        @if(!in_array("J-2-4", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="J-2-4" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="J-2-4" name ='models[]'></div>
        @endif


        @if(!in_array("V-2-4", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="V-2-4" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="V-2-4" name ='models[]'></div>
        @endif


        @if(!in_array("S-2-4", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="S-2-4" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="S-2-4" name ='models[]'></div>
        @endif


        <div class="grid-dia"><H1> 4 am - 6 am</H1></div>


        @if(!in_array("L-4-6", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="L-4-6" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="L-4-6" name ='models[]'></div>
        @endif


        @if(!in_array("M-4-6", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="M-4-6" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="M-4-6" name ='models[]'></div>
        @endif


        @if(!in_array("MI-4-6", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="MI-4-6" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="MI-4-6" name ='models[]'></div>
        @endif


        @if(!in_array("J-4-6", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="J-4-6" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' name ='models[]' disable value="J-4-6"></div>
        @endif


        @if(!in_array("V-4-6", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="V-4-6" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="V-4-6" name ='models[]'></div>
        @endif


        @if(!in_array("S-4-6", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="S-4-6" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="S-4-6" name ='models[]'></div>
        @endif

        <div class="grid-dia"><H1> 6 am - 8 am</H1></div>


        @if(!in_array("L-6-8", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="l06-08" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="L-6-8" name ='models[]'></div>
        @endif


        @if(!in_array("M-6-8", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="M-6-8" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="M-6-8" name ='models[]'></div>
        @endif


        @if(!in_array("MI-6-8", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="MI-6-8" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="MI-6-8" name ='models[]'></div>
        @endif


        @if(!in_array("J-6-8", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="J-6-8" name ='models[]'></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="J-6-8" name ='models[]'></div>
        @endif


        @if(!in_array("V-6-8", $arrayHorariosSalonesDisponible))
         <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="V-6-8" name ='models[]' ></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="V-6-8" name ='models[]'></div>
        @endif


        @if(!in_array("S-6-8", $arrayHorariosSalonesDisponible))
        <div class="grid-item-inactivo"><input type="checkbox" id='Inactivocheckbox' disable value="S-6-8" name ='models[]' ></div>
        @else
        <div class="grid-item"><input type="checkbox" id='checkbox' disable value="S-6--8" name ='models[]'></div>
        @endif

</div>
<div class="col-md-12 form-group">
        <button type="submit" class="btn btn-primary btn-lg">Registrar Horario</button>
    </div>
</form>

@endsection
