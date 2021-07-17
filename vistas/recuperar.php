<?php session_start(); ?>
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
<body>
    <div class="page-container">
        <?php include_once "menu.php"; ?>
        <form class="formI " id="form2" action="../controladores/reglog.php" method="post" style="height: 70vh;">
            <div class="formI__section titulo">
             
                <div class="identificate identificate_2" style="background-color: transparent">
                  
                    <p>ingrese la dirección de correo electrónico que utilizó para registrarse
                 en este sitio y lo ayudaremos a recuperar su contraseña</p>
                </div>
            </div>
            <div class="formI__section datos">
                <div class="formI__user">
                    <i class="fas fa-envelope icono"></i><input class="formI_item" type="email" name="email" placeholder="Correo">
                </div>

            </div>
            <div class="formI__section boton">
                <div class="form1__olvidastesContra">
                    <a class="olvidastes" href="registrate.php">Iniciar Sesion</a>
                </div>
                <button type="submit" class="formI__boton" name="actualizar">Enviar</button>
            </div>
        </form>
        <?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" defer src="../public/js/menu.js"></script>
  
</body>

</html>