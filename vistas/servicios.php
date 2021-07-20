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
    <link rel="stylesheet" href="../public/css/shared/eslide.css">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="preload" href="../public/css/style/estilo.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="../public/css/shared/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!--<link rel="stylesheet" href="../public/css/shared/tienda.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">-->
</head>
<body>
    <div class="page-container">
            <?php include_once "menu.php"; ?>
            
            <div class="contenedor">
                <div class="subtitulo">
                    <h3>¿Ya conoces todos nuestros servicios?</h3>
                    <p>¡Entérate de todos nuestros servicios y</p>
                    <p class="minimo">promociones registrándote en nuestra página!<p>
                </div>
                <div class="titulo-servicios">
                    <h2 class="linea"><span class="linea-izquierda"></span>Servicios<span class="linea-derecha"></span></h2>
                </div>
                <div class="productos-info">
                    <div class="img-texto">
                        <img src="../public/images/hogar.webp" alt="">
                        <p class="info">Fabricación de luces Neón Led para tu hogar y negocio</p>
                        <button>Mas Información</button>
                    </div>
                    <div class="img-texto">
                        <img src="../public/images/luces.webp" alt="">
                        <p class="info">Ilumina tus eventos con luces Neón Led</p>
                        <button>Mas Información</button>
                     </div>
                    <div class="img-texto">
                        <img src="../public/images/negocio.webp" alt="">
                        <p class="info">Rediseño de tu espacio o negocio</p>
                        <button>Mas Información</button>
                     </div>
                </div>

                <div class="titulo-servicios titulo-trabajo">
                    <h2 class="linea">NUESTROS TRABAJOS</h2>
                </div>
                
                <?php include '../vistas/reusable/carrusel2.php'  ?>

                <section class="publicidad-servico">
        <h3>¿Qué esperas para decorar tu hogar o tienda con nosotros?</h3>
        <p>¡Ponte en contacto con nosotros!</p>            
        <div class="colaboradores">
        <img src="../public/images/logo.webp" alt="">
        <img src="../public/images/logo.webp" alt="">
  
</section>

    </div>
            
    <?php include_once "footer.php"; ?>
    </div>
    <?php include '../vistas/reusable/footerCarrusel.php'  ?>

    <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../public/js/menu.js" defer></script>
    <script rel="preconnect" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
    <!-- Javascript importado para el carrusel -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="../public/js/tienda/eslide.js"></script>

 
</body>
</html>
