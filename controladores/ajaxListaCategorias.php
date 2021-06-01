<?php 
require_once "../modelos/Listacategorias.php";
$categorias = new ModeloCategorias();
	switch ($_GET["op"]) {
        case 'listar':
                $rspta=$categorias->ListaCategorias();
                $data=Array();
                while ($reg=$rspta->fetch_object()){
                    $data[]=array(
                        "cat_id" 	 =>$reg->cat_id,
                        "cat_nombre" =>$reg->cat_nombre,
                    );
                }
                echo json_encode($data);
        break;

        case 'listarTendencia':
            $rspta=$categorias->ListarTendencia();

            $data=Array();
          
            while ($reg=$rspta->fetch_object()){
                $color1=Array();
                $listacolor=$categorias->ListarColor($reg->pro_id);
                
               while( $a=$listacolor->fetch_object()){
                   $color1[]=$a;
               }


                $data[]=array(array(
                    "id" 	 =>$reg->pro_id,
                    "nombre" =>$reg->pro_nombre,
                    "imagen" =>$reg->pro_imagen,
                    /*"color1" =>$reg->color1,*/
                    "precio" =>$reg->pro_precio,
                   
                ), $color1);
            }
            echo json_encode($data);
        break;

        case 'ImgTendencia':
            $rspta=$categorias->ImgTendencia();
            $data=Array();
            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "tendencia" =>$reg->cat_imagen,
                );
            }
            echo json_encode($data);
        break;

        case 'prodsearch':
            $rspta=$categorias->ListarProdSearched($_GET['serch']);
            $data=Array();
            while ($reg=$rspta->fetch_object()){
                $color1=Array();
                $listacolor=$categorias->ListarColor($reg->pro_id);
                
               while( $a=$listacolor->fetch_object()){
                   $color1[]=$a;
               }
               $data[]=array(array(
                "id" 	 =>$reg->pro_id,
                "nombre" =>$reg->pro_nombre,
                "imagen" =>$reg->pro_imagen,
                /*"color1" =>$reg->color1,*/
                "precio" =>$reg->pro_precio,
               
            ), $color1);
            }
            echo json_encode($data);
        break;

        case 'flitercolor':
            $rspta=$categorias->filterByColor($_GET['color']);
            $data=Array();
            while ($reg=$rspta->fetch_object()){
                $color1=Array();
                $listacolor=$categorias->ListarColor($reg->pro_id);
                
               while( $a=$listacolor->fetch_object()){
                   $color1[]=$a;
               }
               $data[]=array(array(
                "id" 	 =>$reg->pro_id,
                "nombre" =>$reg->pro_nombre,
                "imagen" =>$reg->pro_imagen,
                /*"color1" =>$reg->color1,*/
                "precio" =>$reg->pro_precio,
               
            ), $color1);
            }
            echo json_encode($data);
        break;

        case 'btnRecomd':
            $rspta=$categorias->orderByRecomend();
            $data=Array();
            while ($reg=$rspta->fetch_object()){
                $color1=Array();
                $listacolor=$categorias->ListarColor($reg->pro_id);
                
               while( $a=$listacolor->fetch_object()){
                   $color1[]=$a;
               }
               $data[]=array(array(
                "id" 	 =>$reg->pro_id,
                "nombre" =>$reg->pro_nombre,
                "imagen" =>$reg->pro_imagen,
                /*"color1" =>$reg->color1,*/
                "precio" =>$reg->pro_precio,
               
            ), $color1);
            }
            echo json_encode($data);
        break;
        
    }