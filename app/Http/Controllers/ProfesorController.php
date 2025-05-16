<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    public function create()
    {
        return view('profesores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:profesores',
            'telefono' => 'required',
            'especialidad' => 'required',
        ]);

        Profesor::create($request->all());

        return redirect()->route('profesores.index')
            ->with('success', 'Profesor creado exitosamente.');
    }

    public function edit(Profesor $profesor)
    {
        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email|unique:profesores,correo,' . $profesor->id,
            'telefono' => 'required',
            'especialidad' => 'required',
        ]);

        $profesor->update($request->all());

        return redirect()->route('profesores.index')
            ->with('success', 'Profesor actualizado correctamente.');
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesores.index')
            ->with('success', 'Profesor eliminado correctamente.');
    }
}
