<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Carrito;
use App\Models\DetalleCarrito;
use Illuminate\Support\Facades\Auth;


class CategoriasController extends Controller
{
    public function index(){
       $Categorias = Categorias::all();
       $arr = compact('Categorias');
       return view ('mis-views.categorias',['categorias'=>$Categorias]);
    }
    public function view($idCategorias){
        $Categorias = Categorias::where('idCategorias',$idCategorias)->with('Productos')->first();
        return view('mis-views.categoria', ['categoria' => $Categorias]); 
    }
    public function detalles($idProductos){
        $cantidad=0;
        if (Auth::user()!=null){
            $idUsuarios = Auth::id();
            $carrito = Carrito::obtenerCarrito($idUsuarios);
            $idCarrito = $carrito->idCarrito;        
            $detalle = DetalleCarrito::where('idCarritos', $idCarrito)->where('idProductos', $idProductos)->first();
            if($detalle!=null){
            $cantidad = $detalle->cantidad;
            }
        } 
        $Producto = Productos::where('idProductos',$idProductos)->first();
        return view('mis-views.Detalles', ['Producto' => $Producto, 'cantidad'=> $cantidad]); 
    }

}
