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
        $listado = $conexion->actualizar("SELECT p.pro_id, p.pro_nombre, p.pro_imagen
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

}
