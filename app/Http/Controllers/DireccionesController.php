<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direcciones;
use Illuminate\Support\Facades\Auth;

class DireccionesController extends Controller
{
    public function index()
    {
        $direcciones = Direcciones::where('id', Auth::id())->get();
        return view('mis-views.direcciones', ['direcciones' => $direcciones]);
    }

    public function create()
    {
        return view('mis-views.crearDireccion');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        Direcciones::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'id' => Auth::id(),
        ]);

        return redirect()->route('direcciones.index')->with('success', 'Dirección agregada correctamente.');
    }

    public function destroy($id)
    {
        $direccion = Direcciones::findOrFail($id);
        $direccion->delete();

        return redirect()->route('direcciones.index')->with('success', 'Dirección eliminada correctamente.');
    }

}
