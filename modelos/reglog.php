<?php
require_once 'conexion.php';
class Reglog {
	public $id;
	public $nombre;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this->conexion = new Conexion();
	
	}

	public static function Registrar($nombre,$apellidos,$email,$clavehash,$token) {
		$conexion = new Conexion ();
		$listado = $conexion->actualizar("INSERT INTO tab_clientes (cli_nombre,cli_apellidos,cli_email,cli_clave,token) VALUES ('$nombre','$apellidos','$email','$clavehash','$token')");
		$conexion->cerrar();
		return $listado;
	}
	
	public static function Login($email,$clave) {
		$conexion = new Conexion ();
		$array = array();
		$listado = $conexion->actualizar("SELECT * FROM tab_clientes WHERE cli_email ='$email' AND cli_estado = ".true." ");
		while ($array2 = mysqli_fetch_array($listado)) {
			if (password_verify($clave, $array2["cli_clave"])) {
					 $array[]= $array2; 
			} 
		 }
		$conexion->cerrar();
		return $array;
    }
	public static function get_cli() {
		$conexion = new Conexion ();
		$array = array();
		$listado = $conexion->actualizar("SELECT * FROM tab_clientes ORDER BY cli_id DESC limit 1");
		$array= mysqli_fetch_array($listado);
		
		$conexion->cerrar();
		return $array;
	}
	public  static function  verificar($a,$b){
		$conexion = new Conexion ();
		if ($b==1){
		$f=$conexion->actualizar1("SELECT * FROM tab_clientes WHERE token='$a' LIMIT 1");
		$conexion->cerrar();

		return $f;
	}else{

		$f=$conexion->actualizar("UPDATE tab_clientes SET cli_estado=1 WHERE token='$a'");
		$conexion->cerrar();
		return $f;

		

	}
}

public static function valueE($a,$b){
	$conexion = new Conexion ();
if ($b==1){
	
	$f=$conexion->actualizar("SELECT * FROM tab_clientes WHERE cli_email='$a'");
	$conexion->cerrar();
	return $f;

}else{

	$C=array();
	$f=$conexion->actualizar("SELECT token FROM tab_clientes WHERE cli_email='$a'");
	$conexion->cerrar();
	$C= mysqli_fetch_array($f);
	return $C;
}
}

public static function actualizar($a,$b){
	$conexion = new Conexion ();
	$f=$conexion->actualizar("UPDATE  tab_clientes SET cli_clave='$a' WHERE token='$b'");
	$conexion->cerrar();
	return $f;


}

}

?>