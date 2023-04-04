@extends('layouts.app')

@section('content')
    <h1>Detalle del pago</h1>
    <h4 class="text-center"> <strong> Total: </strong> ${{ $order->total }}</h4>
    <div class="text-center mb-3">
        <form class="d-inline" method="post" action="{{ route('orders.payments.store', ['order' => $order->id]) }}">
    @csrf
        <button type="submit" class="btn btn-success">Pagar</a>
        </form>
    </div> 
@endsection