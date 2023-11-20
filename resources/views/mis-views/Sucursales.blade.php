<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
		<title>Sucursales</title>
		<link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all"/>
	</head>	
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
	<div class = "full-container">
		<div class = "header">
		    <h1> Nuestras Sucursales </h1>
        </div>
		    <div class = "Cuerpo">
            @foreach($sucursales as $sucursal)
		    <h1> {{$sucursal->Nombre}}</h1></br></br>
         <iframe
        width="600"
        height="450"
        style="border:0"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBMznw6Z7nd2ODWJv8WnYuE_MiAujSmLUc&q={{$sucursal->Latitud}},{{$sucursal->Longitud}}">
        </iframe>
        @endforeach 
		    </div>
	</div> 
</body>	
</html>