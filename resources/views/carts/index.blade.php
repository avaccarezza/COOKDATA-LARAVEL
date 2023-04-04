@extends('layouts.app')
@section('content')
       <h1>Tu carrito</h1>
       @if($cart->customers->isEmpty() || !isset($cart))
       <div class="alert alert-warning">
              No hay clientes en tu carrito!
       </div>
       @else
       
       <h4 class="text-center"> <strong> Total: </strong> ${{ $cart->total }}</h4>
       <a class="btn btn-success mb-3" href="{{ route('orders.create') }}">Continuar compra</a>
       <div class="row align-items-start">
       @foreach($cart->customers as $customer)
              <div class="col-md-3">           
                     @include('components.customer-card')
              </div>
       @endforeach
       </div>
       @endempty
@endsection