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
        </div>
    </body>
</html>
