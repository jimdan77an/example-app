<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://kit.fontawesome.com/2137beee47.js" crossorigin="anonymous"></script>
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all" />

</head>
<style>
    h4 {
        text-align: center;
        font-size: 45px;
        background: linear-gradient(#1497be, #1c2aec);
        color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        animation: text 5s linear infinite;
    }

    @keyframes text {
        0% {
            filter: hue-rotate(0deg);
        }

        100% {
            filter: hue-rotate(360deg);
        }
    }

    body {
        margin: 20px;
    }
</style>

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
        </ul>
    </nav>
    <div class="container categoria-container">
        <h1 style="color: #4A235A;">{{$categoria->nombre}}, {{$categoria->tipo}} </h1>
        <div class="row">
            @foreach($categoria->productos as $producto)
            <div class="col-md-6 offset-md-3">
                <div class="producto-container">
                    <h2 style="color: #880E4F;">{{$producto->nombre}}</h2>
                    <div id="precios">
                        <p> Q.{{$producto->precio}} </p>
                        <div class="img-nav">
                            <img src="data:image/jpeg;base64,{{ base64_encode($producto->imagen) }}"
                                alt="Imagen del producto">
                        </div>
                    </div>

                    <h4>Ofertas Navideñas y Fin de Año!</h4>

                    <br />
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 detalles">
                                <a href="/Detalles/{{$producto->idProductos}}">Detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="caracteristicas">
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-a978a0dd-940b-45ed-8241-3e6f3670a192" data-elfsight-app-lazy></div>
        </div>
    </div>
</body>

</html>