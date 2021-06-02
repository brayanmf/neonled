<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="icon" href="data:,">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tienda</title>
        <link rel="stylesheet" href="../public/css/shared/header.css">
        <link rel="preload" href="../public/css/style/estilo.css" as="style" onload="this.onload = null;
            this.rel = 'stylesheet'">
        <link rel="preload" href="../public/css/shared/footer.css" as="style" onload="this.onload = null;
            this.rel = 'stylesheet'">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
        <link rel="stylesheet" href="jquery.hislide.css">

    </head>
    <body>
        <div class="page-container">
            <?php include_once "menu.php"; ?>
            <?php include '../vistas/reusable/carrusel2.php' ?>
            <figure class="shop-title">
                        <!--<img src="../public/images/animados/imagen_larga.jpg" alt="">-->
            </figure>
            <main class="main">
                <aside class="menu-left">
                    <!-- <figure class="shop-title-mobile">
                        <img src="../public/images/animados/imagen_larga.jpg" alt="">
                    </figure>   -->

                    <div class="desplazador-opciones">
                        <h3 >Filtros</h3>
                        <div class="categoria-tienda">
                            <h3 class="menu-title">Categoría <span class="ver-menu">+</span></h3>
                            <nav class="menu-categories">
                                <ul class="contenedor_categorias">
                                    <!--<li><a href="">Cintas</a></li> -->
                                </ul>
                            </nav>
                        </div>

                        <div class="categoria-precio">
                            <h3 class="menu-title">Precio <span class="ver-precio">+</span></h3>
                            <form action="" method="POST">
                                <div class="range">
                                    <!-- <h6>Filtro por precio</h6> -->
                                    <div class='container mt-4'>
                                        <input type="text" id="inputrange" class="js-range-slider" name="my_range" value=""/>    
                                    </div>
                                    <p>Precio S/.140 - S/.860</p>
                                    <button id="optrange" name="btn_range">Filtrar</button>
                                </div>
                            </form>
                        </div>

                        <div class="categoria-color">
                            <h3 class="menu-title">Color <span class="ver-color">+</span></h3>
                            <nav class="color">
                                <ul class="contenedor-color" id="contenedor-color">
                                    <li><p class="bola bola-1" data-id="1"></p></li>
                                    <li><p class="bola bola-2" data-id="2"></p></li>
                                    <li><p class="bola bola-3" data-id="3"></p></li>
                                    <li><p class="bola bola-4" data-id="4"></p></li>
                                    <li><p class="bola bola-5" data-id="5"></p></li>
                                    <li><p class="bola bola-6" data-id="6"></p></li>
                                    <li><p class="bola bola-7" data-id="7"></p></li>
                                    <li><p class="bola bola-8" data-id="8"></p></li>
                                    <li><p class="bola bola-9" data-id="9"></p></li>
                                    <li><p class="bola bola-10" data-id="10"></p></li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="categoria-tamano">
                            <h3 class="menu-title">Tamaño<span class="ver-color">+</span></h3>
                            <form>
                                <ul class="contenedor-tamano" id="contenedor-tamano">
                                    
                                </ul>
                            </form>
                        </div> 


                    </div>

                </aside>

                <section class="shop">
                    <div class="buscar-recomendado">
                        <!--<button>Buscar</button>-->
                        <!--<form id="search_prod">-->
                        <input  class="textSearch" id="textSearch" type="text" placeholder="Buscar" style="background:black; color:white;">
                        <!--</form>-->
                        <h3>Ordenar por</h3>
                        <button class="recomendado">Recomendado</button>

                    </div>
                    <div class="articles-section" id="articles-section">
                        <?php if (isset($_SESSION["cli_estado"])) { ?>
                            <div class="link-container">
                                <a href="personaliza.php">Personaliza tu diseño</a>
                            </div>
                        <?php } ?>
                        <?php if (isset($_POST["btn_range"])) { 
                            include_once '..\controladores\ajaxListaxPrecio.php';
                            } 
                        ?>
                        <!--<article class="article-card">
                            <a href="#">
                                <img src="../public/images/animados/mariposa.webp" alt="">
                            </a>
                            <h3>Título 1</h3>
                        </article>-->
                    </div>
                </section >

                <template id="template-items">
                    <article class='article-card'>
                        <a href='producto.php?pro=1'>
                            <img src="imagen" alt=''>
                        </a>
                        <h3>Nombre</h3>
                        <div>
                            <span  class='color-div' style='background: red'></span>
                        </div>
                        <p>S/.350.00</p>
                    </article>                     
                </template>

                <template id="template-catlist">
                    <li>
                        <a ></a>
                    </li>
                </template>


            </main>
            <?php include_once "footer.php"; ?>
        </div>
        <?php include '../vistas/reusable/footerCarrusel.php' ?>
        <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <?php if (isset($_POST["btn_range"])) { }else{ ?>
            <script type="text/javascript" src="../js/listacategorias.js" ></script>
        <?php } ?>
        
        <script type="text/javascript" src="../public/js/menu.js" defer></script>
        <script type="text/javascript" src="../js/filter.js"></script>
        <script rel="preconnect" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
        <script>
        $(".js-range-slider").ionRangeSlider({
            skin: "round",
            step: 20,
            type: "double",
            // grid: true,
            min: 140,
            max: 860,
            from: 140,
            to: 860,
            prefix: "S/.",
        });
        </script>

        <!-- Javascript importado para el carrusel -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="../public/js/tienda/jquery.hislide.js" ></script>
        <script>
            $('.slide').hiSlide();
        </script>

    </body>
</html>
