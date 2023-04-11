<?php
function checkPuerto($dominio,$puerto){
    
    $starttime = microtime(true);
    $file      = @fsockopen ($dominio, $puerto, $errno, $errstr, 5);
    $stoptime  = microtime(true);
    $status    = 0;
  
    if (!$file){    
        $status = -1;  // Sitio caído
    } else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
    }
     
    if ($status <> -1) {
        return true;
    } else {
        return false;
    }
     
}

class dbMysql{

	private $conexion;
	private $servidor;
	private $usuario;
	private $password;
	private $puerto;
	private $db;
	private $resultado;
	
	public function __construct($servidor,$usuario,$password,$db,$puerto=3306){

		$this->servidor=$servidor;
		$this->usuario=$usuario;
		$this->password=$password;
		$this->db=$db;
		$this->puerto=$puerto;
		$this->conexion = mysqli_connect($this->servidor.":".$this->puerto, $this->usuario, $this->password,$this->db);
		$this->conexion->set_charset('utf8');
	}
	
	public function consulta($sql){
		
		return $this->resultado = mysqli_query($this->conexion,$sql);

	}	
	
	public function __destruct(){

		$this->conexion->close();
	}
}

$vbase_datos    = "intecpro_aires";
$vusuario_mysql = "intecpro_aires";
$vpass_mysql    = "6uIe@_INC8]D";

?>