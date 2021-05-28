<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolsa de compras</title>
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/bolsa_compras.css">
</head>
<body>
    <div class="page-container">
        <?php include_once "menu.php"; ?>
        <main class="main__bCompras">
            <div class="main__titulo">
                <!--<h1 class="main__texto">Bolsa de compras(2 productos)</h1>-->
            </div>
            <input type="hidden" id="cliente" value="<?php echo $_SESSION["cli_id"] ?>">
            <div class="main__section">
                <div class="contenedor_carrito">
                    
                </div>
                <div class="resumen">
                    <div class="resumen__titulo">
                        <h3>Resumen de tu orden</h3>
                    </div>
                    <div class="resumen__total">
                        <!--<p>Total</p>
                        <p>s/136.50</p> -->
                    </div>
                    <div class="resumen__boton">
                        <button class="boton"><a class="boton_link" href="finalizar_compra.php">Finalizar compra</a></button>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once "footer.php"; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>
    <script type="text/javascript" src="../public/js/menu.js" defer></script>
    <script type="text/javascript" src="../js/modificarcarrito.js"></script>
    <script src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
</body>

</html>