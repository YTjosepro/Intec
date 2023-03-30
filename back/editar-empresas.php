<?php

    include 'conexion.php';
    include 'conexion2.php';

    $content_current = file_get_contents('php://input');
    $json_current = json_decode($content_current, true);

    $id = $json_current["id"];
    $cc_nit = $json_current["cc_nit"];
    $nombre = $json_current["nombre"];
    $direccion = $json_current["direccion"];
    $telefono = $json_current["telefono"];
    $correo = $json_current["correo"];

    $sentencia = $bd->prepare("UPDATE empresas SET CC_NIT = ?, nombre = ?, direccion = ?, telefono = ?, correo = ? WHERE ID = ?;");
    $resultado = $sentencia->execute([$cc_nit,$nombre,$direccion,$telefono,$correo,$id]);

    if ($resultado === TRUE) {
        echo "Realizado correctamente";
    }else {
        echo "Error";
    };
?>