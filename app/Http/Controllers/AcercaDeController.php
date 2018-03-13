<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaDeController extends Controller
{
    

    public function index()
    {
        // retorna el crud del auditorio
        return view('/layouts.acercaDe');
    }
}
