<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Direcciones;

class PaypalController extends Controller
{
    /*public function pago2(){
        return view('mis-views.carrito');
    }*/
    public function pago()
    {
        $id = Auth::id();
        $direcciones = Direcciones::where('id', $id)->get();
        return view('mis-views.carrito', ['direcciones' => $direcciones]);
    }
}
