<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Carrito</title>
    <link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body>
    @auth
    <div class="nav">
        <a href="/carrito"><i class="fa-solid fa-cart-plus" style="color: #f500b4;"></i></a>
    </div>
    @endauth
    <nav>
        <ul class="menu-h">
            <li><a href="/categorias">Inicio</a></li>

            <li><a href="/categorias">Categorías</a>

            </li>
            <li><a href="/contacto">Contactos</a></li>
            <li><a href="#">Sucursales</a>
                <ul class="menu-v">
                    <li><a href="/Sucursales">Geolocalización</a>
                </ul>
            </li>
            @auth
            <li><a href="/direcciones">Direcciones</a></li>
            @endauth
        </ul>
    </nav>
    <h1>Carrito de Compras</h1>

    @if(count($detalles) > 0)
    <table class="table" style="text-align:center;">
        <thead class="thead-dark">
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio unitario</th>
                <th>Subtotal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detalles as $detalle)
            <tr>
                <td>{{ $detalle->producto->nombre }}</td>
                <td>{{ $detalle->cantidad }}</td>
                <td>{{ $detalle->precio }}</td>
                <td>{{ $detalle->cantidad * $detalle->precio }}</td>
                <td>
                    <form method="post" action="{{ route('carrito.agregar', $detalle->producto->idProductos) }}">
                        @csrf
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </form>

                    <form method="post" action="{{ route('carrito.eliminar', $detalle->producto->idProductos) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-success">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total a pagar: {{$total}}</p>
    <div class="comprar">
        <a href="/categorias">Seguir Comprando</a>
    </div>

    <input type="checkbox" id="verMas">
    <label class="pagar" for="verMas">Pagar</label>

    <div id="contenidoCompleto">
        <form action="{{ route('carrito.procesarPagoYGracias') }}" method="post">
            @csrf
            <table class="table" style="text-align:center;">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">Ingresa tus datos personales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><label for="direccion">Dirección de envío:</label></td>
                        <td>
                            <select name="direccion" id="direccion">
                                <option value="selecciona">Selecciona tu dirección</option>
                                @foreach ($direcciones as $direccion)
                                <option value="{{ $direccion->idDireccion }}">
                                    {{ $direccion->nombre }}, {{ $direccion->direccion }}
                                </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tarjeta">Número de tarjeta:</label></td>
                        <td><input type="text" name="tarjeta" required></td>
                    </tr>
                    <tr>
                        <td><label for="nombre_tarjeta">Nombre en la tarjeta:</label></td>
                        <td><input type="text" name="nombre_tarjeta" required></td>
                    </tr>
                    <tr>
                        <td><label for="fecha_expiracion">Fecha de expiración:</label></td>
                        <td><input type="text" name="fecha_expiracion" placeholder="MM/AA" required></td>
                    </tr>
                    <tr>
                        <td><label for="codigo_seguridad">Código de seguridad:</label></td>
                        <td><input type="text" name="codigo_seguridad" required></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"><button type="submit" class="btn btn-success">Pagar</button></td>
                    </tr>
                </tfoot>
            </table>
        </form>


    </div>
    @else
    <p>El carrito está vacío.</p>
    @endif
</body>

</html>