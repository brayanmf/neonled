<?php
require_once 'conexion.php';

class ModeloProductos
{
    public $id;
    public $nombre;
    private $conexion;

    public function __construct()
    {
        $this->id = 0;
        $this->nombre = '';
        $this->conexion = new Conexion();
    }

    public static function DetalleProducto($p)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_producto WHERE pro_id = '$p'");
        $conexion->cerrar();
        return $listado;
    }

}
