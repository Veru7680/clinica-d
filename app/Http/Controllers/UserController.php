<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{

    public function index(){
        $users= User::all();
        return view('users.index', compact('users'));
        

    }


    public function create(){
        return view('users.create');
        
        
    }

    public function store(Request $request)
{
    // User::create($request->only('name', 'username', 'email')
    // + ['password' => bcrypt($request->input('password')),
    // ]);
    // return redirect()->back();

    // Validar los datos del formulario, incluyendo el atributo 'rol'
    

    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'rol' => 'required|in:empleado,doctor',
        'telefono' => 'nullable|string|max:15',
    ]);
    

   // dd($request->all()); // Detiene la ejecución y muestra los datos recibidos 
    
    // Crear el usuario con el rol proporcionado
    User::create([
        'name' => $request->name,
        'username' => $request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'rol' => $request->rol,
        'telefono' => $request->telefono, // Agregar el teléfono
    ]);

    

    // Redirigir de vuelta o a una página específica
    return redirect()->back()->with('success', 'Usuario creado correctamente');
}

public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }

    public function show(User $user)
{
    return view('users.show', compact('user'));
}


public function edit(User $user)
{
    return view('users.edit', compact('user'));
}

public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'rol' => 'required|in:empleado,doctor',
        'telefono' => 'nullable|string|max:15',
    ]);

    $user->update($request->all());
    return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
}


}