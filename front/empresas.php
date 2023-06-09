<?php
    include ('../back/seguridad.php');
?>
<!DOCTYPE html <html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="script.js">
    
<title>aires-empresas</title>
<style>
    .dropdown-menu.show {
        margin: 0;
        box-shadow: none;
    }

    .dropdown-toggle::after {
        display: none;
    }

    button:focus {
        outline: none;
    }
</style>
</head>

<body <?php
if ($mostrar_modal) {
  echo '<script>modal.style.display = "block";</script>';
}
?>>
    <div class="container-fluid header">
        <div>
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-5 col-md-4">
                            <img src="../fotos/logo.png" class="logo">
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="row divmargin">
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='/aires/front/index.php';" style="font-size: 18px;">
                                            inicio
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-white bg-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='./empresas.php';" style="font-size: 18px;">
                                            empresas 
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            style="font-size: 18px;">
                                            Tabla
                                        </button>
                                        <div class="dropdown-menu text-white bg-dark" aria-labelledby="tabla-menu">
                                            <a class="dropdown-item text-white bg-dark" href="#">Tabla 1</a>
                                            <a class="dropdown-item text-white bg-dark" href="#">Tabla 2</a>
                                            <a class="dropdown-item text-white bg-dark" href="#">Tabla 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='/aires/front/log.php';" style="font-size: 18px;">
                                            log
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='/aires/front/rutinas.php';" style="font-size: 18px;">
                                            rutinas
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="cerrarSesion()" style="font-size: 18px;">
                                            Cerrar sesion
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-end ">
                    <h4 class="text-white bg-dark nombre" style="border-radius:5px;">airesSoftware</h4>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- inicio tabla empresas -->

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h4>LISTA DE EMPRESAS</h4> 
            </div>
            <div class="col-2">
                <button style="border-radius:3px; border: none;" class="header" id="mybtn">Agregar Empresa</button>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>
                            <div id="inputs">
                                <form class="empresa_form">
                                    <center><h4>AGREGAR EMPRESA</h4></center>
                                    <input type="hidden" style="border-radius:5px;"id="empresa-id " class="empresa-id">
                                    <input type="text" style="border-radius:5px;"id="cc" class="cc " placeholder="CC/NIT">
                                    <input type="text" style="border-radius:5px;"id="nombre_input" class="nombre_input " placeholder="Nombre">
                                    <input type="text" style="border-radius:5px;"id="direccion_input" class="direccion_input " placeholder="Dirección">
                                    <input type="text" style="border-radius:5px;"id="telefono_input" class="telefono_input " placeholder="Teléfono">
                                    <input type="text" style="border-radius:5px;"id="correo_input" class="correo_input " placeholder="Correo">
                                    <button type="submit" style="border-radius:5px;">Enviar</button>
                                </form>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-red table-bordered" style="width:100%" id="lista">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>CC/NIT</td>
                            <td>NOMBRE/RAZON SOCIAL</td>
                            <td>DIRECCION</td>
                            <td>TELEFONO</td>
                            <td>CORREO</td>
                            <Td>EDITAR</Td>
                            <td>ELIMINAR</td>
                            
                        </tr>
                    </thead>
                    <tbody id="empresas"></tbody>
                </table>

    <!-- fin de la tabla empresas -->
    <br>



        

</body>
<footer class="text-center fixed-bottom"
    style="background-color:lightgrey; position: fixed; bottom: 0; width: 100%;">Soluciones
    Navarro @Todos los derechos reservados
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>