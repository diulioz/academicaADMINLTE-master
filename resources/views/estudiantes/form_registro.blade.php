@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Estudiantes</h1>
@stop

@section('content')
    <form action="{{url('estudiantes/registrar')}}" method="POST">
    @csrf <!-- SIEMPRE PONER @csrf es una regla propia del framework al iniciar un formulario -->
    <div class="mb-3">
        <label for="codigo" class="form-label">Código</label>
        <input type="text" class="form-control" id="codEstudiante" name="codEstudiante" placeholder="Código Estudiante">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nomEstudiante" name="nomEstudiante" placeholder="Nombre Estudiante">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edadEstudiante" name="edadEstudiante" placeholder="Edad">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fechaEstudiante" name="fechaEstudiante">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Género</label><br>
        <select class="form-select" aria-label="Default select example" name="sexEstudiante">
            <!-- <option selected>Seleccione una opción</option> -->
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Código Ciudad</label><br>
        <!-- <input type="number" class="form-control" id="ciudad" name="ciudad"> -->
        <select class="form-select" aria-label="Default select example" name="ciudad">
        @foreach($ciudad as $c)
            <option value="{{$c->codCiudad}}">{{$c->codCiudad}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Código Barrio</label><br>
        <select class="form-select" aria-label="Default select example" name="barrio">
        @foreach($barrio as $b)
            <option value="{{$b->codBarrio}}">{{$b->codBarrio}}</option>
        @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Código Programa</label><br>
        <select class="form-select" aria-label="Default select example" name="programa">
        @foreach($programa as $p)
            <option value="{{$p->codPrograma}}">{{$p->codPrograma}}</option>
        @endforeach
        </select>
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