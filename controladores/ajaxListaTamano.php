<?php
require_once "../modelos/ListaTamano.php";
$tamano = new ModeloTamano();
switch ($_GET["op"]) {
    case 'listar':
        $rspta=$tamano->ListaTamano();
        $data=Array();
        while ($reg=$rspta->fetch_object()){
            $data[]=array(
                "pro_tamano"    =>$reg->pro_tamano,
            );
        }
        echo json_encode($data);
    break;
    case 'filtertamano':
        $rspta=$tamano->ListarxTamano($_GET['tamano'],$_GET['id']);
        $data=Array();
        while ($reg=$rspta->fetch_object()){
            $color1=Array();
            $listacolor=$tamano->ListarColor($reg->pro_id);
                
            while( $a=$listacolor->fetch_object()){
                $color1[]=$a;
            }
            $data[]=array(array(
                "id" 	 =>$reg->pro_id,
                "nombre" =>$reg->pro_nombre,
                "imagen" =>$reg->pro_imagen,
                "precio" =>$reg->pro_precio,
               
            ), $color1);
        }
        echo json_encode($data);

    break;
}