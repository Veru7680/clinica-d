@extends('layouts.main', ['activePage' => 'profile', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                    @csrf 
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Usuario</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario">
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo">
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
                                </div>
                            </div>
                            <div class="row">
                                <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="rol" name="rol">
                                        <option value="empleado">Empleado</option>
                                        <option value="doctor">Doctor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono" value="{{ old('telefono') }}">
                                </div>
                            </div>
                        </div>
                        <!-- Footer -->
                        <div class="card-footer text-center ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                        <!-- End footer -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

