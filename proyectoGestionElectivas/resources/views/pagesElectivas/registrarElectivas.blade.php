@extends('layouts.default')
@section('content')
<div class="container">
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

    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="{{ url('/electiva/registrar') }}">
                    {{ csrf_field() }}
                    <fieldset>
                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input type="text" class="form-control" id="codigo" name="codigo"
                                       placeholder="Digite el codigo de la electiva">
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                       placeholder="Digite el nombre de la electiva">
                            </div>
                            <div class="form-group">
                                <label for="cupo">Cupo</label>
                                <input type="number" class="form-control" id="cupo" name="cupo">
                            </div>
                            <div class="form-group">
                                <label for="docente">Docente</label>
                                <input type="text" class="form-control" id="docente" name="docente"
                                placeholder="Digite el docente de la asignatura">
                            </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar electiva</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
