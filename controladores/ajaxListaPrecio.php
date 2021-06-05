<?php
require_once "../modelos/ListaPrecio.php";
$producto = new ModeloxPrecio();
switch("op"){
    case "precio":
        $precioMinimo = $_GET["min"];
        $precioMaximo = $_GET["max"];
        $rspta=$producto->ListarxPrecio($precioMinimo,$precioMaximo);
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
        break;
        json_encode($data);
    }
    /*
    foreach ($data as $k => $d) {
        echo "<article class='article-card'><a href='producto.php?pro=$d[0]'><img src='$d[5]' alt=''></a><h3>$d[2]</h3><p>$d[4]</p></article>";
    }*/