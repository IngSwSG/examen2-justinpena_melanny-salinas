<!DOCTYPE html>
<html>
<head>
    <title>Crear Material</title>
</head>
<body>
    <h1>Crear Material</h1>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ route('materials.store') }}">
        @csrf
        <label>Unidad de Medida:</label>
        <input type="text" name="unidadMedida" required><br>
        <label>Descripción:</label>
        <input type="text" name="descripcion" required><br>
        <label>Ubicación:</label>
        <input type="text" name="ubicacion" required><br>
        <label>Categoría:</label>
        <select name="idCategoria" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->idCategoria }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>