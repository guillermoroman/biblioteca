<!DOCTYPE html>
<html>
<head>
    <title>Lista de Libros</title>
</head>
<body>
    <h1>Libros</h1>
    <a href="/libros/crear">Agregar Libro</a>
    <ul>
        @foreach ($libros as $libro)
        <li>{{ $libro['title'] }}
            <form action="/libros/{{ $libro['id'] }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Eliminar</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>