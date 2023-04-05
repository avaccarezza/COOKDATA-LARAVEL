<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerAreaController extends Controller
{
    public function index()
    {
        return view('customers_area.index')  ;
    }
}
