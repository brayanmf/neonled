<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/categorias.css">

</head>
<body>
    <div class="page-container">
            <?php include_once "menu.php"; ?>
            <main class="main">
                <aside class="menu-left">
                    <figure class="shop-title-mobile">
                        <!--<img src="../public/images/animados/imagen_larga.jpg" alt="">-->
                    </figure>
                    <h3 class="menu-title">Categorías</h3>
                    <nav class="menu-categories">
                        <ul class="contenedor_categorias">
                        <!--<li><a href="">Cintas</a></li>
                            <li><a href="">Cómics</a></li>
                            <li><a href="">Deportes</a></li>
                            <li><a href="">Emojis</a></li>
                            <li><a href="">Videojuegos</a></li>
                            <li><a href="">Personajes</a></li>
                            <li><a href="">Música</a></li>
                            <li><a href="">Frases</a></li>
                            <li><a href="">Festividades</a></li> -->
                        </ul>
                    </nav>
                </aside>
                <input type="hidden" id="categoria" value="<?php if (isset($_GET["categoria"])){echo $_GET["categoria"]; }else{}?>">
                <section class="shop">
                    <figure class="shop-title">
                        <!--<img src="../public/images/animados/imagen_larga.jpg" alt="">-->
                    </figure>
                    <div class="articles-section" id="articles-section">
                        <?php if (isset($_SESSION["cli_estado"])) { ?>
                            <div class="link-container">
                                <a href="personaliza.php">Personaliza tu diseño</a>
                            </div>
                        <?php } ?>
                        <!--<article class="article-card">
                            <a href="#">
                                <img src="../public/images/animados/mariposa.webp" alt="">
                            </a>
                            <h3>Título 1</h3>
                        </article>-->
                     </div>
                </section>
            </main>
        <?php include_once "footer.php"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../public/js/menu.js"></script>
    <script type="text/javascript" src="../js/listaxCategoria.js" ></script>
</body>
</html>
