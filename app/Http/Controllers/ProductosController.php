<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

class ProductosController extends Controller
{
    public function index()
    {
        
       return view('layouts.productos');
       
    }
}
