@extends('layout')
@section('page')
<h3>Registro de Alumno</h3>
<div class="row my-4">
    <div class="col-12">
        <form action="{{ url('crear') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de Alumno</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellidos </label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Grado</label>
                <select name="grado" class="form-control">
                    <option value="1">1er Grado</option>
                    <option value="2">2do Grado</option>
                    <option value="3">3ro Grado</option>
                    <option value="4">4to Grado</option>
                    <option value="5">5to Grado</option>
                    <option value="6">6to Grado</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
    </div>
</div>    
@endsection