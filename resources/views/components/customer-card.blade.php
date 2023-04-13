
<div class="card w-300 h-90 mt-2">  
  <div id="carousel{{$customer->id}}" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
     @foreach ($customer->images as $image) 
        <div class="carousel-item {{ $loop->first ? 'active' : ''}}">
          <img class="d-block w-100 card-img-top" src="{{ asset($image->path) }}" alt="Imagen-del-customero" height="160" >
        </div>
      @endforeach
    </div>
    <button class="carousel-control-prev btn btn-dark" type="button" data-bs-target="#carousel{{$customer->id}}" data-bs-slide="prev" >
      <span class="" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
          <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
        </svg></span>
      <span class="visually-hidden">Previous</span>
    </button>
      
    <button class="carousel-control-next btn btn-dark" type="button" data-bs-target="#carousel{{$customer->id}}" data-bs-slide="next" >
      <span class="" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
          <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
        </svg>
      </span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <div class="card-body ">
      <h5 class="text-right">{{ $customer->title }}</h5>
      <p class="card-text">{{ $customer->description }}</p>
      <h4 class="card-title">${{ $customer->price }}</h4>
      <p class="card-text">{{ $customer->stock }} disponibles</p>
<!-- Si estamos en el carrito no muestra el boton de agregar al carrito y si el de quitar-->
      @if(isset($cart))
      <p class="card-text">{{ $customer->pivot->quantity }} en tu carrito <strong>${{$customer->total}}</strong></p>
        <!-- boton de eliminar del carrito-->
        <form class="d-inline" method="post" action="{{ route('customers.carts.destroy' , ['cart' => $cart->id, 'customer' => $customer->id]) }}">
          @csrf
          @method('DELETE')
            <button type="submit" class="btn btn-danger">Quitar del carrito</a>
          </form>
        @else
          <!-- boton de agregar al carrito-->
          <form class="d-inline" method="post" action="{{ route('customers.carts.store' , ['customer' => $customer->id]) }}">
            @csrf
            <button type="submit" class="btn btn-success">Agregar al carrito</a>
            </form>
        @endif
      
    </div>
  </div>



