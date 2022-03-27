@extends('layout')
@section('page')
<h3>Nueva calificación</h3>
<div class="row my-4">
    <div class="col-12">
        <form action="{{ url('calificaciones/crear') }}" method="POST">
            @csrf
            <input type="hidden" name="alumno_id" value="{{ $id }}">
            <div class="mb-3">
                <label for="materia" class="form-label">Materias</label>
                <select name="materia" class="form-control">
                    <option value="Matemáticas">Matemáticas</option>
                    <option value="Cálculo">Cálculo</option>
                    <option value="Español">Español</option>
                    <option value="Ciencias">Ciencias</option>
                    <option value="Programación">Programación</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="calificacion" class="form-label">Calificación</label>
                <input type="number" max="100" min="0" name="calificacion" value="0" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
    </div>
</div>    
@endsection