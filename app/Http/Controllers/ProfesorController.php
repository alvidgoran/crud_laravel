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
    Profesor::create($request->except('_token'));
    return redirect()->route('profesores.index');
}

public function edit(Profesor $profesor)
{
    return view('profesores.edit', compact('profesor'));
}

public function update(Request $request, Profesor $profesor)
{
    $profesor->update($request->except('_token', '_method'));
    return redirect()->route('profesores.index');
}

public function destroy(Profesor $profesor)
{
    $profesor->delete();
    return redirect()->route('profesores.index');
}
}
