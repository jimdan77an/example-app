<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Carrito;
use App\Models\DetalleCarrito;
use App\Models\Direcciones;


use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    public function agregar($id)
    {
        $producto = Productos::find($id);
        $idUsuarios = Auth::id();
        $carrito = Carrito::obtenerCarrito($idUsuarios);
        $idCarrito = $carrito->idCarrito;
        $detalle = DetalleCarrito::obtenerDetalle($idCarrito, $id, 0);
        $detalle->cantidad = $detalle->cantidad + 1;
        $detalle->save();
        return redirect()->back();
    }
    public function eliminar($id)
    {
        $producto = Productos::find($id);
        $idUsuarios = Auth::id();
        $carrito = Carrito::obtenerCarrito($idUsuarios);
        $idCarrito = $carrito->idCarrito;
        $detalle = DetalleCarrito::obtenerDetalle($idCarrito, $id);

        if ($detalle->cantidad > 1) {
            $detalle->cantidad = $detalle->cantidad - 1;
            $detalle->save();
        } else {

            $detalle->delete();
        }

        return redirect()->back();
    }
    public function mostrarCarrito()
    {
        $idUsuarios = Auth::id();
        $carrito = Carrito::obtenerCarrito($idUsuarios);
        $detalles = DetalleCarrito::where('idCarritos', $carrito->idCarrito)->with('producto')->get();
        $total = Carrito::calcularTotal($idUsuarios);
        $id = Auth::id();
        $direcciones = Direcciones::where('id', $id)->get();

        return view('mis-views.carrito', ['detalles' => $detalles, 'carrito' => $carrito, 'total' => $total, 'direcciones' => $direcciones]);
    }
    public function procesarPagoYGracias(Request $request)
{
    $idUsuario = Auth::id();
    $carrito = Carrito::obtenerCarrito($idUsuario);

    $detalles = DetalleCarrito::where('idCarritos', $carrito->idCarrito)->get();

    $totalPagar = $detalles->sum(function ($detalle) {
        return $detalle->cantidad * $detalle->precio;
    });

    $carrito->estado = 'PROCESANDO';
    $carrito->save();

    return redirect()->route('mis-views.gracias')->with('mensaje', 'Gracias por su compra. Total pagado: Q' . $totalPagar);
}

    public function mostrarAgradecimiento()
    {
        return view('mis-views.gracias');
    }
}
?>