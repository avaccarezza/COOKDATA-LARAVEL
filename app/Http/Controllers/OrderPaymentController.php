<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderPaymentController extends Controller
{

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function create(Order $order)
    {
        return view('payments.create')->with([
            'order' => $order,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
        return DB::transaction(function() use($order)
        {

            $this->cartService->getFromCookie()->customer()->detach();
            $order->payment()->create([
                'amount' => $order->total,
                'payed_at' => now(),
            ]);
            
            $order->status ='payed';
            $order->save();
            return redirect()
            ->route('main')
            ->withSuccess("Gracias, tu pago de \${$order->total} se realizó satisfactoriamente.");
        });
    }

    
}
