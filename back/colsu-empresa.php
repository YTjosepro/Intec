<?php

    include('conexcion.php');
    $query = "SELECT * from empresas";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query Failed' . mysqli_error($connection));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
       $json[] = array(
        'ID' => $row['ID'],
        'CC_NIT' => $row['CC/NIT'],
        'nombre' => $row['nombre'],
        'direccion' => $row['direccion'],
        'telefono' => $row['telefono'],
        'correo' => $row['correo    ']
       );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring
?>