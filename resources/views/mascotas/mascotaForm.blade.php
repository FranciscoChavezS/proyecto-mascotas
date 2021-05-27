<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
</head>
<body>
    <h1>Crear nuevo registro</h1>

    <p>
        <a href="{{ route('mascota.index') }}">Listado de mascotas</a>
    </p>

    @if(isset($mascota))
        <form action="{{ route('mascota.update', $mascota) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
    @else
        <form action="{{ route('mascota.store') }}" method="POST" enctype="multipart/form-data">
    @endif

        @csrf
        <label for ="nombreM">Nombre de mascota: </label>
        <input type="text" name="nombreM" value="{{ $mascota->nombreM ?? '' }}">
        <br>
        <br>
            <label for ="foto">Foto: </label>
            {{ $mascota->foto ?? '' }}
            <input type="file" name="foto" id="foto" value="">
        <br>
        <br>
            <label for ="fecha">Ultima vez visto:</label>
            <input type="date" name="fecha" id="fecha" value="{{ $mascota->fecha ?? '' }}">
        <br>
        <br>
            <label for ="raza">Raza: </label>
            <input type="text" name="raza" value="{{ $mascota->raza ?? '' }}">
        <br>
        <br>
            <label for ="comentario">Comentario: </label>
            <input type="text" name="comentario" id="comentario" value="{{ $mascota->comentario ?? '' }}">
        <br>
        <br>
            <input type="submit" value="crear">
        </form>
</body>
</html>