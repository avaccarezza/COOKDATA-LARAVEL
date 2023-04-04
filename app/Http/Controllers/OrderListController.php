<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }
    public function index(Request $request){
        return view('orders_list.index')->with([
            
            $user = auth()->user(),
            'orders' => Order::get()->where('customer_id', $user->id), 
            'total' => Payment::all(),
    ]);
    }
}
