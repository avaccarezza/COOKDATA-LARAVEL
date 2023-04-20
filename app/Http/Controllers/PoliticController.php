<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticController extends Controller
{
    public function index()
    {
        return view('politics.index');
    }
}
