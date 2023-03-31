<?php
    include('conexion.php');

    if(isset($_POST['nombre'])){
        $CC_NIT= $_POST['CC_NIT'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        
        // Validar que no existe un registro con el mismo CC_NIT
        $query_validacion = "SELECT * FROM empresas WHERE CC_NIT = '$CC_NIT'";
        $result_validacion = mysqli_query($conexion, $query_validacion);
        if(mysqli_num_rows($result_validacion) > 0) {
            // Ya existe un registro con ese CC_NIT, no se puede insertar
            $respuesta = 'Ya existe una empresa con ese CC_NIT';
            echo $respuesta;
            exit; // Salir del script
        }
        
        // Si no hay registro con el mismo CC_NIT, se puede insertar
        $query = "INSERT into empresas (CC_NIT, nombre, direccion, telefono, correo) VALUES ('$CC_NIT', '$nombre', '$direccion', '$telefono', '$correo')";
        $result = mysqli_query($conexion, $query);
        if(!$result) {
            die('Query Failed');
        }
        $respuesta = 'empresas Added Successfully';
        http_response_code(200);
        echo $respuesta;
    }
?>