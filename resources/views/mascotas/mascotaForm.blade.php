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
        <!-- Bootstrap CSS 
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        -->
        <div class="mb-3">
            <label for ="nombreM" class="form-label">Nombre de mascota: </label>
            <input type="text" name="nombreM" value="{{ $mascota->nombreM ?? '' }}" class="form-control" tabindex="2" autofocus>
            @if($errors->has('nombreM'))
                <span class="error text-danger" for="input-name">{{ $errors->first('nombreM') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for ="foto" class="form-label">Foto: </label>
            {{ $mascota->foto ?? '' }}
            <input type="file" name="foto" id="foto" value="" class="form-control">
            @if($errors->has('foto'))
                <span class="error text-danger" for="input-name">{{ $errors->first('foto') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for ="fecha" class="form-label">Ultima vez visto:</label>
            <input type="date" name="fecha" id="fecha" value="{{ $mascota->fecha ?? '' }}" class="form-control">
            @if($errors->has('fecha'))
                <span class="error text-danger" for="input-name">{{ $errors->first('fecha') }}</span>
            @endif
        </div>
        <div class="mb-3">
            <label for ="raza" class="form-label">Raza: </label>
            <input type="text" name="raza" value="{{ $mascota->raza ?? '' }}" class="form-control" tabindex="3">
            @if($errors->has('raza'))
                <span class="error text-danger" for="input-name">{{ $errors->first('raza') }}</span>
            @endif
        <div class="mb-3">
            <label for ="comentario" class="form-label">Comentario: </label>
            <input type="text" name="comentario" id="comentario" value="{{ $mascota->comentario ?? '' }}" class="form-control" tabindex="2">
            @if($errors->has('comentario'))
                <span class="error text-danger" for="input-name">{{ $errors->first('comentario') }}</span>
            @endif
        </div>
        <br>
            <input type="submit" value="crear" class="btn btn-success">
        </form>
</body>
@endsection
</html>