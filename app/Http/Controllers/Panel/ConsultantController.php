<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
class ConsultantController extends Controller
{
    public function index()
    {
      

        $consultants = User::where('consultant', 1)->get(); 
        return view('consultants.index')->with([
            'users' => $consultants,
        ]);
    }
}