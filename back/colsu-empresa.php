<?php

    include('conexion.php');
    $query = "SELECT * from empresas";
    $result = mysqli_query($conexion, $query);

    if(!$result) {
        die('Query Failed' . mysqli_error($conexion));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
       $json[] = array(
        'ID' => $row['ID'],
        'CC_NIT' => $row['CC_NIT'],
        'nombre' => $row['nombre'],
        'direccion' => $row['direccion'],
        'telefono' => $row['telefono'],
        'correo' => $row['correo']
       );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring
?>