<?php

namespace App\Http\Controllers;
use App\Models\App;
use App\Models\User;

class MainController extends Controller
{
    public function __construct()
{
   // $this->middleware('auth');
}
    public function index()
    {
        $arrays =  $this->arrays();
    
        return view('welcome', $arrays)->with([
            'users' => User::all(),   
        ]);
    }
    public function arrays(){
        $arrays = [
            'contactos' => [
            "Distribuidor",
            "Cliente",
            ],
            'asuntos'=>[
                "Datawow Saas",
                "Desarrollo a medida",
            ],
            'provincias' => [
                "Madrid",
                "A Coruña",
                "Álava",
                "Albacete",
                "Alicante",
                "Almería",
                "Asturias",
                "Ávila",
                "Badajoz",
                "Baleares",
                "Barcelona",
                "Burgos",
                "Cáceres",
                "Cádiz",
                "Cantabria",
                "Castellón",
                "Ceuta",
                "Ciudad Real",
                "Córdoba",
                "Cuenca",
                "Girona",
                "Granada",
                "Guadalajara",
                "Gipuzkoa",
                "Huelva",
                "Huesca",
                "Jaén",
                "La Rioja",
                "Las Palmas",
                "León",
                "Lérida",
                "Lugo", 
                "Málaga",
                "Melilla",
                "Murcia",
                "Navarra",
                "Ourense",
                "Palencia",
                "Pontevedra",
                "Salamanca",
                "Segovia",
                "Sevilla",
                "Soria",
                "Tarragona",
                "Santa Cruz de Tenerife",
                "Teruel",
                "Toledo",
                "Valencia",
                "Valladolid",
                "Vizcaya",
                "Zamora",
                "Zaragoza",
                    ]
            ];
            return $arrays;
    }
}