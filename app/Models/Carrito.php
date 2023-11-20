<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table="carritos";
    //public $timestamps = false;

    static function obtenerCarrito($userId){

        $carrito = Carrito::where('idUsuarios', $userId)->where('estado','ACTIVO')->first();
        if($carrito == null){
            $carrito = new Carrito();
            $carrito->estado = 'ACTIVO';
            $carrito->idUsuarios = $userId;
            $carrito->save();
        }
        return $carrito;
    }
}