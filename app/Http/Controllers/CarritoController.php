<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Carrito;
use App\Models\DetalleCarrito;


use Illuminate\Support\Facades\Auth;
class CarritoController extends Controller
{
    public function agregar($id){
        $producto = Productos::find($id);
        $idUsuarios = Auth::id();
        $carrito = Carrito::obtenerCarrito($idUsuarios);
        $idCarrito = $carrito->idCarrito;        
        $detalle = DetalleCarrito::obtenerDetalle($idCarrito, $id, 0);
        $detalle->cantidad = $detalle->cantidad +1;
        $detalle->save();
        return redirect()->back();
    }
    public function eliminar($id){
        $producto = Productos::find($id);
        $idUsuarios = Auth::id();
        $carrito = Carrito::obtenerCarrito($idUsuarios);
        $idCarrito = $carrito->idCarrito;        
        $detalle = DetalleCarrito::obtenerDetalle($idCarrito, $id);
        $detalle->cantidad = $detalle->cantidad -1;
        if($detalle->cantidad <=0){
            //$detalle->delete();
            DetalleCarrito::destroy($detalle->id);
        }else{
            $detalle->save();
        }

        return redirect()->back();
    }



}
?>