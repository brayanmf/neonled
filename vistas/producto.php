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
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/producto.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <?php include_once "menu.php"; ?>
    <div class="contenido">
        <figure class="box-imagen">
            <!--<img class="image-led" src="../public/images/animados/dragon.webp" alt="Imagen del Producto LED">-->
        </figure>
        <input type="hidden" id="producto" value="<?php echo $_GET["pro"];?>">
        <div class="box-father">
            <div class="form-led">
                <a class="back_card" href="javascript:history.back()"><img src="../public/images/back_arrow.JPG" alt="atras"></a>
                <h3 class="title" id="nombreproducto"></h3>
                <p id="precio"></p>
                <span>Tamaño:</span>
                <p id="tamano"></p>
                <span>Color:</span>
                <select  id="coloravailable">
                    <option value="1">red</option>
                </select>
                <?php if (isset($_SESSION["cli_estado"])) { ?>
                <!--datos para agrega al carro-->
                <input type="hidden" id="cliente" value="<?php echo $_SESSION["cli_id"] ?>">
                <input type="hidden" id="precio1">
                <input type="hidden" id="tamano1">

                <span>Cantidad:</span>
                <input type="number" id="cantidad" max="5" min="0" required>
                <button class="button_orden" id="agregar_carrito" type="button">Agregar al Carrito</button>
                <a href="finalizar_compra.php"><button class="button_orden" id="compra" type="button">Compra Ahora</button></a>
                <?php } else { ?>
                <br>
                <p>Antes de comprar, ingrese o regístrese.</p>
                <br>
                <a href="registrate.php"><button class="button_orden" type="button">Ingresar</button></a>
                <?php } ?>  
            </div>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
    <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script rel="preconnect" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="../public/js/menu.js"></script>
    <script type="text/javascript" src="../js/productos.js" ></script>
    <script type="text/javascript" src="../js/agregarproductocarrito.js" ></script>
</body>
</html>