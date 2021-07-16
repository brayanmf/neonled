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
    <link rel="stylesheet" href="../public/css/shared/finalizar_compra.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <?php include_once "menu.php"; ?>
    <div class="title">
        <h3>Finalizar Compra</h3>
        <button class="button_title" type="button"><a href="tienda.php">Seguir Comprando</a></button>
    </div>
    <input type="hidden" id="cliente" value="<?php echo $_SESSION["cli_id"] ?>">
    <div class="formulario">
        <form class="form-datos">
            <h2>Datos</h2>
            <label><span>Nombres</span></label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION["cli_nombre"] ?>" disabled>
            <label><span>Apellidos</span></label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo $_SESSION["cli_apellidos"] ?>" disabled>
            <label><span>Email</span></label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION["cli_email"] ?>" disabled>
            <!--
            <label><span>Direcci&oacuten</span></label>
            <input type="text" id="direccion" name="direccion" required>
            <label><span>Tel&eacutefono</span></label>
            <input type="text" id="telefono" name="telefono" required> -->
        </form>
    </div>

    <form class="orden">
        <div class="orden_box">
            <div class="header-order">
                <p>Resumen de tu orden</p>
                <a href="bolsa_compras.php">Editar Carrito</a>
            </div>
            <div class="subtotal">
                <!--
                <p>Sub-Total Productos</p>
                <span id="subtotal">S/. 136.50 </span> -->
            </div>
            <input type="hidden" id="delivery" value="1">
            <div class="delivery">
                <label for="delivery">Delivery (S/. 15.00)</label>
                <input type="checkbox" onclick="Delivery()" class="check">
            </div>
            <div class="total">
                <!--
                <p>Total</p>
                <span id="total">S/. 136.50 </span> -->
            </div>
            <button class="button_orden" id="button_orden" type="button">Finalizar Compra</button>
        </div>
    </form>
    <div id="modal-metodo" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Selecciona el método del pago</h3>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <div class="modal-body-card">
                    <img id="card" src="../public/images/payment_card.JPG" alt="">
                    <p>Transferencia bancaria</p>
                </div>
                <div class="modal-body-yape">
                    <img id="yape" src="../public/images/payment_yape.JPG" alt="">
                    <p>Yape</p>
                </div>
            </div>
            
        </div>
    </div>
    <div id="modal-card" class="modal_card">
        <div class="modal-content_card">
            <div class="modal-header_card">
                <h3>Selecciona el método del pago</h3>
                <img id="back_card" src="../public/images/back_arrow.JPG" alt="atras">
            </div>
            <div class="modal-body_card">
                <form class="modal-body-card_card">
                    <p>N° de Cuenta BCP</p>
                    <p id="count_number">19113074909078</p>
                    <br>                    
                    <p>N° de Cuenta BBVA</p>
                    <p id="count_number">011 175 000200668246 78</p>
                </form>
                <div class="modal-body-yape_card">
                    <img src="../public/images/payment_card.JPG" alt="Pago con Tarjeta">
                </div>
            </div>
            <div class="modal-footer_card">
                <button class="modal-button-compra_card" type="button"><a href="https://api.whatsapp.com/send?phone=51936910425" target="_blank">Enviar Comprobante</a></button>
            </div>
        </div>
    </div>
    <div id="modal-yape" class="modal_yape">
        <div class="modal-content_yape">
            <div class="modal-header_yape">
                <h3>Selecciona el método del pago</h3>
                <img id="back_yape" src="../public/images/back_arrow.JPG" alt="atras">
            </div>
            <div class="modal-body_yape">
                <form class="modal-body-card_yape">
                    <img id="QR" src="../public/images/QR.jpg" alt="QR">
                    <p>N° Celular</p>
                    <p id="cellphone">936 910 425</p>
                </form>
                <div class="modal-body-yape_yape">
                    <img src="../public/images/payment_yape.JPG" alt="Pago con Yape">
                </div>
            </div>
            <div class="modal-footer_yape">
                <button class="modal-button-compra_yape" type="button"><a href="https://api.whatsapp.com/send?phone=51936910425" target="_blank">Enviar Comprobante</a></button>
            </div>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="../public/js/menu.js"></script>
    <script type="text/javascript" src="../public/js/finalizarcompra.js"></script>
    <script type="text/javascript" src="../js/finalizarcompra.js"></script>
</body>

</html>