<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Welcome</title>
		<link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all"/>
	</head>	
    <!--<style>
        html {
            height: 100%;
        }
        body {
            height: auto;
            background: rgb(55,0,70);
            background: linear-gradient(0deg, rgba(55,0,70,1) 0%, rgba(234,174,241,1) 100%);
            position: relative;
        }
        nav {
            position: relative;
            text-align: center;
            color: #252B37;
            background-color: #151823;
            animation: textColor 10s ease infinite;
        }
        nav:after {
            position: absolute;
            content: "";
            top: 5vw;
            left: 0;
            right: 0;
            z-index: -1;
            height: 100%;
            width: 100%;
            margin: 0 auto;
            transform: scale(0.75);
            -webkit-filter: blur(5vw);
            -moz-filter: blur(5vw);
            -ms-filter: blur(5vw);
            filter: blur(5vw);
            background: linear-gradient(270deg, #0fffc1, #7e0fff);
            background-size: 200% 200%;
            animation: animateGlow 10s ease infinite;
        }
        @keyframes animateGlow {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
        }
        @keyframes textColor {
        0% {
            color: #7e0fff;
        }
        50% {
            color: #0fffc1;
        }
        100% {
            color: #7e0fff;
        }
        }
    </style>-->    
<body>
    <nav>
    <ul class = "menu-h">
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
    <div class ="container">
        <div class="row">
            <h1 style="color: #880E4F;">{{$Producto->nombre}}</h1>
            <p>{{$Producto->detalles}}</p>
            <img src="{{$Producto->imagen}}" />
            
   @auth
        {{$cantidad}}
        @if($cantidad>0)

            <a href="/carrito/agregar/{{$Producto->idProductos}}"><button>
                   +
                </button></a>
            <a href="/carrito/eliminar/{{$Producto->idProductos}}"><button>-</button></a>
        @else
            <a href="/carrito/agregar/{{$Producto->idProductos}}"><button>
                +
            </button></a>
        @endif

    @endauth 
        </div>
    </div> 
   
</body>	    
</html>