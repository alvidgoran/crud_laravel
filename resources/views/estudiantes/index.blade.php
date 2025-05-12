<!DOCTYPE html>
<html>
<head>
    <title>Lista de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Lista de Estudiantes</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Agregar Estudiante</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($estudiantes as $e)
            <tr>
                <td>{{ $e->nombre }}</td>
                <td>{{ $e->correo }}</td>
                <td>{{ $e->telefono }}</td>
                <td>
                    <a href="{{ route('estudiantes.edit', $e->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('estudiantes.destroy', $e->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
