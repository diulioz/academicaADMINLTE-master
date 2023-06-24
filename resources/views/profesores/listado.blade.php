@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profesores</h1>


@stop

@section('content')
    <p>Listado de Profesores</p>
    <a class="btn btn-success" href="/profesores/registrar">Adicionar</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Categoría</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $contador = 1;
        @endphp
        @foreach ($docente_vista as $d)
        <tr>
        <th scope="row">{{$contador}}</th>
        <td>{{$d->codProfesor}}</td>
        <td>{{$d->nomProfesor}}</td>
        <td>{{$d->catProfesor}}</td>
        <td>
            <a class="btn btn-success">Editar</a>
            <a class="btn btn-danger" href="{{route('eliminaProf', $d->codProfesor)}}">Eliminar</a>
        </td>
        </tr>
        @php
            $contador++;
        @endphp
        @endforeach
    </tbody>
    </table>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
