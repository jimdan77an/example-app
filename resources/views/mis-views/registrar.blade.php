<html>
<head>
		<meta charset = "utf-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
		<title>Formulario de Registro</title>
		<link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css"media="all"/>
	</head>	
    <body>
        <nav>
        <ul class = "menu-h">
            <li><a href="/login">Iniciar Sesión</a></li>
            <li><a href="/register">Registrarse</a></li> 
            <li><a href="#">Inicio</a></li>
            
            <li><a href="/categoria">Categorías</a>
                <ul class="menu-v">
                    @foreach($categorias as $categoria)
		            <li><a style="color: white;" href = "/categoria/{{$categoria->idCategorias}}"> {{$categoria->nombre}}, {{$categoria->tipo}}</a></li></br></br>
                    @endforeach
                </ul>    
            </li>
            <li><a href="/contacto">Contactos</a></li>
            <li><a href="#">Sucursales</a>
            <ul class="menu-v">
            <li><a href="/Sucursales">Geolocalización</a>
            </ul>  
            </li>
        </ul>    
        </nav> 
    <section class="form-register">
        <h4>Formulario de Registro</h4>
        <input class="controls" type="text" name="nombres" id= "nombres" placeholder="Ingrese su nombre">
        <input class="controls" type="text" name="apellidos" id= "apellidos" placeholder="Ingrese su Apellido">
        <input class="controls" type="email" name="correo" id= "correo" placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="correo" id= "correo" placeholder="Ingrese su Contraseña">
        <p>Estoy de acuerdo con los <a href ="#"> Terminos y Condiciones </p>
        <input class="botons" type="submit" value="Registrar">
        <p><a href="#"> ¿Ya tengo cuenta?</a></p>
</section>    
    </body>
</html>