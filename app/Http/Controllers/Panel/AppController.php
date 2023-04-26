<?php

namespace App\Http\Controllers\Panel;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppRequest;
use App\Models\App;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $apps = App::all(); 
        return view('apps.index',compact('apps'));
    }
    public function edit(App $app)
    {
       
        $apps = App::all();
        return view('apps.edit', compact('apps'))->with([

           'app' => $app, 
           
        ]);
    }   
    
    public function update( AppRequest $request, App $app){
       
        $app->update($request->validated());
      
       return redirect()
                ->route('apps.index')
                ->withSuccess("La aplicacion con ID {$app->id} fue editada");
   
    }
}
