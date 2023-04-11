<?php
    //print_r($_POST);
    // if (!isset($_POST['oculto'])) {
    //     header('location: ../front/empresas.php');
    // }

    include 'baseDeDatos.php';
    $id2 = $_POST['id2'];
    $paterno2 = $_POST['txt2Paterno'];
    $materno2 = $_POST['txt2Materno'];
    $nombre2 = $_POST['txt2Nombre'];
    $parcial2 = $_POST['txt2Parcial'];
    $final2 = $_POST['txt2Final'];

    $sentencia = $bd->prepare("UPDATE empresas SET CC_NIT = ?, nombre = ?, direccion = ?, telefono = ?, correo = ? WHERE ID = ?;");
    $resultado = $sentencia->execute([$paterno2,$materno2,$nombre2,$parcial2,$final2,$id2]);

    if ($resultado === TRUE) {
        header('Location: ../front/empresas.php');
    }else {
        echo "Error";
    };
?>