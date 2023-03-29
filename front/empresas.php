<!DOCTYPE html <html lang="en" <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<title>Empresas</title>
</head>

<body>

    <!--Encabezado-->

    <div class="conteiner" style="background-color:lightgrey">
        <div class="row">
            <div class="col-2 col-md-3 col-sm-3">
                <img src="../fotos/logo.png" style="height:100px; margin-left:20px; margin-top:5px;">
            </div>
            <div class="col-10 col-md-9 col-sm-6">
                <div class="row" style="margin-top:40px;">
                    <h4 style="margin-right:30px;"><a class="text-dark" href="inicio.php">Inicio</a></h4>
                    <div style="width:160px; height:30px;">
                        <h4 style="margin-right:30px;"><a style="padding:10px;" class="text-white bg-dark"
                                href="empresas.php">Empresas</a></h4>
                    </div>
                    <button type="button" class="btn btn-default dropdown-toggle margin-bottom:10px;"
                        data-toggle="dropdown">
                        <h4 style="margin-right:10px; margin-bottom:10px;">Tablas</h4><span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu bg-dark" role="menu">
                        <li><a class="text-white" style="margin-left: 10px;" href="#">Marcas</a></li>
                        <li><a class="text-white" style="margin-left: 10px;" href="#">Capacidad</a></li>
                        <li><a class="text-white" style="margin-left: 10px;" href="#">Tipo</a></li>
                    </ul>
                    <h4 style="margin-right:30px;"><a class="text-dark" href="log.php">Log</a></h4>
                    <h4 style="margin-right:30px;"><a class="text-dark" href="rutinas.php">Rutinas</a></h4>
                    <h4 style="margin-right:30px;"><a class="text-dark" href="../back/cerrar-sesion.php">Cerrar
                            sesión</a></h4>
                    <div style="width:160px; height:30px;">
                        <h4 class="text-white bg-dark" style="padding:10px;">IntecSofware</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 10px;padding: 5px">
        <table id="empresas" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <th>CC/NIT</th>
                <th>NOMBRE/RAZON SOCIAL</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th>CORREO</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Leonardo</td>
                    <td>Ape1</td>
                    <td>Ape2</td>
                    <td>12345689</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form class="empresa_form">
                <input type="text" class="cc" placeholder="CC/NIT">
                <input type="text" name="" class="nombre_input" placeholder="Nombre">
                <input type="text" name="" class="direccion_input" placeholder="Dirección">
                <input type="text" name="" class="telefono_input" placeholder="Teléfono">
                <input type="text" name="" class="correo_input" placeholder="Correo electrónico">
                <button type="submit">
                    Enviar
                </button>
            </form>
        </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>