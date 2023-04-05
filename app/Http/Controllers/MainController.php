<?php

namespace App\Http\Controllers;
use App\Models\User;

class MainController extends Controller
{
    public function __construct()
{
   // $this->middleware('auth');
}
    public function index()
    {
        
        $users = User::all();
        return view('welcome')->with([
            'users' => $users,
        ]);
    }
}