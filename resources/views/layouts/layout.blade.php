<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tienda de productos</title>
    <link rel="stylesheet" href="public\css\styles.css">
    
<!--Ingeniero le agregué los estilos aqui porque no me los lee agregando el link-->
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #333;
    color: white;
    padding: 20px;
}

header nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

header nav ul li {
    display: inline;
    margin-right: 20px;
}

header nav ul li a {
    text-decoration: none;
    color: white;
}

main {
    flex: 1;
    padding: 20px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
        <div>
            <h2>¡Bienvenido a nuestra tienda de productos!</h2>
            <p>Descubre nuestra amplia gama de productos y encuentra lo que necesitas.</p>
            <p>Ofrecemos productos de alta calidad a precios competitivos.</p>
            <p>¡Visítanos y haz tu primera compra hoy!</p>
        </div>
    </main>
    <footer>
        <p>Heidi Maldonado © 2023 Tienda de Productos</p>
    </footer>
</body>
</html>