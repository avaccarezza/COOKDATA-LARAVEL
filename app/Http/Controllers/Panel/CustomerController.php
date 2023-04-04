<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Scopes\AvailableScope;
use Illuminate\Http\Request;
use App\Models\PanelCustomer;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    public function index()
    {
        return view('customers.index')->with([
            'customers' => PanelCustomer::all(),
           // 'customers' => PanelCustomer::without('images')->get(),
        ]);
    }

    public function create(){
        return view('customers.create');
    }
    public function store(CustomerRequest $request)
    {
        $customer = PanelCustomer::create($request->validated());
        return $customer;
    }    
    public function show(PanelCustomer $customer)
    {
        return view('customers.show')->with([
            'customer' => $customer,
        ]);
    }  
    public function edit(PanelCustomer $customer)
    {
        return view('customers.edit')->with([

           'customer' => $customer,
        ]);

    }   
    public function update(CustomerRequest $request , PanelCustomer $customer){
       
        $customer->update($request->validated());
 
       return redirect()
                ->route('customers.index')
                ->withSuccess("El Customer con ID {$customer->id} fue editado");
   
    }
    public function destroy(PanelCustomer $customer)
    {
        $customer->delete();
        return redirect()
                ->route('customers.index')
                ->withSuccess("El Customero con ID {$customer->id} fue eliminado");
    }
}
