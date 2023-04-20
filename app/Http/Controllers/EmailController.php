<?php

namespace App\Http\Controllers;

use App\Mail\HablemosMailable;
use App\Models\Partner;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
  public function index()
  {
    return view('hablemos.index');
  }
  public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required',
      ]);
      $partner =  new Partner($request->all());
      $partner->save();
      $correo = new HablemosMailable($request->all());
      Mail::to('agustin@cookdata.io')->send($correo);

        return  redirect()->route('partners.index')->with('info','Mensaje Enviado');
    }
    public function create()
    {
        return view('email');
    }

  }