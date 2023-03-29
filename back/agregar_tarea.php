<?php
    include('conexion.php');

    if(isset($_POST['nombre'])){
        echo $_POST;
        $CC_NIT= $_POST['CC_NIT'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $query = "INSERT into empresas (CC_NIT, nombre, direccion, telefono, correo) VALUES ('$CC_NIT', '$nombre', '$direccion', '$telefono', '$correo')";
        $result = mysqli_query($coneccion, $query);
        if(!$result) {
            http_response_code(500);
            die('Query Failed');
        }
        $respuesta = 'empresas Added Successfully';
        http_response_code(200);
        echo $respuesta;
    }
?>