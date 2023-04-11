    <!-- cerrar sesion  -->

<?php
    session_start();
    session_destroy();
    header('Location: ../aires/front/login.php');
    exit;
?>
