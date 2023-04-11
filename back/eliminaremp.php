<?php
ini_set('error_reporting', E_ALL );
    if (!isset($_GET['ID'])) {
        exit();
    }

    $codigo = $_GET['ID'];
    include 'baseDeDatos.php';
    $sentencia = $bd->prepare("DELETE FROM empresas WHERE ID = ?;");
    $resultado = $sentencia->execute([$codigo]);

    if ($resultado === TRUE) {
        header('Location: ../front/empresas.php');
    }else {
        echo "Error";
    }
?>