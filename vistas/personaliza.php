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
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/personaliza.css">
</head>
<body>
    <div class="page-container">
        <?php include_once "menu.php"; ?>
        <main class="main">
            <h1 class="main__titulo">Personaliza tu Diseño</h1>
            <form class="form3" action="../controladores/personaliza.php" method="post">
                <div class="form3__1">
                    <div class="form3_2">
                        <div class="form__section">
                            <label for="desea">¿Qué es lo que deseas personalizar?</label><br>
                            <input class="form__input" id="desea" type="text" name="desea">
                        </div>
                        <div class="form__section">
                            <label for="medida">Medidas</label><br>
                            <input class="form__input" id="medida" type="text" name="medida" placeholder="Ejm: 30cmx40cm">
                        </div>

                        <input type="hidden" name="nombre" value="<?php echo $_SESSION["cli_nombre"]?>">
                        <input type="hidden" name="apellidos" value="<?php echo $_SESSION["cli_apellidos"] ?>">
                        <input type="hidden" name="email" value="<?php echo $_SESSION["cli_email"] ?>">

                        <div class="form__section">
                            <label for="archivo">Archivo:</label><br>
                            <div class="file">
                                <input class="form__file file_input" type="file" name="archivo" id="archivo">
                                <p class="file_text">Solo archivos .png y .jpg .No mayor a 5MB,por favor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="form__section form_area">
                        <label for="descripcion">Descripción:</label><br>
                        <textarea class="area" id="mensaje" name="mensaje" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form__section">
                    <button class="form__input boton" name="personaliza">Enviar</button>
                </div>
            </form>
        </main>
        <?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" src="../public/js/menu.js"></script>
    <script type="text/javascript" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
</body>

</html>