<?php
require_once "../modelos/ListaPrecio.php";
$producto = new ModeloxPrecio();
switch ($_GET["op"]) {
    case "precio":
       // $precioMinimo = $_GET["min"];
        //$precioMaximo = $_GET["max"];
        $rspta=$producto->ListarxPrecio($_GET["min"],$_GET["max"]);
        $data=Array();
        while($reg=$rspta->fetch_object()){
            $color1=Array();
            $listacolor=$producto->ListarColor($reg->pro_id);
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
    /*
    foreach ($data as $k => $d) {
        echo "<article class='article-card'><a href='producto.php?pro=$d[0]'><img src='$d[5]' alt=''></a><h3>$d[2]</h3><p>$d[4]</p></article>";
    }*/