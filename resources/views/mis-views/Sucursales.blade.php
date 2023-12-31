<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://kit.fontawesome.com/2137beee47.js" crossorigin="anonymous"></script>
    <title>Sucursales</title>
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
    <div class="full-container">
        <div class="header">
            <h1> Nuestras Sucursales </h1>
        </div>
        <div class="Cuerpo">
            @foreach($sucursales as $sucursal)
            <h1> {{$sucursal->Nombre}}</h1></br></br>
            <iframe width="600" height="450" style="border:0" loading="lazy" allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBMznw6Z7nd2ODWJv8WnYuE_MiAujSmLUc&q={{$sucursal->Latitud}},{{$sucursal->Longitud}}">
            </iframe>
            @endforeach
        </div>
    </div>
</body>

</html>