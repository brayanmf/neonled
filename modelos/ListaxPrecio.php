<?php
require_once 'conexion.php';

class ModeloxPrecio
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

    public static function ListarxPrecio($precio_min,$precio_max)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_producto WHERE pro_estado = 'Activo' and pro_precio BETWEEN $precio_min and $precio_max ORDER BY pro_precio");
        $conexion->cerrar();
        return $listado;
    }
}
