@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body  pb-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <!--consultant
                        <div class="row mb-3 align-items-center">
                            <label for="consultant" class="col-md-4 col-form-label text-md-end">{{ __('Es consultor?') }}</label>
                                <div class="col-md-6 ">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="consultant" id="consultant"   value="{{old('consultant') ? 1 : 0}}" unchecked>  
                                    </div>
                                </div>
                        </div>-->
                           
                        
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6" x-data="{ show: false }">
                                <div class="input-group">
                                <input id="password" :type="show ? 'text' : 'password' " class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <div class="input-group-append">
                                   
                                    <button type="button" @click="show = !show" class="input-group-text" id="basic-addon2">
                                        <span x-show="show">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                                        </span>
                                        <span x-show="!show">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                        </span>
                                    </button>
                                </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6" x-data="{ show: false }">
                                <div class="input-group">
                                <input id="password-confirm":type="show ? 'text' : 'password' " class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div class="input-group-append">
                                   
                                    <button type="button" @click="show = !show" class="input-group-text" id="basic-addon2">
                                        <span x-show="show">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                                        </span>
                                        <span x-show="!show">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                                        </span>
                                    </button>
                                </div>
                                </div>
                            </div>
                        </div>
                         <!--input customer-->
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Cliente') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="customer_id" required > 
                                @foreach ($customers as $customer)
                                 <option value="{{ $customer->id }}">{{ $customer->customer }}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                       <!--input profile-->
                    <div class="row mb-3">
                        <label class="col-md-4 col-form-label text-md-end">{{ __('Perfil') }}</label>
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="profile_id" required> 
                                @foreach ($profiles as $profile)
                                 <option value="{{ $profile->id }}">{{ $profile->profile }}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                    {{--@foreach($apps as $app)
                    @if($app->type_of_app == 'Informes')
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Gestion" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $app->app }}
                        </label>
                    </div>
                    @endif
                    <label class="col-md-3 col-form-label text-md-center">{{ __('Informes') }}</label>
                     @endforeach--}}
                    <!-- checkbox apps-->
                    {{--<div class="row d-flex justify-content-center">
                        <div class="col-md-3">
                            <label class="d-flex justify-content-center">{{ __('Soporte') }}</label>
                            @foreach($apps as $app)
                            @if($app->type_of_app == "Soporte")
                            <div class="form-check ">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label d-flex justify-content-center" for="flexCheckDefault">{{ $app->app }}</label>
                            </div>
                           @endif
                           @endforeach
                        </div>
                        <div class="col-md-3">
                            <label class="d-flex justify-content-center">{{ __('Informes') }}</label>
                               @foreach($apps as $app)
                               @if($app->type_of_app == "Informes")
                               <div class="form-check ">
                                   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                   <label class="form-check-label d-flex justify-content-center" for="flexCheckDefault">{{$app->app}}</label>
                               </div>
                               @endif
                               @endforeach
                               </div>
                               <div class="col-md-3">
                                <label class="d-flex justify-content-center">{{ __('Aplicaciones') }}</label>
                                   @foreach($apps as $app)
                                   @if($app->type_of_app == "Aplicaciones")
                                   <div class="form-check ">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                       <label class="form-check-label d-flex justify-content-center" for="flexCheckDefault">{{$app->app}}</label>
                                   </div>
                                   @endif
                                   @endforeach
                            </div>
                       </div>--}}
   

                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Registrarse') }}
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
