@extends('layouts.app')

@section('content')

    <h1>Lista de usuarios</h1>
</head>
<body>

<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="btn btn-warning mb-3 right" href="{{ route('users.create')}}">Añadir</a>
    <form class="form-inline" method="get">
        <div class="input-group">
            <div class="form-outline">
              <input type="text" name="search" value="{{ request()->get('search') }}" id="form1" class="form-control" />
            </div>
            <button type="submit" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/> </svg>
            </button>
          </div>
    </form>
  </nav>
@empty ($users)
    <div class="alert alert-warning">
        La lista de clientes está vacía.
    </div>
@else
    <div class="table-responsive-md">
        <table class="table table-responsive  align-middle" id="users">
            <thead class="table bg-warning">
                <tr>
                    <!--<th>ID</th>-->
                     <!--<td>cliente</td>-->
                    <th>@sortablelink('name','Nombre')</th>
                    <th>@sortablelink('email')</th>
                    <th>@sortablelink('customer_id','Clientes')</th>
                    <th>@sortablelink('profile_id','Perfil')</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>    
                            
                @foreach ($users as $key => $user)
                <tr>
                    <!--<td>cliente</td>-->
                    <td class="table-warning">{{$user->name}}</td>
                    <td class="table-warning">{{$user->email}}</td>
                    <td class="table-warning">{{$user->customer->customer}}</td>
                    <td class="table-warning">{{$user->profile->profile}}</td>
                    <td class="table-warning">
                        
                        <!--<a class="btn btn-warning"s href="{{ route('users.show', ['user' => $user->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                          </svg></a>-->
                        
                        <a class="btn btn-warning" href="{{ route('users.edit', ['user' => $user->id]) }}" title="Editar usuario">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg></a>
                          
                        <form method="POST" class="d-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}">
                            <button type="submit" class="btn btn-warning" title="Eliminar usuario">
                            @csrf
                            @method('DELETE')
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                              </svg></button>
                        </form>
                        
                        <a class="btn btn-warning" href="{{ route('customers_area.index') }}" title="Ir a area de clientes">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                              </svg>
                        </a>
                    {{-- <a class="btn btn-link" href="{{ route('users.show', ['user' => $user->title]) }}">Show</a> --}}    
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      {{--{!! $users->appends(\Request::except('page'))->render() !!}--}}  
     
    </div>
@endempty

     
@endsection

