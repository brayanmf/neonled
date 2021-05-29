<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="data:,">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Led Store</title>
    <script src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/shared/footer.css">
    <link rel="stylesheet" href="../public/css/shared/header.css">
    <link rel="stylesheet" href="../public/css/shared/nosotros.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
    <div class="page-container">
    <?php include_once "menu.php"; ?>
<h5 class="left"></h5><h5 class="right"></h5>
    <div class="titulo-servicios">
      <h2 class="linea"><span class="linea-izquierda"></span> Nosotros <span class="linea-derecha"></span></h2>
    </div>
    <div class="subtitulo">
                    <p>
                    Somos una empresa peruana apostando por ampliar tu zona visualmente haciendo un
espacio más brillante y amplio sin perder su esencia. Realizamos pedidos a diseño
para que decores tu ambiente como más te guste.
Seguimos las últimas tendencias para darle tu estilo a tu hogar y la imagen que
quieres transmitir a tu negocio si tienes un local comercial, también tenemos
servicio de renovación de ambientes.
Decora tus ambientes y exprésate sin límites con calidad garantizada. Somos una
opción de regalo original para familia, pareja y amigos.En Neón Led Store trabajamos con un sistema de luz flexible, duradero y de bajo
consumo con una gran versatilidad para diferentes usos. Ofrecemos grandes
ventajas diferenciales como medio publicitario y decorativo. Un sistema útil para
captar la atención de sus clientes, generar experiencias y destacar su marca.
Óptimo como sustento de cartelería en vía pública, interiores, eventos, fiestas.
Ideal para decoraciones de todo tipo.
                    </p>
                </div>

                <div class="cont">
                <h2 class="barra"></h2>
                <h1>Empresa que trabaja con nosotros</h1>    
            </div>
            <div class="flex">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>

            </div>


  

    <?php include_once "footer.php"; ?>
    </div>
  
    <script rel="preconnect" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script rel="preconnect" src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="../public/js/menu.js"></script>
    <script type="text/javascript" src="../js/productos.js" ></script>
    <script type="text/javascript" src="../js/agregarproductocarrito.js" ></script>
</body>
</html>