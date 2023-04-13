<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\Customer;
use App\Models\Profile;
use App\Models\User;
use App\Models\App;
class UserController extends Controller
{
    public function index()
    {   
        
        $users = User::search(request('search'))->get(); 
        return view( 'users.index', compact('users'));
    }
    public function create(){
        return view('users.create');
    }
    public function store(ProfileRequest $request)
    {
        $user = User::create($request->validated());
        return $user;
    }  
    public function show(User $user)
    {
        return view('users.show')->with([
            'user' => $user,
            
        ]);
    }  
  
      
    public function edit(User $user, Profile $profile, Customer $customer)
    {
        $customers = Customer::select('id','customer')->get();
        $profiles = Profile::select('id','profile')->get();
        $users = User::all();
        return view('users.edit',compact('customers'), compact('profiles'), compact('users'))->with([

           'user' => $user, 
           
        ]);
    }   
    
    public function update(UserRequest $request , User $user,Customer $customer){
       
        $user->update($request->validated());
      
       return redirect()
                ->route('users.index')
                ->withSuccess("El usuario con ID {$user->id} fue editado");
   
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()
                ->route('users.index')
                ->withSuccess("El usuario con ID {$user->id} fue eliminado");
    }

}
