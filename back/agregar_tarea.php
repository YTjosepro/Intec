<?php
    if (!isset($_POST['nombre'])) {
        $respuesta = 'no se encontró nada';
    }else{
        $respuesta = 'listo';
    }
    echo $respuesta;
?>