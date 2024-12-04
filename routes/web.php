<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Asegúrate de importar el controlador
use App\Http\Controllers\PacienteController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de usuarios
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index'); // Listar usuarios
    Route::get('/create', [UserController::class, 'create'])->name('users.create'); // Formulario de creación
    Route::post('/', [UserController::class, 'store'])->name('users.store'); // Guardar usuario
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show'); // Ver detalles
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); // Formulario de edición
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update'); // Actualizar usuario
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy'); // Eliminar usuario
});

// Rutas de pacientes
Route::resource('pacientes', PacienteController::class);
Route::delete('pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
