@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section("contenido")

    <div class="card">
        <h5 class="card-header">Actualizar nueva persona</h5>
        <div class="card-body">


            <p class="card-text">
            <form action="#">
                <label for="">Apellido paterno</label>
                <input type="text" name="paterno" class="form-control" required>

                <label for="">Apellido materno</label>
                <input type="text" name="materno" class="form-control" required>

                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>

                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>

                <br>
                <a href="{{route("personas.index")}}" class="btn btn-danger">
                    <span class="fas fa-undo-alt"></span> Regresar</a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar</button>

            </form>
            </p>
        </div>
    </div>
@endsection
