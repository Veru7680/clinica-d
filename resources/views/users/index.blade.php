@extends('layouts.main', ['activePage' => 'user-management', 'titlePage' => 'Usuarios'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Usuarios</h4>
                        <p class="card-category">Usuarios registrados</p>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Rol</th>
                                    <th class="text-right">Acciones</th>
                                </thead>
                                <tbody>
                                    @if ($users->isNotEmpty())
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->telefono }}</td>
                                                <td>{{ $user->rol }}</td>
                                                <td class="td-actions text-right">
    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info" title="Ver detalles">
        <i class="material-icons">visibility</i>
    </a>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning" title="Editar">
        <i class="material-icons">edit</i>
    </a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar este usuario?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" title="Eliminar">
            <i class="material-icons">delete</i>
        </button>
    </form>
</td>

                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="text-center">No hay usuarios registrados.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table> 
                        </div>
                    </div>
                    <div class="card-footer mr-auto">
                        <!-- Aquí se puede colocar algo adicional si es necesario -->
                    </div>
                </div> 
            </div>  
        </div>
    </div>
</div>
@endsection
