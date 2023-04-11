<?php
    session_start();
    if (!isset($_SESSION['nombre'])) {
        header('Location: login.php');
        }
    if (!isset($_GET['id'])) {
    header('location: empresas.php');
        }

include 'back/baseDeDatos.php';
$id = $_GET['ID'];

$sentencia = $bd->prepare("SELECT * FROM empresas WHERE ID = ?;");
$sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar empresas</title>
</head>

<body>
    <center>
        <h3>Editar alumnos:</h3>
        <form method="POST" action="editarproceso.php">
            <table>
                <tr>
                    <td>CC/NIT: </td>
                    <td><input type="text" name="txt2Paterno" value="<?php echo $persona->CC_NIT; ?>"></td>
                </tr>
                <tr>
                    <td>Nombre/Razon social: </td>
                    <td><input type="text" name="txt2Materno" value="<?php echo $persona->nombre; ?>"></td>
                </tr>
                <tr>
                    <td>Direccion: </td>
                    <td><input type="text" name="txt2Nombre" value="<?php echo $persona->nombres; ?>"></td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="text" name="txt2Parcial" value="<?php echo $persona->telefono; ?>"></td>
                </tr>
                <tr>
                    <td>Correo: </td>
                    <td><input type="text" name="txt2Final" value="<?php echo $persona->correo; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $persona->ID; ?>">                    
                    <td colspan="2"><input type="submit" value="EDITAR EMPRESA"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>