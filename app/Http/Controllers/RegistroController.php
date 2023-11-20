<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    public function index(){
        $Registro = Registro::all();
        return view ('mis-views.registrar',['registrar'=>$Registro]);
     }
}