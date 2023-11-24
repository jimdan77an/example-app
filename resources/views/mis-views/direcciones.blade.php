<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://kit.fontawesome.com/2137beee47.js" crossorigin="anonymous"></script>
    <title>Direcciones</title>
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
    <div class="full-container"></br></br>
        <nav>
            <ul class="menu-h">
                @guest
                <li><a href="/login">Iniciar Sesión</a></li>
                <li><a href="/register">Registrarse</a></li>
                @endguest
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
        <h1>Direcciones</h1>

        @if(count($direcciones) > 0)
        <table class="table" style="text-align:center;">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($direcciones as $direccion)
                <tr>
                    <td>{{ $direccion->nombre }}</td>
                    <td>{{ $direccion->direccion }}</td>
                    <td>
                        <form method="post" action="{{ route('direcciones.destroy', $direccion->idDireccion) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"> <a href="{{ route('direcciones.create') }}" class="btn btn-success">Agregar Nueva
                            Dirección</a></td>
                </tr>
            </tfoot>
        </table>
        @else
        <p>No hay direcciones disponibles.</p>
        <a href="{{ route('direcciones.create') }}" class="btn btn-success">Agregar Nueva
            Dirección</a></td>
        @endif
</body>

</html>