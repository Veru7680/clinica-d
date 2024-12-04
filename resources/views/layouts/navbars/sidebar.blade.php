<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo" style="display: flex; align-items: center;">
    <img src="{{ asset('img/dental_1.png') }}" alt="Logo" style="height: 40px; margin-right: 10px;">
    <a href="{{ route('home') }}" class="simple-text logo-normal" style="text-decoration: none; color: inherit;">
        {{ __('CLINICA DENTAL') }}
    </a>
</div>

  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <!-- Laravel Usuarios -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <p>{{ __('Usuarios') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
          <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('users.create') }}" style="display: flex; align-items: center;">
                  <img src="{{ asset('img/paciente.png') }}" alt="Logo" style="height: 20px; margin-right: 10px;">
                  <span class="sidebar-normal">{{ __('Registro de Usuario') }} </span>
              </a>
          </li>


          <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link d-flex align-items-center" href="{{ route('users.index') }}">
                  <img src="{{ asset('img/tabla.png') }}" alt="Logo" style="height: 20px; margin-right: 10px;">
                  <div>
                      <span class="sidebar-normal"> {{ __('Tabla de Usuarios') }} </span>
                  </div>
              </a>
          </li>

          </ul>
        </div>
      </li>

      <!-- Laravel Paciente -->
      <li class="nav-item {{ ($activePage == 'patient-profile' || $activePage == 'patient-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelPatient" aria-expanded="true">
          <p>{{ __('Paciente') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelPatient">
          <ul class="nav">
          <li class="nav-item{{ $activePage == 'patient-profile' ? ' active' : '' }}">
              <a class="nav-link d-flex align-items-center" href="{{ route('pacientes.create') }}">
                  <img src="{{ asset('img/paciente2.png') }}" alt="Logo" style="height: 20px; margin-right: 10px;">
                  <div>
                      <span class="sidebar-normal">{{ __('Registro de Paciente') }} </span>
                  </div>
              </a>
          </li>


          <li class="nav-item{{ $activePage == 'patient-management' ? ' active' : '' }}">
    <a class="nav-link d-flex align-items-center" href="{{ route('pacientes.index') }}">
        <img src="{{ asset('img/tabla1.png') }}" alt="Logo" style="height: 20px; margin-right: 10px;">
        <span class="sidebar-normal"> {{ __('Tabla de Pacientes') }} </span>
    </a>
</li>

          </ul>
        </div>
      </li>

      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>Usuarios</p>
        </a>
      </li>
      @endcan
      @can('post_index')
      <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Post') }}</p>
        </a>
      </li>
      @endcan
      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permissions') }}</p>
        </a>
      </li>
      @endcan
      @can('role_index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
      @endcan
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
