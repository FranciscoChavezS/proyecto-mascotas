<!DOCTYPE html>
<html lang="en">
<head>
@extends('layouts.plantillabase')
@section('contenido')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
</head>
<body>
    <h1>Crear nuevo registro</h1>

    <p>
        <a href="{{ route('mascota.index') }}" class="btn btn-primary">Listado de mascotas</a>
    </p>

    @if(isset($mascota))
        <form action="{{ route('mascota.update', $mascota) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
    @else
        <form action="{{ route('mascota.store') }}" method="POST" enctype="multipart/form-data">
    @endif

        @csrf
        <div class="mb-3">
            <label for ="nombreM" class="form-label">Nombre de mascota: </label>
            <input type="text" name="nombreM" value="{{ $mascota->nombreM ?? '' }}" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for ="foto" class="form-label">Foto: </label>
            {{ $mascota->foto ?? '' }}
            <input type="file" name="foto" id="foto" value="" class="form-control">
        </div>
        <div class="mb-3">
            <label for ="fecha" class="form-label">Ultima vez visto:</label>
            <input type="date" name="fecha" id="fecha" value="{{ $mascota->fecha ?? '' }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for ="raza" class="form-label">Raza: </label>
            <input type="text" name="raza" value="{{ $mascota->raza ?? '' }}" class="form-control" tabindex="3">
        <div class="mb-3">
            <label for ="comentario" class="form-label">Comentario: </label>
            <input type="text" name="comentario" id="comentario" value="{{ $mascota->comentario ?? '' }}" class="form-control" tabindex="2">
        </div>
        <br>
            <input type="submit" value="crear" class="btn btn-success">
        </form>
</body>
@endsection
</html>