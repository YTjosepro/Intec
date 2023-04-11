<?php
//Cargamos las librerias necesarias
//funcion para autocargar las clases
require_once 'baseDeDatos.php';

$vbase_datos    = "intecpro_aires";
$vusuario_mysql = "intecpro_aires";
$vpass_mysql    = "6uIe@_INC8]D";

//creamos la conexion a mysql
$cm = new dbMysql("www.intecproyectosysoluciones.com",$vusuario_mysql,$vpass_mysql,$vbase_datos);

//consultamos la cantidad de registros totales
$vsql = "SELECT idusuario, usuario FROM usuario";

if($co = $cm->consulta($vsql))
{
	//declaramos variables
	$vid           = "";
	$vdescripcion   = "";
	$vregistros    = array();
	$vcontador     = 0;
	
	
	while($re = mysqli_fetch_array($co))
	{
		if(!empty($re[0]))
		{
			$vid          = $re[0];
			$vdescripcion = $re[1];
		
			//llenamos el array
			$vregistros[$vcontador]['id']          =  $vid;
			$vregistros[$vcontador]['descripcion'] =  $vdescripcion;
			$vcontador++;
			
		}
	}
	
	//imprimimos el json
	echo json_encode($vregistros);
	header('Content-Type: application/json');
}
?>