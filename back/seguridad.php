<?php
    session_start();
    if (!isset($_SESSION['nombre'])) {
        header('Location: login.php');
    }elseif(isset($_SESSION['nombre'])) {
        include '../back/conexion.php';
    }else {
        echo "Error en el sistema";
    }
?>