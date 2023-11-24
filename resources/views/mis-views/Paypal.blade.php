<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>Welcome</title>
        <link rel="stylesheet" href="http://localhost/example-app/public/css/estilos.css" media="all" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
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
    </style>  -->

<body>
    <nav>
    <ul class = "menu-h">
            <li><a href="/categorias">Inicio</a></li>
            
            <li><a href="/categorias">Categorías</a>
            </li>
            <li><a href="/contacto">Contactos</a></li>
            <li><a href="/categoria">Sucursales</a>
            <ul class="menu-v">
            <li><a href="/Sucursales">Geolocalización</a>
            </ul>  
            </li>
        </ul>    
    </nav>
    <center>
        <form action="#">
            <label for="lang">Direccion de envio </label>
            <select name="lenguajes" id="lang">
                <option value="selecciona">Selecciona su direccion</option>
                @foreach ($direcciones as $direccion)
                <option value="{{$direccion->idDireccion}}">{{$direccion->nombre}}, {{$direccion->direccion}}</option>
                @endforeach
            </select>

        </form>
        <!-- Pago de paypal-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 pago">
                    <script
                        src="https://www.paypal.com/sdk/js?client-id=AVZE2qVT9jCENpRLe_DMhIQuTKwtn-KYloBBXowfXV5NKTqwYS0QODvNwCtmmBbbRN-QJZox2j3NL7wy&currency=USD"></script>
                    <br>
                    <div id="paypal-button-container"></div>
                    <script>
                        paypal.Buttons({

                            createOrder: (data, actions) => {
                                return actions.order.create({
                                    purchase_units: [{
                                        amount: {
                                            value: '1600.00'
                                        }
                                    }]
                                });
                            },

                            onApprove: (data, actions) => {
                                return actions.order.capture().then(function (orderData) {
                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                    const transaction = orderData.purchase_units[0].payments.captures[0];
                                    alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                                });
                            }
                        }).render('#paypal-button-container');
                    </script>
                    
                </div>
            </div>
        </div>
        </div>
        <br>
        </div>
        <div class="productos">
            <a href="/carrito">Regresar</a>
        </div>
    </center>

</body>

</html>