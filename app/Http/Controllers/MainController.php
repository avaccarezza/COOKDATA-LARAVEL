<?php

namespace App\Http\Controllers;
use App\Models\App;
use App\Models\User;

class MainController extends Controller
{
    public function __construct()
{
   // $this->middleware('auth');
}
    public function index()
    {
    
        return view('welcome')->with([
            'users' => User::all(),   
        ]);
    }
}