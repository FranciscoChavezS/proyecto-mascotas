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
    <h1>Muestra una mascota</h1>
    <p>
        <a href="{{ route('mascota.index') }}" class="btn btn-primary">Listado de mascotas</a>
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
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>{{ $mascota->nombreM }}</td>
                <td>
                    <img src="{{ asset($mascota->foto)}}" class="img-fluid img-thumbnail" width="120">
                </td>
                <td>{{ $mascota->fecha }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->comentario }}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('mascota.destroy', $mascota) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estas seguro que deseas borrar el registro?')">
        @csrf
        @method('DELETE')
        <br>
        <button class="btn btn-danger">Borrar</button>
    </form>
</body>
@endsection
</html>