<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="data:,">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa</title>
    <link rel="stylesheet" type="text/css" href="../public/css/shared/header.css">
    <link rel="stylesheet" type="text/css" href="../public/css/shared/footer.css">
    <link rel="stylesheet" type="text/css" href="../public/css/shared/registrate.css">
</head>
<body>
    <div class="page-container">
        <?php include_once "menu.php"; ?>
        <form class="formI " id="form2" action="../controladores/reglog.php" method="post">
            <div class="formI__section titulo">
                <div class="registrate registrate_2">
                    <a calss="formI__registrate" id="registrate2" style="color: white; text-decoration: none" href="#">Regístrate</a>
                </div>
                <div class="identificate identificate_2" style="background-color: transparent">
                    <a class="formI__identificate" id="identificate2" href="#"> Identifícate</a>
                </div>
            </div>
            <div class="formI__section datos">
                <div class="formI__user">
                    <i class="fas fa-user icono"></i><input class="formI_item" type="email" name="email" placeholder="Correo">
                </div>

                <div class="formI__contra">
                    <i class="fas fa-lock icono"></i><input class="formI_item" type="password" placeholder="Contraseña" name="pass">
                </div>
            </div>
            <div class="formI__section boton">
                <div class="form1__olvidastesContra">
                    <a class="olvidastes" href="#">¿Olvidastes tu contraseña?</a>
                </div>
                <button type="submit" class="formI__boton" name="login">Identifícate</button>
            </div>
        </form>
        <form class="formI form2" id="form1" action="../controladores/reglog.php" method="post">
            <div class="formI__section titulo">
                <div class="registrate">
                    <a calss="formI__registrate" id="registrate1" style="color: white; text-decoration: none;" href="#">Regístrate</a>
                </div>
                <div class="identificate">
                    <a class="formI__identificate" id="identificate1" href="#"> Identifícate</a>
                </div>
            </div>
            <div class="formI__section datos">
                <div class="formI__user">
                    <i class="fas fa-user icono"></i><input class="formI_item" type="text" name="name" placeholder="Nombre">
                </div>
                <div class="formI__user">
                    <i class="fas fa-user icono"></i><input class="formI_item" type="text" name="surname" placeholder="Apellidos">
                </div>
                <div class="formI__email">
                    <i class="fas fa-envelope icono"></i><input type="email" class="formI_item" name="email" placeholder="Email">
                </div>
                <div class="formI__contra">
                    <i class="fas fa-lock icono"></i><input class="formI_item" type="password"  name="password" placeholder="password">
                </div>
            </div>
            <div class="formI__section boton">
                <input type="submit" class="formI__boton" name="registrar" value="Regístrate">
            </div>
        </form>
        <?php include_once "footer.php"; ?>
    </div>
    <script type="text/javascript" defer src="../public/js/menu.js"></script>
    <script type="text/javascript" defer src="../public/js/registrate.js"></script>
</body>

</html>