<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
</head>
<body>
    <h1>Muestra una mascota</h1>
    <p>
        <a href="{{ route('mascota.index') }}">Listado de mascotas</a>
    </p>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre mascota</th> 
                <th>Foto</th> 
                <th>Fecha</th> 
                <th>Raza</th>
                <th>comentario</th> 
            </tr>  
        </thead>
        <tbody>
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>{{ $mascota->nombreM }}</td>
                <td>{{ $mascota->foto }}</td>
                <td>{{ $mascota->fecha }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->comentario }}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('mascota.destroy', $mascota) }}" method="POST">
        @csrf
        @method('DELETE')
        <br>
        <input type="submit" value="Eliminar registro">
    </form>
</body>
</html>