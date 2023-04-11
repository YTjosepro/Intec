<?php
    session_start();
    include ('baseDeDatos.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $conn = mysqli_connect('www.intecproyectosysoluciones.com', 'intecpro_aires', '6uIe@_INC8]D', 'intecpro_aires');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $usuario  = $_POST["usuario"];
        $password = $_POST["password"];
      
        $sql = "SELECT * FROM usuario WHERE usuario = '".$usuario."' AND password = '".$password."'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1)
        {
          // Inicio de sesión exitoso
          $_SESSION["usuario"] = $usuario;
          header('Location: ../front/index.php');
        } 
        else
        {
          // Credenciales incorrectas
          header("Location: ../front/login.php");
        }
      }
?>