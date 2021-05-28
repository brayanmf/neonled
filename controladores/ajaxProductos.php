<?php 
require_once "../modelos/productos.php";
$categorias = new ModeloProductos();
	switch ($_GET["op"]) {
        case 'detalleProducto':
                $rspta=$categorias->DetalleProducto($_POST["prod"]);
                $data=Array();
                while ($reg=$rspta->fetch_object()){
                    $data[]=array(
                        "nombre" =>$reg->pro_nombre,
                        "imagen" =>$reg->pro_imagen,
                        "precio" =>$reg->pro_precio,
                        "tamano" =>$reg->pro_tamano,
                    );
                }
                echo json_encode($data[0]);
        break;

        
    }