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

    public static function ListarColor($a){
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT f.rgb FROM tab_producto AS p INNER JOIN tab_productoxcolor AS pf ON pf.id_producto=p.pro_id INNER JOIN tab_color AS f ON f.id=pf.id_color where p.pro_id=$a");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListarxPrecio($precio_min,$precio_max)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_producto WHERE pro_estado = 'Activo' and pro_precio BETWEEN $precio_min and $precio_max ORDER BY pro_precio");
        $conexion->cerrar();
        return $listado;
    }
}
