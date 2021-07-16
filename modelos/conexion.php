<?php
class Conexion {
	private $conexion;
	public function __construct () {
		$this->conexion = new mysqli('localhost', 'root', '', 'neonl');
		$this->conexion->set_charset('utf8');
	}
	
	public function actualizar ($sql) {
		return $this->conexion->query($sql);
	}

	public function cerrar () {
		$this->conexion->close();
	}
	public function actualizar1($a){
		$result=mysqli_query($this->conexion,$a);

		return  $result;

	}
}
?>