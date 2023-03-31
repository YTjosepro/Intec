<?php
    session_start();
    include_once 'conexion.php';
    include_once 'conexion2.php';
    $usuario = $_POST['txtUsu'];
    $contraseña = $_POST['txtPass'];
    $sentencia = $bd->prepare('select * from administradores where usuario = ? and contraseña = ?;');
    $sentencia->execute([$usuario, $contraseña]);
    $datos = $sentencia->fetch(PDO::FETCH_OBJ);
    
    if ($datos === FALSE) {
        header('Location: ../front/login.php');
    }elseif ($sentencia->rowCount() == 1) {
        $_SESSION['nombre'] = $datos->usuario;
        header('Location: ../front/inicio.php');
    }
?>