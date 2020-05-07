<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
        <a class="nav-link  @if (Request::is('/') or Request::is('home') )  active text-white bg-dark @endif" href="{{ route('home')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('tratamientos'))  active text-white bg-dark @endif" href="{{ route('tratamientos')}}">Historial de Tratamientos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if (Request::is('sintomas'))  active text-white bg-dark @endif" href="{{ route('sintomas')}}">Historial de Controles (Activo)</a>
          </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('sintomas/create'))  active text-white bg-dark @endif" href="{{ route('sintomasCreate')}}">Nuevo Control de Sintomas</a>
        </li>
      </ul>
</div>
