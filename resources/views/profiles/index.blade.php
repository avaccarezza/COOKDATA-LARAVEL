@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-5 mb-5">
<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset(Auth::user()->profile_image)}}" alt="{{ Auth::user()->name }}" class="rounded-circle mt-2" width="160" height="160">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Nombre: {{ucfirst($user->name)}}</h5>
          <p class="card-text">Correo: {{ucfirst($user->email)}}</p>
          <p class="card-text">Perfil: {{ucfirst($user->profile->profile)}} </p>
          <div class="navbar navbar-expand-md navbar-light ">
          <ul class="navbar-nav auto">      
            
            <li class="p-3">
                <a href="{{ route('profile.edit') }}">
                <button type="submit" class="btn btn-warning">
                    {{ __('Editar perfil') }}
                </button>
                </a>
            </li>  

            
            </ul>
        </div>
        
        
      </div>
    </div>
  </div>
</div>

@endsection