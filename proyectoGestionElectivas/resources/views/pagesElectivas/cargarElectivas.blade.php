@extends('layouts.default')
@section('content')
    <table class="table table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cargar Electiva</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
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
            </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cargar Estudiantes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
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
            </td>
            </tr>
        </tbody>
    </table>
    <table class="table table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cargar Salones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
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
            </td>
            </tr>
        </tbody>
    </table>
    </div>
@stop
