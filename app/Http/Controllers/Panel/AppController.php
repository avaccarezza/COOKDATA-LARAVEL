<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppRequest;
use App\Models\App;
use App\Models\Customer;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $url= $_SERVER["REQUEST_URI"];

        if (strpos($url, 'search')): 
            $apps = App::search(request('search'))->get(); 
        else:
            $apps = App::sortable()->get(); 
        endif;

        return view('apps.index',compact('apps'));
    }
    public function edit(App $app)
    {
        $apps = App::distinct()->get(['type_of_app']);
    
        return view('apps.edit', compact('apps'))->with([
            'app' => $app,
            
        ]);
    }   
    
    public function update( AppRequest $request, App $app){
       
        $app->update($request->validated());
      
       return redirect()
                ->route('apps.index')
                ->withSuccess("La aplicacion {$app->app} del cliente {$app->customer->customer} fue editada");
   
    }
    public function create(){
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
    }    

    public function destroy(App $app)
    {
        $app->delete();
        return redirect()
                ->route('apps.index')
                ->withSuccess("El usuario con ID {$app->id} fue eliminado");
    }
}
