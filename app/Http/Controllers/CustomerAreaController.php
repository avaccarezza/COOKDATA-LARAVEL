<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerAreaController extends Controller
{
    public function index(User $user)
    {
       
        return view('customers_area.index')->with([
            'user' => $user,
        ]);
    }
    public function show(User $user)
    {
        
        return view('customers_area.show')->with([
            'user' => $user,
        ]);
    }  
}
