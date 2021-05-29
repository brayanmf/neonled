        <div class="cabecera-container">
            <header class="cabecera">
                
                <figure class="logo-container">
                    <a href="./index.php"><img src="./public/images/logo.webp" alt=""></a>
                </figure>
                <div class="list-container">
                    <nav class="menu">
                        <ul class="list-left">
                            <li><a href="inicio.php">Inicio</a>|</li>
                            <li><a href="vistas/tienda.php">Tienda</a>|</li>
                            <li><a href="vistas/servicios.php">Servicios</a>|</li>
                            <li><a href="vistas/nosotros.php">Nosotros</a>|</li>
                            <li><a href="inicio.php#contact">Contacto</a></li>
                            <?php
                            if (!isset($_SESSION["cli_estado"])) { ?>
                            <li class="hidden-desk">
                                <a href="registrate.php">Iniciar Sesión<i class="far fa-user"></i></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php
                        if (isset($_SESSION["cli_estado"])) { ?>
                            <ul class="list-right">
                                <li class="hidden-mobile">
                                    <a><?php echo $_SESSION["cli_nombre"] ?></a>
                                    <a href="./controladores/cerrarsesion.php">Salir</a>
                                    <a href="./vistas/bolsa_compras.php"><i class="fas fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul class="list-right">
                                <li class="hidden-mobile">
                                    <a href="registrate.php"><i class="fas fa-shopping-cart"></i><i class="far fa-user"></i></a>
                                </li>
                            </ul>
                        <?php } ?>
                    </nav>
                </div>
                <div class="elements-mobile">
                    <?php
                    if (isset($_SESSION["cli_estado"])) { ?>
                        <p><?php echo $_SESSION["cli_nombre"] ?></p>
                        <a href="./controladores/cerrarsesion.php">Salir</a>
                        <i class="fas fa-shopping-cart"></i>
                    <?php } ?>
                        <div class="burger-button">
                            <i class="fas fa-bars"></i>
                        </div>
                </div>
            </header>
        </div>