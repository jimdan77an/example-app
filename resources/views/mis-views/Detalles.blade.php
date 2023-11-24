<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://kit.fontawesome.com/2137beee47.js" crossorigin="anonymous"></script>
    <title>Detalles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all" />
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
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 style="color: #880E4F;">{{$Producto->nombre}}</h1>
                <p>{{$Producto->detalles}}</p>
                <div class="img-nav">
                    <img src="data:image/jpg;base64,{{ base64_encode($Producto->imagen) }}" class="rounded"
                        alt="Imagen del producto"></br></br>
                </div>
            </div>
        </div>

        @auth
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{$cantidad}}
                @if($cantidad > 0)
                <div class="btn-group">
                    <a href="/carrito/agregar/{{$Producto->idProductos}}" class="btn btn-success">
                        <i class="fas fa-plus"></i> Agregar
                    </a>
                    <a href="/carrito/eliminar/{{$Producto->idProductos}}" class="btn btn-danger">
                        <i class="fas fa-minus"></i> Eliminar
                    </a>
                </div>
                @else
                <a href="/carrito/agregar/{{$Producto->idProductos}}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Agregar al Carrito
                </a>
                @endif
                <a href="/carrito" class="btn btn-dark">
                    <i class="fas fa-shopping-cart"></i> Ver Carrito
                </a>
            </div>
        </div>
        @endauth
    </div>

</body>

</html>