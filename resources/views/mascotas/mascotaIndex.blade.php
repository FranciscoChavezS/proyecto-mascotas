<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
</head>
<body>
    <h1>listado de mascotas</h1>

    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
    <p>
        <a href="{{ route('mascota.create') }}">Agregar resgistro</a>
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
                <th>Modificar</th>
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
                        <img src="{{ asset('storage').'/'.$mascota->foto }}">
                    </td>
                    <td>{{ $mascota->fecha }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->comentario }}</td>
                    <td>
                        <a href="{{ route('mascota.edit', $mascota) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>