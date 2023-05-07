@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="card p-5" style="width: 35rem;">
        <img src="{{ asset($user->profile_image) }}" alt="{{ $user->name }}" class="rounded-circle mt-2" width="160" height="160">
        <div class="card-body">
        <h5 class="card-title">{{$user->name}}</h5>
        <p class="card-text">{{$user->email}}</p>
        <p class="card-text">{{$user->customer->customer}}</p>
        <p class="card-text">{{$user->profile->profile}}</p>

        
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
 @endsection
