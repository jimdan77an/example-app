<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;
use App\Models\Sucursales;

class Categorias extends Model
{
    use HasFactory;
    protected $table = 'categorias';

    public function productos()
    {
        return $this->hasMany(productos::class, 'idCategorias', 'idCategorias');
    }
}
