@extends('layouts.app')
@section('content')
       <h1>Bienvenido</h1>
       @empty($customers)
       <div class="alert alert-danger">
              Todavia no hay productos!
       </div>
       @else
       <div class="row">
       @foreach($customers as $customer)
              <div class="col-md-2">           
                     @include('components.customer-card')
              </div>
       @endforeach
       </div>
       @endempty
@endsection