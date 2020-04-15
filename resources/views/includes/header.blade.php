<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
        <a class="nav-link  @if (Request::is('/') or Request::is('home') )  active @endif" href="{{ route('home')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('sintomas'))  active @endif" href="{{ route('sintomas')}}">Control de Sintomas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Request::is('sintomasCreate'))  active @endif" href="{{ route('sintomasCreate')}}">Nuevo Control de Sintomas</a>
        </li>
      </ul>
</div>