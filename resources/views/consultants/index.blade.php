@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Area de consultores') }}</div>
                <div class="card-body">
                    <div class="d-flex justify-content-row ">
                        @foreach ( $consultants as $consultant )
                        <div class="ms-3"> 
                            <a type="button" class="btn btn-warning " href="{{ route('customers_area.index') }}">{{$consultant->customer->customer}}</a>
                        </div>   
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
