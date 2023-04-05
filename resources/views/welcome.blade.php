@extends('layouts.app')
@section('content')
       <h1>Insertar landing page</h1>
       @empty($users)
       <div class="alert alert-danger">
              Todavia no hay productos!
       </div>
       @else
       <div class="row">
              @foreach($users as $user)
              <div class="col-md-2">           
                     {{--@include('users.index')--}}
              </div>
              @endforeach
              
       </div>
       @endempty
@endsection