<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAreaController extends Controller
{
    public function index()
    {
        
        //$auth = Auth::user()->get();
        //$user = User::find($auth);
        $customer = Customer::all();
        $apps = collect();

        return view('customers_area.show', compact('customer'),compact('apps'));
    }
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers_area.show', ['customer' => $customer]);
    }  

  

   
}
