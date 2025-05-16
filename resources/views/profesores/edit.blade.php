@extends('layouts.app')

@section('title', 'Editar Profesor')

@section('content')
    <h2>Editar Profesor</h2>
    <form action="{{ route('profesores.update', $profesor) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $profesor->nombre }}" required><br><br>

        <label>Correo:</label>
        <input type="email" name="correo" value="{{ $profesor->correo }}" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="{{ $profesor->telefono }}" required><br><br>

        <button type="submit" class="btn">Actualizar</button>
    </form>
@endsection
