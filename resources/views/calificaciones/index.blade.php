<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Traceit</title>
        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                Traceit
              </a>
            </div>
        </nav>
        <div class="container">
            <h4>Calificaciones de {{ $alumno->nombre.' '.$alumno->apellidos }}</h4>
            <div class="row my-4">
                <div class="col-12">
                    <button class="btn btn-primary">Nueva Calificacion</button>
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
                                    <a href="{{url('calificaciones/'.$calificacion->id)}}" class="btn btn-sm btn-success">Calificaciones</a>
                                    <button class="btn btn-sm btn-warning">Editar</button>
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
