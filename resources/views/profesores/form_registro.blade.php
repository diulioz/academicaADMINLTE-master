@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Docentes</h1>
@stop

@section('content')
    <form action="{{url('profesores/registrar')}}" method="POST">
    @csrf <!-- SIEMPRE PONER @csrf es una regla propia del framework al iniciar un formulario -->
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codProfesor" name="codProfesor" placeholder="Código Docente">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Profesor</label>
        <input type="text" class="form-control" id="nomProfesor" name="nomProfesor" placeholder="Nombre Docente">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Categoría</label>
        <input type="text" class="form-control" id="catProfesor" name="catProfesor" placeholder="Categoría">
    </div>
    <button type="submit" class="btn btn-success">Registar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop