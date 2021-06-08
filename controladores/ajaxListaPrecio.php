<?php
require_once "../modelos/ListaPrecio.php";
$producto = new ModeloxPrecio();
if (isset($_GET['btn_range'])){
    $rangoPrecio = $_GET['my_range'];
    $precioSeparado = explode(";", $rangoPrecio);
    $min = $precioSeparado[0];
    $max = $precioSeparado[1];
    $rspta = $producto->ListarxPrecio($min,$max);
    print_r($rspta);
    $data = Array();
    foreach ($data as $k => $d) {
        print_r($d[0]);
        echo "<article class='article-card'><a href='producto.php?pro=$d[0]'><img src='$d[5]' alt=''></a><h3>$d[2]</h3><p>$d[4]</p></article>";
    }
}

/*switch("op"){
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
    }*/
    /*
    foreach ($data as $k => $d) {
        echo "<article class='article-card'><a href='producto.php?pro=$d[0]'><img src='$d[5]' alt=''></a><h3>$d[2]</h3><p>$d[4]</p></article>";
    }*/