<?php
$rango=$_POST['my_range'];
echo "Aquí está el rango: $rango";
$precioSeparado = explode(";", $rango);
$precioMinimo = $precioSeparado[0];
$precioMaximo = $precioSeparado[1];
echo "<br> $precioMinimo";
?>