<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    // Mostrar lista de estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar formulario para crear nuevo estudiante
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar nuevo estudiante
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
        ]);

        Estudiante::create($request->all());

        return redirect()->route('estudiantes.index')
                         ->with('success', 'Estudiante creado correctamente.');
    }

    // Mostrar formulario para editar estudiante
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    // Actualizar datos de estudiante
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index')
                         ->with('success', 'Estudiante actualizado correctamente.');
    }

    // Eliminar estudiante
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
                         ->with('success', 'Estudiante eliminado correctamente.');
    }
}
