<html>
    <head>
		<meta charset = "utf-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
		<title>Contactos</title>
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

    <form action="" form method="Post">
        @csrf

        <label for="nombre">Nombre:</label> <input type="text" placeholder= "Ingresa tu nombre" id="nombre" name="nombre" value="{{old('nombre')}}"><br/>
        <label for="email">E-mail:</label> <input type="text" placeholder= "Ingresa tu correo" id="email" name="email" value="{{old('email')}}"><br/>
        <input type="checkbox" id="publicidad" name="publicidad" @checked(old('publicidad'))><label for="publicidad">Recibir Publicidad</label></br>
        <label for="mensaje">Mensaje:</label> <br/>
        <textarea id="mensaje" name="mensaje">{{old('mensaje')}} </textarea><br/>



        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>
