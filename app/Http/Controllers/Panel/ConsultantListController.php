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
/*   public function create(){
        $apps = App::distinct()->get(['type_of_app']);
        $customers = Customer::all();
        return view('apps.create',compact('apps'),compact('customers'));
    }
    public function store(AppRequest $request)
    {
        $app = App::create($request->validated());
        return redirect()
        ->route('apps.index')
        ->withSuccess("El producto con ID {$app->id} fue editado");
    }   */
    public function create(){
        
        $customers = Customer::all();
        $consultants = User::where('profile_id', 1)->get(); 

        return view('consultants_list.create',compact('customers','consultants'));
    }
    public function store(CustomerUserRequest $request, User $user, Customer $customer)
    {
        $customer = CustomerUser::create($request->validated());
        
        return redirect()
        ->route('consultants_list.index')
        ->withSuccess("Se asigno el cliente con ID {$customer->id} fue editado");
    } 

}