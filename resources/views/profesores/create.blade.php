<h1>Crear Profesor</h1>

<form action="{{ route('profesores.store') }}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre"><br>
    <input type="email" name="correo" placeholder="Correo"><br>
    <input type="text" name="telefono" placeholder="Teléfono"><br>
    <input type="text" name="especialidad" placeholder="Especialidad"><br>
    <input type="date" name="fecha_contratacion"><br>
    <button type="submit">Guardar</button>
</form>
