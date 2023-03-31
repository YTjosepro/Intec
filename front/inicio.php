<?php
    include ('../back/seguridad.php');
?>
<!DOCTYPE html <html lang="en" <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
<title>Intec-empresas</title>
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

<body>

    <div class="container-fluid header">
        <div>
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-3 col-md-2">
                            <img src="../fotos/logo.png" class="logo">
                        </div>
                        <div class="col-sm-9 col-md-10">
                            <div class="row divmargin">
                                <div class="col" style='border: 1px solid red;'>
                                    <div class="dropdown">
                                        <button class="btn text-white bg-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='/intec/front/inicio.php';" style="width:100%">
                                            inicio
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='./empresas.php';">
                                            empresas
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            onclick="location.href='/intec/front/log.php';">
                                            log
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='/intec/front/rutinas.php';">
                                            rutinas
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            onclick="location.href='/intec/back/cerrar-sesion.php';">
                                            Cerrar sesion
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-end ">
                    <h4 class="text-white bg-dark nombre" style="border-radius:5px;">IntecSoftware</h4>
                </div>
            </div>
        </div>
    </div>
</body>
<footer class="text-center" style="background-color:lightgrey; position: fixed; bottom: 0; width: 100%;">Soluciones
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
