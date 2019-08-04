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
 
    <form class = "form-horizontal" method="POST" action="{{ url('/horario/irVistaRegistrarHorarioEstudiante/') }}">
        {{ csrf_field() }}
        <div >
        
            <div class = "col-md-12 text-right">
            <label class="mdb-main-label">Seleccione la electiva a votar por el horario: </label>
                <select class="mdb-select md-form colorful-select dropdown-primary" name="codigoElectiva">
                    @foreach($electivasAMostrar as $electiva)
                        <option value='{{$electiva->codigo}}'>{{$electiva->nombre}}</option>
                    @endforeach
                </select>
               
            </div>
            <div class="col-md-12 form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Establecer Horario</button>
            </div>
        </div>
    </form>

@endsection
