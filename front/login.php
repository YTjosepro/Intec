    <?php
    session_start();
    if(isset($usu)) {
        header('Location: inicio.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='main.js'></script>
    <style>
        img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <img src="../fotos/imginicio.png" class="img-fluid" style="width:900px; height:625px;">
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <center>                            
                            <img src="../fotos/logo.png" class="img-fluid mb-3" style="margin-top:15px; height:225px;">
                            <h3>IntecSofware</h3>
                            <h7>Software de control técnico<br>Administrativo</h7>
                            <form method="POST" action="inicio.php">
                                <div class="form-group mt-4">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" placeholder="name@domain.com">
                                </div>
                                <div class="form-group">
                                    <label for="contrasena">Contraseña</label>
                                    <input type="password" class="form-control" id="contrasena" name="txtpass"
                                    placeholder="******">
                                </div>
                                <div>
                                    <a href="tutoriales.php" class="btn btn-info mr-2">Tutoriales</a>
                                    <button type="submit" class="btn btn-info">Ingresar</button>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
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