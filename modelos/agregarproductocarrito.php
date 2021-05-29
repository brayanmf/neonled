<?php
require_once 'conexion.php';

class AgregarProducto
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

    public static function NoRepetirProducto($producto,$cliente,$precio)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("SELECT * FROM tab_listacompra WHERE com_cliente = '$cliente' AND com_precio = '$precio' AND com_producto = '$producto'");
        $conexion->cerrar();
        return $listado;
    }

    public static function InsertarCompras($producto,$precio,$tamano,$cantidad,$imagen,$cliente,$monto)
    {
        $conexion = new Conexion();
        $listado = $conexion->actualizar("INSERT INTO tab_listacompra (com_producto, com_precio, com_tamano, com_cantidad, com_imagen, com_cliente, com_total,com_estado) VALUES('$producto','$precio','$tamano','$cantidad','$imagen','$cliente','$monto','Activo')");
        $conexion->cerrar();
        return $listado;
    }
    
}