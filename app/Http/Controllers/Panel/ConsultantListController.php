<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerUserRequest;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\CustomerUser;
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

    public function create(){
        
        $customers = Customer::all();
        $consultants = User::where('profile_id', 1)->get(); 

        return view('consultants_list.create',compact('customers','consultants'));
    }
    public function store(CustomerUserRequest $request, User $user, Customer $customer)
    {

        $user = CustomerUser::create($request->validated());
        
        return redirect()
        ->route('consultants_list.index')
        ->withSuccess("Se asigno el cliente al usuario con ID {$user->id}");
    } 
    
    //Elimina datos de la tabla customer_user 
    public function removeCustomer($userId, $customerId)
    {
        $user = User::findOrFail($userId);
        $user->customers()->detach($customerId);

        return redirect()->back()->with('success', 'Relación eliminada correctamente.');
    }

}