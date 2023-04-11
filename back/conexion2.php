<?php
$password   = '6uIe@_INC8]D';
$usuario    = 'aires@intecproyectosysoluciones.com';
$nombrebd   = 'intecpro_aires';

try {
    $bd = new PDO(
        'mysql:host=www.intecproyectosysoluciones.com; 
        dbname=' . $nombrebd,
        $usuario,
        $password
    );
} catch (Exception $e) {
    echo "Error de conexión " . $e->getMessage();
}

?>