<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
//use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      

        $url = 'https://www.zaragoza.es/sede/servicio/farmacia.json';
        $response = Http::get($url);
    
        // Verifica si la solicitud fue exitosa
        if ($response->successful()) {
            // Obtén el contenido de la respuesta (HTML, JSON, u otro)
            $content = $response->json();

    
            // Procesa y muestra el contenido según sea necesario
            return view('home', ['farmaciasArray' => $content]);
        } else {
            // Maneja el caso en que la solicitud no fue exitosa
            return view('error');
        }

     
    }
}
