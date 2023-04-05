@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset(Auth::user()->profile_image)}}" alt="{{ Auth::user()->name }}" class="rounded-circle mt-2" width="160" height="160">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Nombre: {{ucfirst($user->name)}}</h5>
          <p class="card-text">Correo: {{ucfirst($user->email)}}</p>
          <p class="card-text">Telefono: </p>
          <div class="navbar navbar-expand-md navbar-light ">
          <ul class="navbar-nav auto">      
            
            <li class="p-3">
                <a href="{{ route('profile.edit') }}">
                <button type="submit" class="btn btn-dark">
                    {{ __('Editar perfil') }}
                </button>
                </a>
            </li>  

            <li class="p-3">
                <a href="{{route('orders_list.index')}}">
                <button type="submit" class="btn btn-dark">
                    {{ __('Ver pedidos') }}
                </button>
                </li>
                </a>
            </ul>
        </div>
        
        
      </div>
    </div>
  </div>
</div>

@endsection