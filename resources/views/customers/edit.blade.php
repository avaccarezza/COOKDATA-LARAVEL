@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ url()->previous()}}" class="btn btn-warning btn-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg>
            </a>
            <div class="card mt-2">
                
                <div class="card-header">{{ __('Editar cliente') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
                    @csrf
                    @method('put')

                    
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Clientes') }}</label>
                        <div class="col-md-6">
                            <input  type="text" class="form-control" name="customer"  value="{{$customer->customer}}" required>
                        </div>
                    </div>

                    {{--<div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Tipo de aplicacion') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="customer" required>
                                <option value="" selected>Seleccionar</option>
                               @foreach($customers as $customer)
                               <option value="{{$customer->customer}}">{{$customer->customer}}</option>                             
                                @endforeach
                            </select>
                        </div>
                    </div>--}}

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-lg">
                                    {{ __('Editar cliente') }}
                                </button>     
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
