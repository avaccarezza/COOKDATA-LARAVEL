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
                            <a type="button" class="btn btn-dark " href="{{ route('users.index') }}">Listado usuarios</a>
                        </div>
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{ route('consultants.index') }}">Listado consultores</a>
                        </div>
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{ route('customers_area.index') }}">Area de clientes</a>
                        </div>    
                        <div class="">
                            <a type="button" class="btn btn-dark " href="{{ route('profile.index') }}">Listado perfiles</a>
                        </div>
                        <div class="">
                            <a type="button" class="btn btn-dark " target="blank" href="https://short.io/">Short.io</a>
                        </div>
                      </div>
                      
                      
                      
                        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection



