<?php
    include('baseDeDatos.php');
    include('conexion.php');
    include('conexion2.php');
    $query   = "SELECT * from empresas";
    $result  = mysqli_query($conexion, $query);
    if(!$result) 
    {
        die('Query Failed' . mysqli_error($conexion));
    }
    $json = array();
    while($row = mysqli_fetch_array($result))
    {
       $json[] = array
        (
            'idempresas'  => $row['idempresas'],
            'nit'         => $row['nit'],
            'nombre'      => $row['nombre'],
            'telefono'    => $row['telefono'],
            'correo'      => $row['correo'],
            'direccion'   => $row['direccion']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
?>
