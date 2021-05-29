<!DOCTYPE html>
<html lang="es">
<head>
@extends('layouts.plantillabase')
@section('contenido')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
</head>
<body>
    <h1>listado de mascotas</h1>

    
    @if(Session::has('mensaje'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('mensaje') }}
    </div>
    @endif
    <p>
        <a href="{{ route('mascota.create') }}" class="btn btn-primary">Agregar resgistro</a>
    </p>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre mascota</th> 
                <th scope="col">Foto</th> 
                <th scope="col">Fecha</th> 
                <th scope="col">Raza</th>
                <th scope="col">comentario</th> 
                <th scope="col">Modificar</th>
            </tr>  
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->id }}</td>
                    <td>
                        <a href="{{ route('mascota.show', $mascota) }}">
                            {{ $mascota->nombreM }}
                        </a>
                    </td>
                    <td>
                        <img src="{{ asset($mascota->foto)}}" class="img-fluid img-thumbnail" width="120">
                    </td>
                    <td>{{ $mascota->fecha }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->comentario }}</td>
                    <td>
                        <a href="{{ route('mascota.edit', $mascota) }}" class="btn btn-info">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="card-footer mr-auto">
        {{ $mascotas->links() }}
    </div>
</body>
@endsection
</html>