<h1>Lista de Profesores</h1>
<a href="{{ route('profesores.create') }}">Crear Profesor</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Especialidad</th><th>Acciones</th>
    </tr>
    @foreach ($profesores as $profesor)
        <tr>
            <td>{{ $profesor->nombre }}</td>
            <td>{{ $profesor->correo }}</td>
            <td>{{ $profesor->telefono }}</td>
            <td>{{ $profesor->especialidad }}</td>
            <td>
                <a href="{{ route('profesores.edit', $profesor) }}">Editar</a>
                <form action="{{ route('profesores.destroy', $profesor) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

