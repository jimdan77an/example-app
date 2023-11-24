<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursales;

class SucursalesController extends Controller
{
    public function index()
    {
        $sucursales = Sucursales::all();
        return view('mis-views.Sucursales', ['sucursales' => $sucursales]);
    }
}
