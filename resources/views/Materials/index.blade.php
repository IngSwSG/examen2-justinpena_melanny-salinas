<!DOCTYPE html>
<html>
<head>
    <title>Lista de Materiales</title>
</head>
<body>
    <h1>Materiales Guardados</h1>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Unidad de Medida</th>
            <th>Descripción</th>
            <th>Ubicación</th>
            <th>Categoría</th>
        </tr>
        @foreach($materials as $material)
        <tr>
            <td>{{ $material->codigo }}</td>
            <td>{{ $material->unidadMedida }}</td>
            <td>{{ $material->descripcion }}</td>
            <td>{{ $material->ubicacion }}</td>
            <td>{{ $material->categoria->nombre ?? 'Sin categoría' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html> 