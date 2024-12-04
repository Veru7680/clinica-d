@extends('layouts.main', ['activePage' => 'patient-management', 'titlePage' => 'Detalles del Paciente'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Detalles del Paciente</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Nombre:</strong> {{ $paciente->nombre }}</p>
                                <p><strong>Apellido:</strong> {{ $paciente->apellido }}</p>
                                <p><strong>Email:</strong> {{ $paciente->email }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Teléfono:</strong> {{ $paciente->telefono }}</p>
                                <p><strong>Dirección:</strong> {{ $paciente->direccion }}</p>
                                <p><strong>Estado:</strong> {{ ucfirst($paciente->estado) }}</p>
                            </div>
                        </div>
                        <a href="{{ route('pacientes.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
