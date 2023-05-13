<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {    
        $customers = Customer::all(); 
        return view('customers.index')->with([
            'customers' => $customers,
        ]);
    }
    public function edit(Customer $customer)
    {
       
        $customers = Customer::all();
        return view('customers.edit', compact('customers'))->with([

           'customer' => $customer, 
           
        ]);
    }   
    public function update( CustomerRequest $request, Customer $customer){
       
        $customer->update($request->validated());
      
       return redirect()
                ->route('customers.index')
                ->withSuccess("La aplicacion con ID {$customer->id} fue editada");
   
    }
    public function create(){
        $customers = Customer::all();
        return view('customers.create',compact('customers'));
    }
    public function store(CustomerRequest $request)
    {
        $customer = Customer::create($request->validated());
        return redirect()
        ->route('customers.index')
        ->withSuccess("El producto con ID {$customer->id} fue editado");
    }  
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()
                ->route('customers.index')
                ->withSuccess("El usuario con ID {$customer->id} fue eliminado");
    }  
}
