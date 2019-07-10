@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="card bg-light mt-3">
            <div id="contenedorMensajes">
                @if (session('mensajeDeCargarDatosExitoso'))
                    <div class="flash-message">
                        <div class="alert alert-success">
                            {{ Session::get('mensajeDeCargarDatosExitoso') }}
                            {{ session::forget('mensajeDeCargarDatosExitoso')}}
                        </div>
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-primary">Importar datos</button>
                    <a class="btn btn-danger" href="{{ route('export') }}">Descargar datos</a>
                </form>
            </div>
        </div>
    </div>
@stop
