<section class="hero-container">
            <figure class="logo-container">
            <a href="../index.php"><img src="public/images/logo.webp" alt=""></a>
            </figure>
            <section class="right-container">
                <nav class="menu">
                    <ul class="list-left">
                        <li><a href="inicio.php">Inicio</a>|</li>
                        <li><a href="vistas/tienda.php">Tienda</a>|</li>
                        <li><a href="vistas/servicios.php">Servicios</a>|</li>
                        <li><a href="vistas/tienda.php">Nosotros</a>|</li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                    <?php
                        if (isset($_SESSION["cli_estado"])) { ?>
                            <ul class="list-right">
                                <li class="hidden-mobile">
                                    <a><?php echo $_SESSION["cli_nombre"] ?></a>
                                    <a href="controladores/cerrarsesion.php">Salir</a>
                                    <i class="fas fa-shopping-cart"></i>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul class="list-right">
                                <li> <a href="vistas/registrate.php"><i class="fas fa-shopping-cart"></i></i></a><a href="vistas/registrate.php"><i class="far fa-user"></i></a>   </li>
                            
                            </ul>
                        <?php } ?>
                </nav>
            </section>
        </section>