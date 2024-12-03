@extends('layouts.main', ['activePage' => 'patient-management', 'titlePage' => 'Pacientes'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Pacientes</h4>
                            <p class="card-category">Pacientes registrados</p>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('pacientes.create') }}" class="btn btn-sm btn-facebook">Añadir paciente</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Estado</th>
                                        <th class="text-right">Acciones</th>
                                    </thead>
                                    <tbody>
                                        @if ($pacientes->isNotEmpty())
                                            @foreach ($pacientes as $paciente)
                                                <tr>
                                                    <td>{{ $paciente->id }}</td>
                                                    <td>{{ $paciente->nombre }}</td>
                                                    <td>{{ $paciente->apellido }}</td>
                                                    <td>{{ $paciente->email }}</td>
                                                    <td>{{ $paciente->telefono }}</td>
                                                    <td>{{ ucfirst($paciente->estado) }}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </a>
                                                        <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-warning">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                        <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar este paciente?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7"  class="text-center">No hay pacientes registrados.</td>
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
