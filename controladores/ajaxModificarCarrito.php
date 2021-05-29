<?php 
require_once "../modelos/modificarcarrito.php";
$compras = new ModificarCarrito();
	switch ($_GET["op"]) {

        case 'listar':

			$rspta=$compras->ListaCompras($_POST["id"]);
			$data=Array();
			while ($reg=$rspta->fetch_object()){
				$data[]=array(
					"id" 	  =>$reg->com_id,
					"cliente" =>$reg->com_cliente,
					"producto"=>$reg->pro_nombre,
					"precio"  =>$reg->com_precio,
					"cantidad"=>$reg->com_cantidad,
					"imagen"  =>$reg->com_imagen,
					//"tamano"  =>$reg->com_tamano,
					"total"  =>$reg->com_total,
				);
			}
			echo json_encode($data);
		break;

		case 'montototal':
			$rspta=$compras->MontoTotal($_POST["id"]);
			$abc   = $rspta->fetch_array()[0];
			echo json_encode($abc);
		break;

		case 'cantidadproducto':
			$rspta=$compras->CantidadProducto($_POST["id"]);
			$abc   = $rspta->fetch_array()[0];
			echo json_encode($abc);
		break;

		case 'aumentarproducto':
			$id 	    = $_POST["id"];
			$cantidad 	= $_POST["cantidad"];
			$precio     = $_POST["precio"];
	
			$cantidad1  = $cantidad+1;
			$montototal = $cantidad1*$precio;

			$rspta=$compras->AumentarProducto($id,$cantidad1,$montototal);
			if ($rspta) {
				echo "Cambio+";
			}else{
				echo "No cambio";
			}
		break;

		case 'disminuirproducto':
			$id 	    = $_POST["id"];
			$cantidad 	= $_POST["cantidad"];
			$precio     = $_POST["precio"];
	
			$cantidad1  = $cantidad-1;

			if ($cantidad1==0) {
				echo "cantidad0";
			}else{
				$montototal = $cantidad1*$precio;
				$rspta=$compras->AumentarProducto($id,$cantidad1,$montototal);
				if ($rspta) {
					echo "Cambio-";
				}else{
					echo "No cambio";
				}
			}

		break;

		case 'eliminar':

			$id = $_POST["id"];
			$rspta = $compras->EliminarProducto($id);
			//echo json_encode($rspta);
			if (!$rspta) {
				echo "No lo eliminaste";
			}else{
				echo "Si lo eliminaste";
			}	
        break;
    }    
?>