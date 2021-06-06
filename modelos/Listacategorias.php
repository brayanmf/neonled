<?php
require_once 'conexion.php';

class ModeloCategorias
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
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias WHERE cat_estado = 'Activo' ");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListarTendencia()
    {
        $conexion = new Conexion();
        /*p.color*/
        /*p.precio */
      /*   $listado = $conexion->actualizar("SELECT p.pro_id, p.pro_nombre, p.pro_imagen,p.pro_precio
        FROM tab_producto p INNER JOIN tab_categorias c ON c.cat_id = p.pro_categoria
        WHERE p.pro_categoria = '10'");*/

        $listado = $conexion->actualizar("SELECT p.pro_id, p.pro_nombre, p.pro_imagen,p.pro_precio
        FROM tab_producto p INNER JOIN tab_categorias c ON c.cat_id = p.pro_categoria
        WHERE p.pro_categoria = '10'");
        

        $conexion->cerrar();
        return $listado;
    }

    public static function ListarColor($a){
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT f.rgb FROM tab_producto AS p INNER JOIN tab_productoxcolor AS pf ON pf.id_producto=p.pro_id INNER JOIN tab_color AS f ON f.id=pf.id_color where p.pro_id=$a");
        $conexion->cerrar();
        return $listado;

    }

    public static function ImgTendencia($b)
    {
        if($b==0){
            $aux="WHERE cat_id = 10";
        }else{$aux="WHERE cat_id=$b";}
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_categorias $aux");
        $conexion->cerrar();
        return $listado;
    }

    public static function ListarxCategoria($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT p.pro_id, p.pro_nombre, p.pro_imagen,p.pro_precio
        FROM tab_producto p INNER JOIN tab_categorias c ON c.cat_id = p.pro_categoria
        WHERE p.pro_categoria = $id");
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


    public static function ListarProdSearched($textSearch){
  
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT  pro_id,pro_nombre,pro_imagen,pro_precio
        FROM tab_producto   WHERE   pro_nombre LIKE '%$textSearch%'");
        $conexion->cerrar();
        return $listado;
    }

    public static function filterByColor($a,$b)
    {
        if($b==0){
            $aux="AND p.pro_categoria=10";
        }else{$aux="AND p.pro_categoria=$b";}
        
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT DISTINCT p.pro_id,p.pro_nombre,p.pro_imagen,p.pro_precio FROM tab_producto AS p INNER JOIN tab_productoxcolor AS pf ON pf.id_producto=p.pro_id INNER JOIN tab_color AS f ON f.id=pf.id_color WHERE f.id=$a $aux");
        $conexion->cerrar();
        return $listado;
    }

    public static function orderByRecomend()/**recomendado */
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT DISTINCT p.pro_id, p.pro_nombre, p.pro_imagen,p.pro_precio
        FROM tab_producto as p INNER JOIN tab_categorias  as c ON c.cat_id = p.pro_categoria ORDER BY rand()  LIMIT 12 ");
        $conexion->cerrar();
        return $listado;
    }

  

}
