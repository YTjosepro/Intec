<!DOCTYPE html <html lang="en" <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <div class="container-fluid" style="background-color:lightgrey; width: 100%">
        <div style="margin-left:10px;">
            <div class="row align-items-center" style="margin-left: 10px;">
                <div class="col-md-9">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-3 col-md-2">
                            <img src="../fotos/logo.png" style="height:100px; margin-left:20px; margin-top:5px;">
                        </div>
                        <div class="col-sm-9 col-md-10">
                            <div class="row" style="margin-top:40px;">
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                        <div class="dropdown-menu" aria-labelledby="tabla-menu">
                                            <a class="dropdown-item" href="#">Tabla 1</a>
                                            <a class="dropdown-item" href="#">Tabla 2</a>
                                            <a class="dropdown-item" href="#">Tabla 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            log
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="dropdown">
                                        <button class="btn text-dark dropdown-toggle" type="button" id="tabla-menu"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <h4 class="text-white bg-dark" style="padding:10px; margin-left: 10px;">IntecSoftware</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- inicio tabla empresas -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Columna 1</th>
                            <th>Columna 2</th>
                            <th>Columna 3</th>
                            <th>Columna 4</th>
                            <th>Columna 5</th>
                        </tr>
                    </thead>
                    <tbody id="table-body" contenteditable="true">
                        <tr>
                            <td>Fila 4 Columna 1</td>
                            <td>Fila 4 Columna 2</td>
                            <td>Fila 4 Columna 3</td>
                            <td>Fila 4 Columna 4</td>
                            <td>Fila 4 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                        <tr>
                            <td>Fila 5 Columna 1</td>
                            <td>Fila 5 Columna 2</td>
                            <td>Fila 5 Columna 3</td>
                            <td>Fila 5 Columna 4</td>
                            <td>Fila 5 Columna 5</td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Anterior">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>
                        <li class="page-item active">

                            <!-- fin de la tabla empresas -->
                            <br>
                            <br>
                            <hr>
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
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>