<?php
require_once 'conexion.php';

class ModeloxCategorias
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

    public static function ListaCategorias()
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_estado = 'Activo' LIMIT 9");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListarxCategoria($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT p.pro_id, p.pro_nombre, p.pro_imagen,p.pro_precio
        FROM tab_producto p INNER JOIN tab_categorias c 
        ON c.cat_id = p.pro_categoria
        WHERE p.pro_categoria = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function ImgCategoria($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_id = '$id'");
        $conexion->cerrar();
        return $listado;
    }
    public static function ListarColor($a){
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT f.rgb FROM tab_producto AS p INNER JOIN tab_productoxcolor AS pf ON pf.id_producto=p.pro_id INNER JOIN tab_color AS f ON f.id=pf.id_color where p.pro_id=$a");
        $conexion->cerrar();
        return $listado;

    }


}
