<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\Consultant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ConsultantController extends Controller
{
    public function index()
    {

       
        $consultants = Consultant::where('user_id', Auth::user()->id)->get();
        
               

        return view('consultants.index')->with([
            'consultants' => $consultants,
        ]);
    }
}