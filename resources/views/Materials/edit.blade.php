<!DOCTYPE html>
<html>
<head>
    <title>Editar Material</title>
</head>
<body>
    <h1>Editar Material</h1>
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <form method="POST" action="{{ route('materials.update', $material->codigo) }}">
        @csrf
        @method('PUT')
        <label>Unidad de Medida:</label>
        <input type="text" name="unidadMedida" value="{{ $material->unidadMedida }}" required><br>
        <label>Descripción:</label>
        <input type="text" name="descripcion" value="{{ $material->descripcion }}" required><br>
        <label>Ubicación:</label>
        <input type="text" name="ubicacion" value="{{ $material->ubicacion }}" required><br>
        <label>Categoría:</label>
        <select name="idCategoria" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->idCategoria }}" @if($material->idCategoria == $categoria->idCategoria) selected @endif>{{ $categoria->nombre }}</option>
            @endforeach
        </select><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html> 