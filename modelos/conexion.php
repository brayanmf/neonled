<?php
class Conexion {
	private $conexion;
	public function __construct () {
		$this->conexion = new mysqli('localhost', 'root', '', 'neonl');
		$this->conexion->set_charset('utf8');
	}
	//$this->conexion = new mysqli('localhost', 'ghxumdmy_1neon7led1store7', '-&LZOp2YwK[m', 'ghxumdmy_$neon$led$store$');
	/*public function consultar ($sql) {
		return $this->conexion->query($sql)->fetch_all();
	}*/
	
	public function actualizar ($sql) {
		return $this->conexion->query($sql);
	}

	public function cerrar () {
		$this->conexion->close();
	}
}
?>