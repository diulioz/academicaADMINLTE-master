@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Programas</h1>
@stop

@section('content')
    <form action="{{url('programas/registrar')}}" method="POST">
    @csrf <!-- SIEMPRE PONER @csrf es una regla propia del framework al iniciar un formulario -->
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codPrograma" name="codPrograma" placeholder="Código Programa">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Programa</label>
        <input type="text" class="form-control" id="nomPrograma" name="nomPrograma" placeholder="Nombre Programa">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Código de Facultad</label>
        <input type="text" class="form-control" id="Facultad" name="Facultad" placeholder="Código Facultad">
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