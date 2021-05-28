<?php
require_once 'conexion.php';

class ModificarCarrito
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

    public static function ListaCompras($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT l.com_id, l.com_cliente, l.com_producto, l.com_precio, l.com_cantidad, l.com_imagen, l.com_total, p.pro_nombre 
        FROM tab_listacompra l INNER JOIN tab_producto p
        ON l.com_producto = p.pro_id
        WHERE com_estado='Activo' AND com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function MontoTotal($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SUM(com_total) AS montototal FROM tab_listacompra WHERE com_estado='Activo' AND com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function CantidadProducto($id)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT SUM(com_cantidad) AS productototal FROM tab_listacompra WHERE com_estado='Activo' AND com_cliente = '$id'");
        $conexion->cerrar();
        return $listado;
    }

    public static function AumentarProducto($id,$cantidad1,$montototal)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("UPDATE tab_listacompra SET com_cantidad='$cantidad1', com_total='$montototal' WHERE com_id = '$id' ");
        $conexion->cerrar();
        return $listado;
    }

    public function EliminarProducto($id) {
        $conexion = new Conexion ();
        $listado = $conexion->actualizar("DELETE FROM tab_listacompra WHERE com_id = '$id'");
		$conexion->cerrar();
		return $listado;
    }
}

?>