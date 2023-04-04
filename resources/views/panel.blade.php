@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel de administración') }}</div>

                <div class="card-body">
                   
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{route('users.index')}}">Administrar clientes</a>
                        </div>
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{route('customers.index')}}">Administrar puntos</a>
                        </div>
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{route('customers.index')}}">Administrar locales</a>
                        </div>
                        
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{route('profile.index')}}">Administrar perfil</a>
                        </div>
                      </div>
                      
                      
                      
                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection



