<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Carrito extends Model
{
    use HasFactory;
    protected $table = "carrito";
    protected $primaryKey = 'idCarrito';
    //public $timestamps = false;

    public function detalles()
    {
        return $this->hasMany(DetalleCarrito::class, 'idCarritos');
    }

    static function obtenerCarrito($idUsuarios)
    {

        $carrito = Carrito::where('idUsuarios', $idUsuarios)->where('estado', 'ACTIVO')->first();
        if ($carrito == null) {
            $carrito = new Carrito();
            $carrito->estado = 'ACTIVO';
            $carrito->idUsuarios = $idUsuarios;
            $carrito->save();
        }
        return $carrito;
    }
    static function calcularTotal($idUsuarios)
    {
        return Carrito::where('idUsuarios', $idUsuarios)->where('estado', 'ACTIVO')->first()->detalles()->sum(DB::raw("cantidad*precio"));
    }

}