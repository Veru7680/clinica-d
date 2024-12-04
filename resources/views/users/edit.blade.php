@extends('layouts.main', ['activePage' => 'user-management', 'titlePage' => 'Editar Usuario'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Usuario</h4>
                    <p class="card-category">Modificar los datos del usuario</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label for="username" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label for="email" class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="rol" name="rol">
                                <option value="empleado" {{ $user->rol == 'empleado' ? 'selected' : '' }}>Empleado</option>
                                <option value="doctor" {{ $user->rol == 'doctor' ? 'selected' : '' }}>Doctor</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $user->telefono }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
