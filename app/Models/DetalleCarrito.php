<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCarrito extends Model
{
    use HasFactory;
    protected $table="detalles_carritos";
    protected $primaryKey = 'idDetalleCarrito';

    static function obtenerDetalle($idCarrito, $idProducto, $cantidadPorDefecto = 0){
        $detalle = DetalleCarrito::where('idCarritos', $idCarrito)->where('idProductos', $idProducto)->first();
        if($detalle == null){
            $detalle = new DetalleCarrito();
            $detalle->idCarritos = $idCarrito;
            $detalle->idProductos = $idProducto;
            
                $detalle->cantidad = $cantidadPorDefecto;
                $producto=Productos::find($idProducto);
                $detalle->precio = $producto->precio;
                $detalle->save();
            
        }
        return $detalle;
    }
}