<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen de la NASA</title>
    <link rel="stylesheet" href="http://localhost/example-app/public/css/estilo.css" media="all" />
</head>
<body>
    <!--Mostrar el titulo-->
    <h1>{{ $data['title'] }}</h1>
    <!--Mostrar la descripcion-->
    <p>{{ $data['explanation'] }}</p>
    <!--Mostrar la imagen-->
    <img src="{{ $data['hdurl'] }}" alt="{{ $data['title'] }}">
</body>
</html>