<!DOCTYPE html>
<html>
<head>
    <title>Agregar Libro</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    <form action="/libros" method="POST">
        @csrf
        <input type="text" name="titulo" placeholder="Título">
        <input type="text" name="autor" placeholder="Autor">
        <!-- otros campos del libro -->
        <button type="submit">Guardar</button>
    </form>
</body>
</html>