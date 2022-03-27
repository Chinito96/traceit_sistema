@extends('layout')
@section('page')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<div class="row my-4">
    <div class="col-12">
        <a href="{{ url('crear') }}" class="btn btn-primary">Nuevo Alumno</a>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Grado</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Promedio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre.' '.$alumno->apellidos }}</td>
                    <td>{{ $alumno->grado }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->promedio() }}</td>
                    <td>
                        <a href="{{ url('calificaciones/'.$alumno->id) }}" class="btn btn-sm btn-success">Calificaciones</a>
                        <form method="POST" action="{{ url('alumnos/'.$alumno->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection