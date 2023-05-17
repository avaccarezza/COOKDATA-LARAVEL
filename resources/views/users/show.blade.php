@extends('panel')

@section('content-panel')
<div class="row justify-content-center">
    <div class="card p-5" style="width: 35rem;">
        <img src="{{ asset($user->profile_image) }}" alt="{{ $user->name }}" class="rounded-circle mt-2" width="160" height="160">
        <div class="card-body">
        <h5 class="card-title">{{$user->name}}</h5>
        <p class="card-text">{{$user->email}}</p>
        <p class="card-text">Empresa:{{$user->customer->customer}}</p>
        <p class="card-text">Perfil: {{$user->profile->profile}}</p>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">clientes asignados</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($user->customers as $customer)
                <tr>   
                <td>{{ $customer->customer }}</td>              
                    <td>
                        <form action="{{ route('users.customers.remove', ['userId' => $user->id, 'customerId' => $customer->id]) }}" method="POST">
                            <button type="submit" class="btn btn-warning btn-sm" title="Eliminar cliente asignado">
                            @csrf
                            @method('DELETE')
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                              </svg></button>
                        </form>
                       
                    </td>
                </tr>
                @endforeach
                
                   
                
            </tbody>
        </table>


       
      
        
        </div>
    </div>
</div>
 @endsection
