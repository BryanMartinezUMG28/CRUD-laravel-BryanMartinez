@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')


    <div class="card">
        <h5 class="card-header">CRUD con laravel 8 y MYSQL</h5>
        <div class="card-body">
            <h5 class="card-title text-center">Listado de personas en el sistema</h5>
            <p>
                <a href="{{route("personas.create")}}" class="btn btn-primary"> <span class="fas fa-user-plus"></span> Agregar nueva personas</a>
            </p>

            <hr>


            <p class="card-text">
                <div class="table table-responsive">

                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>Apellido paterno</th>
                            <th>Apellido materno</th>
                            <th>Nombre</th>
                            <th>Fecha de nacimiento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                         <tbody>

                         @foreach($datos as $item)

                            <tr>
                                <td>{{$item->paterno }}</td>
                                <td>{{$item->materno }}</td>
                                <td>{{$item->nombre }}</td>
                                <td>{{$item->fecha_nacimiento }}</td>
                                <td>
                                    <form action="">
                                        <button class="btn btn-warning btn-sm">
                                            <span class="fas fa-user-edit"></span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="">
                                        <button class="btn btn-danger btn-sm">
                                            <span class="fas fa-user-times"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                         @endforeach
                         </tbody>
                    </table>

                </div>
            </p>
        </div>
    </div>

@endsection
