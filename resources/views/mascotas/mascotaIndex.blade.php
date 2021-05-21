<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
</head>
<body>
    <h1>Registro de mascotas</h1>

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
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->id }}</td>
                    <td>{{ $mascota->nombreM }}</td>
                    <td>{{ $mascota->foto }}</td>
                    <td>{{ $mascota->fecha }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->comentario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>