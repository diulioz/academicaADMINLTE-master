@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Facultades</h1>
@stop

@section('content')
    <form>
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codFacultad" placeholder="id">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de Facultad</label>
        <input type="text" class="form-control" id="nomFacultad" placeholder="nombre">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop