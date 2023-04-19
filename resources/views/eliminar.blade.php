@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section("contenido")

    <div class="card">
        <h5 class="card-header">Eliminar una persona</h5>
        <div class="card-body">


            <p class="card-text">
                <div class="alert alert-danger" role="alert">
                    ¿Esta seguro de eliminar este registro?

                    <table class="table table-sm table-hover">
                        <thead>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                        </tbody>
                    </table>
                <hr>
                <form action="">
                    <a href="{{route('personas.index')}}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar</a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>   Eliminar</button>
                </form>


                </div>
            </p>
        </div>
    </div>
@endsection
