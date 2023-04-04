<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\PanelUser;
use App\Models\User;
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
    public function show(User $user)
    {
        return view('users.show')->with([
            'user' => $user,
        ]);
    }  
   
    public function edit(User $user)
    {
        return view('users.edit')->with([

           'user' => $user,
        ]);
    }   
    
    public function update(UserRequest $request , User $user){
       
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
