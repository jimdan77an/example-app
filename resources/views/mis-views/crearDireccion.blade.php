<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://kit.fontawesome.com/2137beee47.js" crossorigin="anonymous"></script>
    <title>Crear Direcciones</title>
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

                <li><a href="/categoriass">Categorías</a>
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
        <h1>Agregar Nueva Dirección</h1>

        <form method="post" action="{{ route('direcciones.store') }}">
            @csrf
            <table class="table" style="text-align:center;">
                <thead class="thead-dark">
                    <tr>
                        <th colspan="2">Ingresa tu dirección aquí</th>
                    </tr>
                </thead>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" name="nombre" class="form-control" required></td>
                </tr>
                <tr>
                    <td><label for="direccion">Dirección:</label></td>
                    <td><input type="text" name="direccion" class="form-control" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button type="submit" class="btn btn-primary">Agregar Dirección</button>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>