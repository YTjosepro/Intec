<?php
$contraseña = '';
$usuario = 'root';
$nombrebd = 'intecpru';

try {
    $bd = new PDO(
        'mysql:host=localhost; 
        dbname=' . $nombrebd,
        $usuario,
        $contraseña
    );
} catch (Exception $e) {
    echo "Error de conexión " . $e->getMessage();
}

?>