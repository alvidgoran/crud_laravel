<!DOCTYPE html>
<html>
<head>
    <title>Editar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Editar Estudiante</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hay problemas con los datos ingresados:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $estudiante->nombre }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Correo:</label>
            <input type="email" name="correo" value="{{ $estudiante->correo }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Teléfono:</label>
            <input type="text" name="telefono" value="{{ $estudiante->telefono }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar cambios</button>
    </form>
</div>
</body>
</html>
