<?php
require_once "../modelos/ListaxPrecio.php";
$producto = new ModeloxPrecio();
require_once "../modelos/Listacategorias.php";
$productoRGB = new ModeloCategorias();
if(isset($_POST["btn_range"])){
    $rango=$_POST['my_range'];
    $precioSeparado = explode(";", $rango);
    $precioMinimo = $precioSeparado[0];
    $precioMaximo = $precioSeparado[1];
    $rspta=$producto->ListarxPrecio($precioMinimo,$precioMaximo);
    $data=Array();
    while($f=mysqli_fetch_array($rspta)){
        $data[]=$f;
    }
    foreach ($data as $k => $d) {
        echo "<article class='article-card'><a href='producto.php?pro=$d[0]'><img src='$d[5]' alt=''></a><h3>$d[2]</h3><p>$d[4]</p></article>";
    }
    /*
    $rgb=$productoRGB->ListarTendencia();
    $colores=Array();
    while ($reg=$rgb->fetch_object()){
        $color1=Array();
        $listacolor=$productoRGB->ListarColor($reg->pro_id);
        while($a=$listacolor->fetch_object()){
            $color1[]=$a;
        }
        $colores[][]=$color1;
    }
    $cadena = "";
    if (count($data)>0){
        for ($i=0;$i<count($data);$i++){
            $cadena2="";
            for($j=0;$j<count($colores[$i][1]);$j++){
                $cadena2 +="<div class='c' style='background:"+data[$i][1][$j]["rgb"]+";'></div>";
            }
            $cadena += "<article class='article-card'><a href='producto.php?pro=$i[0]'><img src='$i[5]' alt=''></a><h3>$i[2]</h3><div class='cuadrado'>$cadena2</div><p>$i[4]</p></article>";
        }
        echo $cadena;
    }
    /*
    while ($reg=$rspta->fetch_object()){
        $data[]=array(
            "id" 	 =>$reg->pro_id,
            "nombre" =>$reg->pro_nombre,
            "imagen" =>$reg->pro_imagen,
        );
    }
    echo json_encode($data);
    */
}