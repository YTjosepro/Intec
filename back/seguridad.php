<?php
    session_start();

    if (!isset($_SESSION["usuario"])) {
      header("location: ../front/login.php");
      exit;
    }
?>