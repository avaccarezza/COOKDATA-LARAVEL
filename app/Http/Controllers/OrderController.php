<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    public $cartService;
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
      //  $this->middleware('auth');
    }
 
    public function create()
    {
        $cart = $this->cartService->getFromCookie();
        if(!isset($cart) ||$cart->customer->isEmpty()){
            return redirect()
            ->back()
            ->withErrors("Tu carrito está vacío!");
        }
        return view('orders.create')->with([
            'cart' => $cart,
        ]);
    }
    public function store(Request $request){
        //transaction hace que no inserte datos en Order
        return DB::transaction(function() use($request)
        { 
            $user = $request->user();
            $order = $user->orders()->create([
                'status' => 'pending',
            ]);
            
            $cart = $this->cartService->getFromCookie();
            $cartCostumersWithQuantity = $cart->customers->mapWithKeys(function($customer){
                $element[$customer->id] = ['quantity' => $customer->pivot->quantity];
                $quantity = $customer->pivot->quantity;

        //Lanza mensaje de error si se quiere agregar un producto al carrito que no tiene suficiente stock 
                if($customer->stock < $quantity )
                {
                    throw ValidationException::withMessages([
                        'customer' => "No hay stock de {$customer->title}",
                    ]);
                }
                $customer->decrement('stock', $quantity);
                return $element;
            });
            
            $order->customers()->attach($cartCostumersWithQuantity->toArray());
            
            return redirect()->route('orders.payments.create' , ['order' => $order]);
        });
    }
}
