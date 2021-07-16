<?php session_start(); 
 if(!isset($_GET['token'])){
    echo "<script>
    alert('Porfavor revise su correo');
    window.location = '../vistas/tienda.php';
</script>";
 } 
 ?>
                

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="data:,">
    <meta charset="UTF-8">
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
    <script src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../public/css/shared/header.css">
    <link rel="stylesheet" type="text/css" href="../public/css/shared/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/shared/registrate.css">
</head>
<style>
    .boton{
        align-items:unset ;
    }
</style>
<body>
    <div class="page-container">
        <?php include_once "menu.php"; ?>
        <form class="formI " id="form2" action="../controladores/reglog.php" method="post" style="height: 60vh;">
            <p>Escribir su nueva contraseña</p>
            <div class="formI__section boton">
            <div class="formI__contra">
                    <i class="fas fa-lock icono"></i><input class="formI_item" type="password"  name="password" placeholder="contraseña">
                </div>
                <div class="formI__contra">
                    <i class="fas fa-lock icono"></i><input class="formI_item" type="password"  name="password2" placeholder="vuelve a introducir la contraseña">
            <input type="text" value="<?php echo $_GET['token']  ?> " name="token" hidden>
    </div>
                <button type="submit" class="formI__boton" name="cambiar">Cambiar</button>
            </div>
        </form>
        <?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" defer src="../public/js/menu.js"></script>
  
</body>

</html>