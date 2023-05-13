@extends('layouts.app')

@section('content')
<nav
id="sidebarMenu"
class="collapse d-lg-block sidebar collapse bg-white "
>
<div>
<div class="list-group list-group-flush mx-3 mt-4">

 <a
    href="{{ route('users.index') }}"
    class="list-group-item list-group-item-action py-2 ripple {{ (request()->route()->getName() == 'users.index') ? 'active' : '' }}"
    ><i class="fas fa-chart-line fa-fw me-3"></i
   ><span>Listado de usuarios</span></a
   >
 <a
    href="{{ route('consultants_list.index') }}"
    class="list-group-item list-group-item-action py-2 ripple {{ (request()->route()->getName() == 'consultants_list.index') ? 'active' : '' }}"
    >
   <i class="fas fa-chart-pie fa-fw me-3"></i><span>Listado de consultores</span>
 </a>
 <a
 href="{{ route('customers.index') }}"
 class="list-group-item list-group-item-action py-2 ripple"
 >
<i class="fas fa-chart-pie fa-fw me-3"></i><span>Listado de clientes</span>
</a>
{{--<a
 href="#"
 class="list-group-item list-group-item-action py-2 ripple"
 >
<i class="fas fa-chart-pie fa-fw me-3"></i><span>Listado de perfiles</span>
</a>--}}
<a
href="{{ route('apps.index') }}"
class="list-group-item list-group-item-action py-2 ripple {{ (request()->route()->getName() == 'apps.index') ? 'active' : '' }}"
>
<i class="fas fa-chart-pie fa-fw me-3"></i><span>Listado de aplicaciones</span>
</a>
 <a
    href="{{url('https://short.io/')}}" target="blank"
    class="list-group-item list-group-item-action py-2 ripple"
    >
   <i class="fas fa-chart-pie fa-fw me-3"></i><span>Short.io</span>
 </a>
 
 
</div>
</div>
</nav>

<!--Main layout-->

  @yield('content-panel')

<!--Main layout-->


@endsection



