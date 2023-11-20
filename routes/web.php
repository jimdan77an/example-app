<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SucursalesController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\CarritoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-primer-controller', [PrimerController::class, 'index']);

Route::get('/mi-primer-controller/{texto}', [PrimerController::class, 'indexWithParam']);

Route::get('/vista-layout', function () {
    return view('mis-views/layout');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\ContactoController;
Route::get('/contacto', [ContactoController::class, 'index']);
Route::post('/contacto', [ContactoController::class, 'send']);
Route::get('/contactado', [ContactoController::class, 'contacted'])->name('contactado');

Route ::get('/categorias', [CategoriasController::class, 'index']);
Route ::get('/categoria/{idCategorias}', [CategoriasController::class, 'view']);

Route ::get('/Sucursales', [SucursalesController::class, 'index']);

/*Route ::get('/Direcciones', [DireccionesController::class, 'index']);*/
Route ::get('/Detalles/{idProductos}', [CategoriasController::class, 'detalles']);

Route ::get('/Paypal', [PaypalController::class, 'pago']);

/*Route::post('/store/cart-add', [App\Http\CarritoController::class, 'add'])->name('cart.add');*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
?>
