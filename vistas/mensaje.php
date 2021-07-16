<?php 
session_start();


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


    <div class="row " style="margin:auto ;color:#fff; height:80vh;margin-top:120px; width:40%;">
     <h4>Se le ha enviado un mensaje</h4>  <p>A su dirección de correo para poder cambiar y restablecer su contraseña</p>

    </div>






<?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" defer src="../public/js/menu.js"></script>
</body>
</html>
