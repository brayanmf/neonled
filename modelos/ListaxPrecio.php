<?php
require_once 'conexion.php';

class ModeloxPrecio
{
    public $id;
    public $nombre;
    public $precio;
    private $conexion;

    public function __construct()
    {
        $this->id = 0;
        $this->nombre = '';
        $this->precio = 0;
        $this->conexion = new Conexion();
    }

    public static function ListarxPrecio($precio_min,$precio_max)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SELECT * FROM tab_producto WHERE pro_estado = 'Activo' and pro_precio BETWEEN $precio_min and $precio_max");
        $conexion->cerrar();
        return $listado;
    }
}
