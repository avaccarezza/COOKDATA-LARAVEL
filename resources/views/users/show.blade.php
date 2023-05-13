@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="card p-5" style="width: 35rem;">
        <img src="{{ asset($user->profile_image) }}" alt="{{ $user->name }}" class="rounded-circle mt-2" width="160" height="160">
        <div class="card-body">
        <h5 class="card-title">{{$user->name}}</h5>
        <p class="card-text">{{$user->email}}</p>
        <p class="card-text">Empresa:{{$user->customer->customer}}</p>
        <p class="card-text">Perfil: {{$user->profile->profile}}</p>
        <p>clientes asignados:</p>
        @foreach ($user->customers as $customer)
        <p class="card-text">{{ $customer->customer }}</p>              
        @endforeach
        
        </div>
    </div>
</div>
 @endsection
