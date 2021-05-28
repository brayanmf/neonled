<?php 
require_once "../modelos/agregarproductocarrito.php";
$compras = new AgregarProducto();
	switch ($_GET["op"]) {

		case 'agregarproducto':

			$producto=$_POST["producto"];
			$precio	 =$_POST["precio"];
			$tamano	 =$_POST["tamano"];
			$cantidad=$_POST["cantidad"];
			$cliente =$_POST["cliente"];
			$imagen	 =$_POST["imagen"];
			
			if ($producto=="" || $precio=="" || $tamano=="" || $cantidad=="" || !is_numeric($cantidad) || $imagen=="" || $cliente=="" || $tamano == "" || $cantidad >= 6 || $cantidad <= 0) {
				echo "vacio";
			}else{

				$rspta1=$compras->NoRepetirProducto($producto,$cliente,$precio);
				$data=Array();
					while ($reg=$rspta1->fetch_object()){
					$data[]=array(
						"cliente" =>$reg->com_cliente,
						);
					}
				//echo json_encode($data);
				
				if ($data == []) {	
					$monto = $precio*$cantidad;
					$rspta=$compras->InsertarCompras($producto,$precio,$tamano,$cantidad,$imagen,$cliente,$monto);
					if ($rspta){
						echo "guardado";
					}else{
						echo "error en la consulta";
						//echo "$rspta";
					}
				}else{
					echo "producto_repetido";
				}
			}
		break;

		
	}


	

?>