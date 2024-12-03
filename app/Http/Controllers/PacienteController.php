<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos del paciente
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:pacientes,email',
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'estado' => 'required|in:activo,inactivo',
        ]);
    
        // Crear el paciente
        Paciente::create($request->all());
    
        return redirect()->route('pacientes.index')->with('success', 'Paciente creado correctamente.');
    }
    

    public function show(Paciente $paciente)
    {
        return view('pacientes.show', compact('paciente'));
    }

    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:pacientes,email,' . $paciente->id,
            'telefono' => 'required|string|max:15',
            'direccion' => 'required|string|max:255',
            'estado' => 'required|in:activo,inactivo',
        ]);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente actualizado correctamente.');
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente eliminado correctamente.');
    }
}
