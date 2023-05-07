<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
class ConsultantListController extends Controller
{
    public function index()
    {
      

        $consultants = User::where('profile_id', 1)->get(); 
        return view('consultants_list.index')->with([
            'users' => $consultants,
        ]);
    }
}