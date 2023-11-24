<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://kit.fontawesome.com/2137beee47.js" crossorigin="anonymous"></script>
    <title>Contacto</title>
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
    <h1> Contáctanos </h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="" method="POST">
        @csrf

        <table class="table" style="text-align:center;">
            <thead class="thead-dark">
                <tr>
                    <th colspan="3"> Ingresa tus datos aquí</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" placeholder="Ingresa tu nombre" id="nombre" name="nombre"
                            value="{{ old('nombre') }}"></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="text" placeholder="Ingresa tu correo" id="email" name="email"
                            value="{{ old('email') }}"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="checkbox" id="publicidad" name="publicidad"
                            @checked(old('publicidad'))>
                        <label for="publicidad">Recibir Publicidad</label>
                    </td>
                </tr>
                <tr>
                    <td><label for="mensaje">Mensaje:</label></td>
                    <td><textarea id="mensaje" name="mensaje">{{ old('mensaje') }}</textarea></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>



                    <td colspan="2"><input type="submit" class="btn btn-success" value="Enviar" /></td>
                </tr>
            </tfoot>
        </table>
    </form>

</body>

</html>