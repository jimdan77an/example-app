<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
		<title>Bienvenido</title>
		<link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	</head>	
<body>    
	<div class = "full-container"></br></br>
		<div class = "header">
		    <img class="imgheader" src="http://localhost/example-app/public/imagenes/icono.png?t=". time();><h1> Music Shop </h1>  
		</div>
        <nav>
        <ul class = "menu-h">
            <li><a href="/login">Iniciar Sesión</a></li>
            <li><a href="/register">Registrarse</a></li> 
            <li><a href="/categorias">Inicio</a></li>
            
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
   
        <div class = "galeria">
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (1).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (2).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (3).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (4).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (5).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (6).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (7).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (8).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (9).jpg"></div>
        <div class="g-img"><img src="http://localhost/example-app/public/imagenes/vestido (10).jpg"></div>
        </div>
        <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <div class="scroll">
                            <h3>¿Quienes somos?</h3>
                            <ul>
                                <li><a href="#">Somos mucho más que una tienda de vestidos; somos una experiencia de moda diseñada para cada mujer que busca destacar, expresarse y sentirse increíble en cada ocasión. En Fashion Luce, fusionamos la elegancia con la originalidad, ofreciendo una cuidada selección de vestidos que reflejan las últimas tendencias de la moda y celebran la diversidad de estilos. </br></br> Nuestra Filosofía: En el corazón de Fashion Luce se encuentra la creencia de que la moda es una forma poderosa de expresión personal. Creemos en la singularidad de cada mujer y nos esforzamos por brindar opciones que se adapten a todos los gustos, tallas y personalidades. Cada vestido en nuestra colección cuenta una historia, y estamos emocionados de ser parte de la tuya. </br></br> Lo Que Nos Diferencia: Diseño Exclusivo: Nuestra colección es cuidadosamente curada para ofrecer vestidos únicos y hermosos que te harán destacar en cualquier ocasión. </br></br> Calidad Inigualable: En Fashion Luce, la calidad es nuestra prioridad. Trabajamos con materiales premium y nos esforzamos por garantizar la perfección en cada detalle, desde el diseño hasta la confección. </br></br> Experiencia de Compra Sin Problemas: Queremos que tu experiencia de compra sea tan especial como nuestros vestidos. Desde la navegación fácil en nuestro sitio web hasta nuestro dedicado equipo de atención al cliente, estamos aquí para hacer que cada paso sea sencillo y placentero. </br></br> Compromiso con la Sostenibilidad: En Fashion Luce, nos preocupamos por el impacto ambiental de la moda. Trabajamos constantemente para incorporar prácticas sostenibles en nuestra cadena de suministro, porque creemos que la moda hermosa no debería comprometer nuestro hermoso planeta. </br></br> Únete a la Experiencia Fashion Luce: Ya sea que estés buscando el vestido perfecto para una ocasión especial o simplemente quieras añadir un toque de estilo a tu día a día, Fashion Luce está aquí para ti. Explora nuestra colección y descubre la magia que hay detrás de cada vestido. ¡Estamos emocionados de ser parte de tu viaje de estilo!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <div class="scroll">
                        <h3>Misión</h3>
                        <ul>
                            <li><a href="#">En Fashion Luce nos dedicamos a inspirar y empoderar a mujeres a través de la moda. Nuestra misión es ofrecer vestidos que no solo resalten la belleza individual de cada mujer, sino que también reflejen su estilo único y personalidad. Nos esforzamos por ser líderes en la industria de la moda, manteniendo altos estándares de calidad, innovación y sostenibilidad. Nos comprometemos a proporcionar a nuestras clientes una experiencia de compra excepcional, donde encuentren no solo prendas de vestir excepcionales, sino también un servicio al cliente impecable. Valoramos la diversidad y la inclusión, y nos esforzamos por crear un ambiente donde todas las mujeres se sientan representadas y bienvenidas. Además, estamos comprometidos con prácticas éticas y sostenibles en toda nuestra cadena de suministro. Buscamos constantemente maneras de minimizar nuestro impacto ambiental y contribuir positivamente a las comunidades en las que operamos. En Fashion Luce no solo creamos vestidos; creamos momentos especiales y ayudamos a cada mujer a expresar su autenticidad a través de la moda. Nuestra misión es ser la elección preferida de todas aquellas mujeres que buscan calidad, estilo y conciencia en cada prenda que eligen.</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <div class="scroll">
                        <h3>Visión</h3>
                        <ul>
                            <li><a href="#">En Fashion Luce nos visualizamos como líderes reconocidos a nivel global en la industria de la moda, siendo la primera elección para mujeres que buscan vestirse con elegancia, originalidad y confianza. Nos esforzamos por ser una marca icónica que no solo sigue las tendencias, sino que las establece, inspirando a mujeres de todas las edades a expresar su individualidad a través de la moda. Imaginamos un futuro donde Fashion Luce sea sinónimo de innovación, calidad y compromiso con la sostenibilidad. Buscamos expandir nuestra presencia en nuevos mercados, manteniendo al mismo tiempo la excelencia en diseño y fabricación que nos caracteriza. Aspiramos a ser un referente en la creación de experiencias de moda memorables, donde cada compra en Fashion Luce sea una celebración de estilo personal y empoderamiento. En Fashion Luce no solo queremos vestir a mujeres, sino ser parte integral de momentos significativos en sus vidas. Visualizamos una comunidad global de mujeres que eligen Fashion Luce para destacar en cada ocasión importante, desde eventos cotidianos hasta momentos extraordinarios. Nuestra visión es trascender como una marca que no solo sigue tendencias, sino que redefine constantemente el panorama de la moda con creatividad, autenticidad y compromiso duradero.</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Heidi Maldonado © 2023</p>
                        <ul>
                            <li><a href="#">Ciudad de Guatemala, Guatemala</a></li>
                            <li><a href="#">+502 5083-1949</a></li>
                            <li><a href="#">maldonadoh@umes.edu.gt</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	</div> 
</body>	
</html>