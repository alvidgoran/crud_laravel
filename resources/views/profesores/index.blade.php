@extends('layouts.app')

@section('title', 'Lista de Profesores')

@section('content')
    <h2>Lista de Profesores</h2>
    <a href="{{ route('profesores.create') }}" class="btn">Agregar Profesor</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->correo }}</td>
                    <td>{{ $profesor->telefono }}</td>
                    <td>
                        <a href="{{ route('profesores.edit', $profesor) }}" class="btn">Editar</a>
                        <form action="{{ route('profesores.destroy', $profesor) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
