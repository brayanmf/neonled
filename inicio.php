<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" href="data:,">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Led Store</title>
    <link rel="stylesheet" href="./public/css/shared/header2.css">
    <link rel="stylesheet" type="text/css" href="public/css/index.css">
    <!--<link rel="stylesheet" type="text/css" href="public/css/shared/header.css">-->
    <!--<link rel="stylesheet" type="text/css" href="public/css/shared/footer.css">-->
    <link rel="preload" href="public/css/style/estilo.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/shared/header.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="public/css/shared/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
</head>
<body>
          

    <div class="page-container">
    <?php include_once "./vistas/menu2.php"; ?>

        <div class="video-container">
                    <video loop muted autoplay preload="auto">
                        <source src="public/videos/video_index.mp4" type="video/mp4"> Tú navegador no soporta el video
                    </video>
        </div>
        <section class="designs-container" id="nosotros">
            <div class="background-container">
                <h2 class="designs-title">Diseños en Led Neón</h2>
                <div class="designs-description-container">
                    <figure class="designs-img-container">
                        <img src="public/images/fondos/fondo_s.jpg" alt="">
                    </figure>
                    <article class="text-container">
                        <h3>Experiencia visual</h3>
                        <p>En Neon Led Store apostamos por ampliar tu zona visualmente y hacer de cualquier espacio uno más brillante y amplio sin perder su esencia. Decorarás tu ambiente de manera que quieras expresar tu mundo.</p>
                    </article>
                </div>
                <div class="trabajos">
                <h2>ENVIO DISPONIBLE A TODO EL PERÚ</h2>
                <h2 class="linea"><span class="linea-izquierda"></span>TRABAJOS<span class="linea-derecha"></span></h2>
                </div>
            </div>
        </section>

        <?php include 'vistas/reusable/carrusel.php'  ?>

        <section class="contact-container" id="contact">
            <div class="contact-background-container">
                <h2 class="contact-title"><span class="linea-izquierda"></span>Contacto<span class="linea-derecha"></h2>
                <div class="contact-form-container">
                    <form action="controladores/enviarcorreo.php" method="post">
                        <div class="inputs-container">
                            <article class="left-side">
                                <label for="name">
                                    <h3>Nombre completo:</h3>
                                    <input type="text" name="nombre" id="name">
                                </label>
                                <label for="email">
                                    <h3>Correo:</h3>
                                    <input type="text" name="email" id="email">
                                </label>
                                <label for="telephone">
                                    <h3>Número telefónico:</h3>
                                    <input type="text" name="telefono" id="telephone">
                                </label>
                            </article>
                            <article class="right-side">
                                <label for="message">
                                    <h3>Mensaje:</h3>
                                    <textarea name="mensaje" id="message" cols="30" rows="20"></textarea>
                                </label>
                            </article>
                        </div>
                        <div class="form-button-container">
                            <button class="button-contact" name="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <?php include_once "vistas/footer.php"; ?>
    </div>
    <script type="text/javascript" src="public/js/menu.js" defer></script>
    <script type="text/javascript" src="public/js/slider.js" defer></script>

    <!-- Iconos importadas -->
    <script  type="text/javascript" src="https://kit.fontawesome.com/c702fce202.js" crossorigin="anonymous" defer></script>
</body>
</html>