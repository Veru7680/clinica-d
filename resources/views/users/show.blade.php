@extends('layouts.main', ['activePage' => 'user-management', 'titlePage' => 'Detalles del Usuario'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Detalles del Usuario</h4>
                <p class="card-category">Información completa del usuario</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nombre:</strong> {{ $user->name }}</p>
                        <p><strong>Correo:</strong> {{ $user->email }}</p>
                        <p><strong>Teléfono:</strong> {{ $user->telefono }}</p>
                        <p><strong>Rol:</strong> {{ $user->rol }}</p>
                    </div>
                </div>
                <a href="{{ route('users.index') }}" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>
</div>
@endsection
