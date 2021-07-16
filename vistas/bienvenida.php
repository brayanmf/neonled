<?php 
session_start();
 require_once '../controladores/function.php';
 require_once "../modelos/reglog.php";


if(isset($_GET['token'])){
   /*$c->verificarC($token);*/
   verificarC($_GET['token']);
}

/*if(isset($_GET['actualizar-e'])){
    $passwordToken=$_GET['actualizar-e'];
  
   refrescarC($passwordToken);0
}*/


/*if(isset($_GET['logout']) && $_GET['logout']=="1"){
    $bol=new  UsuarioData;
    $bol->status=false;
    $bol->setstatus($_SESSION['idcliente']);
    session_destroy();
    unset($_SESSION['idcliente']);
    unset($_SESSION['usernamecliente']);
    unset($_SESSION['emailcliente']);
    unset($_SESSION['verifiedcliente']);
  
    header('location: index.php');


}*/
/*if(isset($_SESSION['id'])){
    $bol=new UsuarioData;
  $a=$bol->getstatus($_SESSION['id']);
   
  if(!($a['status'])){
  
   
     session_destroy();
     header ("location: index.php");
  }
  
  }*/

if(!isset($_SESSION['cli_id'])){
    header('location: tienda.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Led Store</title>
        <link rel="shortcut icon" href="../public/images/logo.ico" type="image/x-icon">
    <meta name="description" content="Empresa dedicada al diseño de alumbrado led  de locales comerciales u hogares para la decoración  y alumbrado."/>
    <meta name="keywords" content="Led, Tienda,Decoracion">

    <meta property="og:type" content="article" />

<meta property="og:title" content="Neon Led Store" />

<meta property="og:description" content="Empresa dedicada al diseño de alumbrado led  de locales comerciales u hogares para la decoración  y alumbrado." />

<meta property="og:image" content="./public/imagenes/fondos/fondo_rayo.jpg" />

<meta property="og:url" content="https://neonled-store.com/inicio.php" />

<meta property="og:site_name" content="Neon Led Store" />
<meta name="twitter:title" content="NEON LED STORE">

<meta name="twitter:description" content="Empresa dedicada al diseño de alumbrado led  de locales comerciales u hogares para la decoración  y alumbrado.">

<meta name="twitter:image" content="./public/imagenes/fondos/fondo_rayo.jpg">

<meta name="twitter:site" content="@NeonLedStore">

<meta name="twitter:creator" content="@NeonLedStore">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/bolsa_compras.css">
</head>
<body>
<style>
.a{
    color: #fff ; text-align: center ; font-size: 120% ;margin-top:120px

}
.row{
    height:100%
}
.container{
    height: 80vh
}
</style>
<div class="page-container" >
<?php include_once "menu.php"; ?>

<div class="container " >
    <div class="row">
        <div class="a">

        <?php if(isset($_SESSION['message'])):?>
        <div class="alert  <?php echo $_SESSION['alert-class'] ?>">
        <?php 
        echo $_SESSION['message']; 
        unset($_SESSION['message']);
        unset($_SESSION['alert-class']);
        ?>
      
        </div>  <?php endif;   ?>
        
        <h3>Bienvenido,<?php echo $_SESSION['cli_nombre']."  ". $_SESSION['cli_apellidos']   ?> </h3>
        <a href="../controladores/cerrarsesion.php" class="logout" >Salir</a>


        <?php if($_SESSION['cli_estado']){ ?>
                   
      <a href="../inicio.php" >  <button class="btn btn-block btn-lg btn-primary"  style="margin: 15px;">Ir al inicio</button></a>
      <a href="tienda.php">  <button class="btn btn-block btn-lg btn-primary" style="margin: 15px;">Seguir Comprando</button></a>
 
        <?php }else{?>
            <div class="alert alert-info">
            tu necesitas verfivar tu correo <strong><?php echo $_SESSION['cli_email']; ?> </strong> y hacer click para confirmar con link
           
        </div>

        <?php }?>
        </div>

    </div>
</div>





<?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" defer src="../public/js/menu.js"></script>
</body>
</html>
