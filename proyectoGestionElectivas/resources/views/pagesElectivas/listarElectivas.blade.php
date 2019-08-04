@extends('layouts.default')
@section('content')
<div id="contenedorMensajes">
    @if (session('mensajeDeEliminacionExitosa'))
        <div class="flash-message">
            <div class="alert alert-success">
                {{ Session::get('mensajeDeEliminacionExitosa') }}
                {{session::forget('mensajeDeEliminacionExitosa')}}
            </div>
        </div>
    @endif
    @if (session('mensajeDeEliminacionErronea'))
        <div class="alert alert-danger text-center animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                {{ Session::get('mensajeDeEliminacionErronea') }}
                {{session::forget('mensajeDeEliminacionErronea')}}
            </strong>
        </div>
    @endif
    @if (session('mensajeDeActualizacionExitosa'))
        <div class="flash-message">
            <div class="alert alert-success">
                {{ Session::get('mensajeDeActualizacionExitosa') }}
                {{session::forget('mensajeDeActualizacionExitosa')}}
            </div>
        </div>
    @endif
    @if (session('mensajeDeActualizacionErronea'))
        <div class="alert alert-danger text-center animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>
                {{ Session::get('mensajeDeActualizacionErronea') }}
                {{session::forget('mensajeDeActualizacionErronea')}}
            </strong>
        </div>
    @endif
    </div>

    <table class="table table-responsive">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cupo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($electivas as $electiva)
            <tr>
                <td>{{$electiva->codigo}}</td>
                <td>{{$electiva->nombre}}</td>
                <td>{{$electiva->cupo}}</td>
                <td><a href="{{ url('electiva/vistaActualizarElectiva', $electiva->codigo)}}" class="btn btn-primary">Actualizar</a></td>
                <td>
                    <form action="{{ url('/electiva/eliminar', $electiva->codigo)}}"  method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
