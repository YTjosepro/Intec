<?php
    session_start();
    include ('baseDeDatos.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $conn = mysqli_connect('www.intecproyectosysoluciones.com', 'intecpro_aires', '6uIe@_INC8]D', 'intecpro_aires');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //print_r($_POST);
        //$usuario = mysqli_real_escape_string($conn, $_POST["usuario"]);
        //$password = mysqli_real_escape_string($conn, $_POST["password"]);

        $usuario  = $_POST["usuario"];
        $password = $_POST["password"];
      
        $sql = "SELECT * FROM usuario WHERE usuario = '".$usuario."' AND password = '".$password."'";
        $result = mysqli_query($conn, $sql);

        //echo $sql;

        print_r($result);
      
        if (mysqli_num_rows($result) == 1)
        {
          // Inicio de sesión exitoso
          $_SESSION["usuario"] = $usuario;
          header("location: ../front/index.php");
        }
        else
        {
          // Credenciales incorrectas
          header('location: ../front/login.php');
        }
      }
?>