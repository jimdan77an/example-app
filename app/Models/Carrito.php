<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table="carrito";
    //public $timestamps = false;

    static function obtenerCarrito($idUsuarios){

        $carrito = Carrito::where('idUsuarios', $idUsuarios)->where('estado','ACTIVO')->first();
        if($carrito == null){
            $carrito = new Carrito();
            $carrito->estado = 'ACTIVO';
            $carrito->idUsuarios = $idUsuarios;
            $carrito->save();
        }
        return $carrito;
    }
}