@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a class="btn btn-success" href="/estudiantes/registrar">Adicionar</a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Edad</th>
        <th scope="col">Fecha nacimiento</th>
        <th scope="col">Género</th>
        <th scope="col">Código Ciudad</th>
        <th scope="col">Código Barrio</th>
        <th scope="col">Código Programa</th>
        <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $contador = 1;
        @endphp
        @foreach ($estudiante_vista as $e)
        <tr>
        <th scope="row">{{$contador}}</th>
        <td>{{$e->codEstudiante}}</td>
        <td>{{$e->nomEstudiante}}</td>
        <td>{{$e->edadEstudiante}}</td>
        <td>{{$e->fechaEstudiante}}</td>
        <td>{{$e->sexEstudiante}}</td>
        <td>{{$e->ciudad}}</td>
        <td>{{$e->barrio}}</td>
        <td>{{$e->programa}}</td>
        <td>
            <a class="btn btn-success">Editar</a>
            <a class="btn btn-danger" href="{{route('eliminaEst', $e->codEstudiante)}}">Eliminar</a>
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
