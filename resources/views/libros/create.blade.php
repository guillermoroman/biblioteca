<!DOCTYPE html>
<html>
<head>
    <title>Agregar Libro</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    <form action="/libros" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Título" required>

        <select name="author_id" required>
            <option value="">Selecciona un Autor</option>
            @if(isset($authors))
                @foreach ($authors as $author)
                    <option value="{{ $author['id'] }}">{{ $author['name'] }}</option>
                @endforeach
            @endif
        </select>
        
        <input type="number" name="published_year" placeholder="Año de Publicación" required>
        
        <button type="submit">Guardar</button>
    </form>
</body>
</html>