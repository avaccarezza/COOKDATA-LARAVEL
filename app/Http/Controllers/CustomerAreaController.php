<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\CustomerUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomerAreaController extends Controller
{
    public function index()
    {
        
        //$auth = Auth::user()->get();
        //$user = User::find($auth);
        $customer = CustomerUser::all();
       

        return view('customers_area.index', compact('customer'));
    }
    public function show($customer)
    {
        $customer = DB::table('customers')->where('customer', $customer)->first();

        
        return view('customers_area.show')->with([
            'customer' => $customer,
        ]);
    }  

  

   
}
