@extends('layouts.main', ['activePage' => 'patient-management', 'titlePage' => 'Editar Paciente'])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pacientes.update', $paciente->id) }}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Editar Paciente</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $paciente->apellido }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $paciente->email }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $paciente->telefono }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="direccion" class="col-sm-2 col-form-label">Dirección</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $paciente->direccion }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="estado" name="estado">
                                        <option value="activo" {{ $paciente->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                                        <option value="inactivo" {{ $paciente->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
