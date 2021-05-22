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

    <form action="{{ route('mascota.store') }}" method="POST">
    @csrf
        <label for ="nombreM">Nombre de mascota: </label>
        <input type="text" name="nombreM">
        <br>
        <br>
            <label for ="foto">Foto: </label>
            <input type="file" name="foto" id="foto">
        <br>
        <br>
            <label for ="fecha">Ultima vez visto:</label>
            <input type="date" name="fecha" id="fecha">
        <br>
        <br>
            <label for ="raza">Raza: </label>
            <input type="text" name="raza">
        <br>
        <br>
            <label for ="comentario">Comentario: </label>
            <textarea name="comentario" id="comentario" cols="40" rows="5"></textarea>

        <br>
        <br>
            <input type="submit" value="crear">
        </form>
</body>
</html>