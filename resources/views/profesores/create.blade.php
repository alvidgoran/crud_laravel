@extends('layouts.app')

@section('title', 'Agregar Profesor')

@section('content')
    <h2>Agregar Profesor</h2>
    <form action="{{ route('profesores.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required><br><br>

        <button type="submit" class="btn">Guardar</button>
    </form>
@endsection
