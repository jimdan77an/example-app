<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Productos;

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
        $Producto = Productos::where('idProductos',$idProductos)->first();
        return view('mis-views.Detalles', ['Producto' => $Producto]); 
    }

}
