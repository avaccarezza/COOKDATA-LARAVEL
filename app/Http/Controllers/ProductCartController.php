<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Customer;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\ValidationException;


class ProductCartController extends Controller
{
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request, Customer $customer)
    {
        $cart = $this->cartService->getFromCookieOrCreate();
        
        $quantity = $cart->customers()
                    ->find($customer->id)
                    ->pivot
                    ->quantity ?? 0;

        //Lanza mensaje de error si se quiere agregar un producto al carrito que no tiene suficiente stock 
                    if($customer->stock <= $quantity )
                    {
                        throw ValidationException::withMessages([
                            'customer' => "No hay stock de {$customer->title}",
                        ]);
                    }

        // funcion Sync agrega al carrito eliminando los productos agregados anteriormente
        // funcion syncWithoutDetaching agrega productos al carrito y no elimina los agregados anteriormente 
        $cart->products()->syncWithoutDetaching([
            $customer->id => ['quantity' => $quantity + 1],
    ]);

        $cookie = $this->cartService->makeCookie($cart);
        $cookie = Cookie::make('cart', $cart->id, 7 * 24 * 60);
        return redirect()->back()->cookie($cookie);
    
    }

    
    public function destroy(Customer $customer, Cart $cart)
    {
        $cart->customers()->detach($customer->id);

       $cookie = $this->cartService->makeCookie($cart);

        return redirect()->back()->cookie($cookie);
    }

 
}
