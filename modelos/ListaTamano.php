<?php
require_once 'conexion.php';

class ModeloTamano
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

    public static function ListaTamano()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT DISTINCT(pro_tamano) FROM tab_producto ORDER BY pro_tamano");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListarColor($a){
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT f.rgb FROM tab_producto AS p INNER JOIN tab_productoxcolor AS pf ON pf.id_producto=p.pro_id INNER JOIN tab_color AS f ON f.id=pf.id_color where p.pro_id=$a");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListarxTamano($a,$b)
    {
        $conexion = new Conexion();
        if($b==0){
            $aux="AND pro_categoria=10";
        }else{$aux="AND pro_categoria=$b";}

        $listado = $conexion->actualizar("SELECT  pro_id, pro_nombre, pro_imagen, pro_precio FROM tab_producto WHERE pro_tamano = '$a' $aux");
        $conexion->cerrar();
        return $listado;
    }
}
