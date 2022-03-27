@extends('layout')
@section('page')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<h4>Calificaciones de {{ $alumno->nombre.' '.$alumno->apellidos }}</h4>
<div class="row my-4">
    <div class="col-12">
        <a href="{{ url('calificaciones/crear/'.$alumno->id) }}" class="btn btn-primary">Asignar o Editar Calificacion</a>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Materia</th>
                    <th>Calificacion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumno->calificaciones as $calificacion)
                <tr>
                    <td>{{ $calificacion->id }}</td>
                    <td>{{ $calificacion->materia }}</td>
                    <td>{{ $calificacion->calificacion }}</td>
                    <td>
                        <form method="POST" action="{{ url('calificaciones/'.$calificacion->id) }}">
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