<h1>Editar Profesor</h1>

<form action="{{ route('profesores.update', $profesor) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nombre" value="{{ $profesor->nombre }}"><br>
    <input type="email" name="correo" value="{{ $profesor->correo }}"><br>
    <input type="text" name="telefono" value="{{ $profesor->telefono }}"><br>
    <input type="text" name="especialidad" value="{{ $profesor->especialidad }}"><br>
    <input type="date" name="fecha_contratacion" value="{{ $profesor->fecha_contratacion }}"><br>
    <button type="submit">Actualizar</button>
</form>
