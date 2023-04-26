@extends('layouts.app')

@section('content')
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5">
    <ul class="list-unstyled components mb-5">
      <li class="active">
        <a href="{{ route('users.index') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Listado usuarios</a>   
        <ul class="collapse list-unstyled" id="homeSubmenu">
        <li>
            <a href="#">Home 1</a>
        </li>
        <li>
            <a href="#">Home 2</a>
        </li>
        <li>
            <a href="#">Home 3</a>
        </li>
        </ul>
      </li>
      <li>
          <a href="{{ route('consultants_list.index') }}">Listado consultores</a>
      </li>
      <li>
      <a href="{{ route('customers_area.index') }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Listado de clientes</a>
      <ul class="collapse list-unstyled" id="pageSubmenu">
        <li>
            <a href="#">Page 1</a>
        </li>
        <li>
            <a href="#">Page 2</a>
        </li>
        <li>
            <a href="#">Page 3</a>
        </li>
      </ul>
      </li>
      <li>
        <a href="{{ route('apps.index') }}">Listado de apps</a>
      </li>
      <li>
      <a href="https://short.io/">Short.io</a>
      </li>
    </ul>

    

  </div>
</nav>


@endsection



