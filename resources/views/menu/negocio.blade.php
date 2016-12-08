<li><a href="{{ url('/negocio') }}">Dashboard</a></li>
<li><a href="{{ url('/negocio/sucursales') }}">Sucursales</a></li>
<li><a href="{{ url('/negocio') }}">Insumos</a></li>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    Gestión <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ url('/negocio/insumoTipos') }}">Tipos de Insumo</a></li>
    <li><a href="{{ url('/negocio') }}">Usuarios</a></li>
    <li><a href="{{ url('/negocio') }}">Asignar Responsables</a></li>
  </ul>
</li>
