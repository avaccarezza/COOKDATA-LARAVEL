<?php

namespace App\Http\Controllers;
use App\Models\Customer;

class MainController extends Controller
{
    public function __construct()
{
   // $this->middleware('auth');
}
    public function index()
    {
        
        $customers = Customer::all();
        return view('welcome')->with([
            'customers' => $customers,
        ]);
    }
}