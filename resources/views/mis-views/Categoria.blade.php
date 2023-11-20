<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all" />
</head>
<style>
    h4 {
        text-align:center;
        font-size: 50px;
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
</style>

<body>
    <nav>
        <ul class="menu-h">
            <li><a href="/login">Iniciar Sesión</a></li>
            <li><a href="/register">Registrarse</a></li>
            <li><a href="/categorias">Inicio</a></li>

            <li><a href="/categoria">Categorías</a>

            </li>
            <li><a href="/contacto">Contactos</a></li>
            <li><a href="#">Sucursales</a>
                <ul class="menu-v">
                    <li><a href="/Sucursales">Geolocalización</a>
                </ul>
            </li>
        </ul>
    </nav>
    <h1 style="color: #4A235A;"> {{$categoria->nombre}}, {{$categoria->tipo}} </h1>
    <div class="container">
        <div class="row">
            @foreach($categoria->productos as $producto)
            <h2 style="color: #880E4F;">{{$producto->nombre}}</h2>
            <div id="precios">
                <p> Q.{{$producto->precio}}.00 </p>
            </div>

            <h4>Ofertas Navideñas y Fin de Año!</h4>

            <br />
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6 comprar">
                        <a href="/Paypal">Comprar</a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 detalles">
                        <a href="/Detalles/{{$producto->idProductos}}">Detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="caracteristicas">
                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                <div class="elfsight-app-a978a0dd-940b-45ed-8241-3e6f3670a192" data-elfsight-app-lazy></div>
            </div>
        </div>
    </div>
</body>

</html>