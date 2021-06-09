-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2021 a las 02:00:18
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `neonl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_categorias`
--

CREATE TABLE `tab_categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(255) NOT NULL,
  `cat_imagen` varchar(255) NOT NULL,
  `cat_link` varchar(255) NOT NULL,
  `cat_estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tab_categorias`
--

INSERT INTO `tab_categorias` (`cat_id`, `cat_nombre`, `cat_imagen`, `cat_link`, `cat_estado`) VALUES
(1, 'Animados', '../public/images/nombrescategorias/animados.png', 'categorias/animados.php', 'Activo'),
(2, 'Cómics', '../public/images/nombrescategorias/comics.png', 'categorias/cintas.php', 'Activo'),
(3, 'Comida', '../public/images/nombrescategorias/comida.png', 'categorias/comics.php', 'Activo'),
(4, 'Festividades', '../public/images/nombrescategorias/festividades.png', 'categorias/deporte.php', 'Activo'),
(5, 'Frases', '../public/images/nombrescategorias/frases.png', 'categorias/emojis.php', 'Activo'),
(6, 'Música', '../public/images/nombrescategorias/musica.png', 'categorias/festividades.php', 'Activo'),
(7, 'Negocios', '../public/images/nombrescategorias/negocios.png', 'categorias/frases.php', 'Activo'),
(8, 'Variados', '../public/images/nombrescategorias/variados.png', 'categorias/musica.php', 'Activo'),
(9, 'Videojuegos', '../public/images/nombrescategorias/videojuegos.png', 'categorias/personajes_iconicos.php', 'Activo'),
(10, 'Tendencias', '../public/images/nombrescategorias/tendencia.png', '', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_clientes`
--

CREATE TABLE `tab_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nombre` varchar(150) NOT NULL,
  `cli_apellidos` varchar(255) NOT NULL,
  `cli_email` varchar(255) NOT NULL,
  `cli_clave` varchar(255) NOT NULL,
  `cli_estado` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tab_clientes`
--

INSERT INTO `tab_clientes` (`cli_id`, `cli_nombre`, `cli_apellidos`, `cli_email`, `cli_clave`, `cli_estado`) VALUES
(1, 'Juan', 'Quispe Guevara', 'juan@gmail.com', '$2y$10$Rl78wr7dgliEd5907tS5/ughSkdUdEWwt3PT.bZuCOMTd5/ouT1eW', 'Activo'),
(2, 'Gabriela', 'Gomez Suarez', 'gabriela@gmail.com', '$2y$10$FUs2jKBjVg0jJuvEWF.hc.ieSEqyuettUaHI40IrSbUlH8RXKHKiy', 'Activo'),
(3, 'Marvin', 'Taipe Gongora ', 'marvin@gmail.com', '$2y$10$6FfOKwdypZhzAuF82p8vbOdU2.pt2RdefPt7fdlxsEch78mN7T8WW', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_color`
--

CREATE TABLE `tab_color` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf32_spanish_ci NOT NULL,
  `rgb` varchar(100) COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tab_color`
--

INSERT INTO `tab_color` (`id`, `nombre`, `rgb`) VALUES
(1, 'azul violeta', 'rgb(70, 43, 223)'),
(2, 'azul', 'rgb(8, 8, 214)'),
(3, 'rojo', 'rgb(211, 19, 19)'),
(4, 'amarrillo', 'rgb(255, 236, 67)'),
(5, 'verde', 'rgb(39, 194, 25)'),
(6, 'verde azul', 'rgb(17, 179, 207)'),
(7, 'negro', 'rgb(0, 0, 0);border: solid 1px rgb(255, 255, 255);'),
(8, 'rosado', 'rgb(247, 72, 209)'),
(9, 'blanco', 'rgb(255, 255, 255)'),
(10, 'anaranjado', 'rgb(224, 128, 49)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_listacompra`
--

CREATE TABLE `tab_listacompra` (
  `com_id` int(11) NOT NULL,
  `com_cliente` int(11) NOT NULL,
  `com_producto` int(11) NOT NULL,
  `com_precio` decimal(6,2) NOT NULL,
  `com_cantidad` int(11) NOT NULL,
  `com_total` decimal(10,2) NOT NULL,
  `com_imagen` varchar(255) NOT NULL,
  `com_tamano` varchar(100) NOT NULL,
  `com_estado` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tab_listacompra`
--

INSERT INTO `tab_listacompra` (`com_id`, `com_cliente`, `com_producto`, `com_precio`, `com_cantidad`, `com_total`, `com_imagen`, `com_tamano`, `com_estado`) VALUES
(3, 1, 62, '389.00', 5, '1945.00', '../public/images/productos/frases/StarWars.png', '25cmx40cm', 'Activo'),
(7, 3, 51, '169.00', 1, '169.00', '../public/images/productos/frases/be_you.png', '20cmx40cm', 'Activo'),
(9, 3, 111, '289.00', 1, '289.00', '../public/images/productos/tendencia/Boca.png', '40cmx25cm', 'Activo'),
(10, 3, 71, '389.00', 1, '389.00', '../public/images/productos/negocios/50_ off.png', '40cmx40cm', 'Activo'),
(11, 2, 115, '299.00', 3, '897.00', '../public/images/productos/tendencia/Ojo.png', '40cmx30cm', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_producto`
--

CREATE TABLE `tab_producto` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_nombre` varchar(100) CHARACTER SET ujis NOT NULL,
  `pro_descripcion` varchar(255) NOT NULL,
  `pro_precio` decimal(6,2) NOT NULL,
  `pro_imagen` varchar(200) NOT NULL,
  `pro_tamano` varchar(255) DEFAULT NULL,
  `pro_estado` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `tab_producto`
--

INSERT INTO `tab_producto` (`pro_id`, `pro_categoria`, `pro_nombre`, `pro_descripcion`, `pro_precio`, `pro_imagen`, `pro_tamano`, `pro_estado`) VALUES
(1, 2, 'Advengers', '', '349.00', '../public/images/productos/comics/advengers.webp', '30cmx30cm', 'Activo'),
(2, 2, 'Batman', '', '259.00', '../public/images/productos/comics/batman.webp', '40cmx30cm', 'Activo'),
(3, 2, 'Deadpool', '', '289.00', '../public/images/productos/comics/deadpool.webp', '30cmx35cm', 'Activo'),
(4, 2, 'Escudo', '', '489.00', '../public/images/productos/comics/escudo.webp', '40cmx40cm', 'Activo'),
(5, 2, 'Hulk', '', '399.00', '../public/images/productos/comics/hulk.webp', '35cmx35cm', 'Activo'),
(6, 2, 'Mujer Maravilla', '', '299.00', '../public/images/productos/comics/ww.webp', '40cmx30cm', 'Activo'),
(7, 1, 'Astronauta', '', '489.00', '../public/images/productos/animados/Astronauta.webp', '60cmx40cm', 'Activo'),
(8, 1, 'Blanca Nieves', '', '319.00', '../public/images/productos/animados/Blanca_nieves.webp', '30cmx30cm', 'Activo'),
(9, 1, 'Bob Esponja', '', '369.00', '../public/images/productos/animados/Bob_Esponja.webp', '40cmx30cm', 'Activo'),
(12, 1, 'Chanchito', '', '389.00', '../public/images/productos/animados/Chanchito.webp', '40cmx30cm', 'Activo'),
(13, 1, 'Chavo', '', '349.00', '../public/images/productos/animados/Chavo.webp', '40cmx30cm', 'Activo'),
(14, 1, 'Cinderella', '', '399.00', '../public/images/productos/animados/Cinderella.webp', '40cmx30cm', 'Activo'),
(15, 1, 'Cocodrilo Bebe', '', '329.00', '../public/images/productos/animados/Cocodrilo_bebe.webp', '40cmx20cm', 'Activo'),
(16, 1, 'Diablito', '', '299.00', '../public/images/productos/animados/Diablito.webp', '40cmx30cm', 'Activo'),
(17, 1, 'Elefante Bebe', '', '279.00', '../public/images/productos/animados/Elefante_bebe.webp', '40cmx30cm', 'Activo'),
(18, 1, 'Emoji Beso', '', '289.00', '../public/images/productos/animados/Emoji_beso.webp', '40cmx30cm', 'Activo'),
(19, 1, 'Emoji Feliz', '', '219.00', '../public/images/productos/animados/Emoji_feliz.webp', '30cmx30cm', 'Activo'),
(20, 1, 'Gorro Mickey', '', '239.00', '../public/images/productos/animados/Gorro_Mickey.webp', '40cmx30cm', 'Activo'),
(21, 1, 'Jazmin', '', '249.00', '../public/images/productos/animados/Jazmin.webp', '40cmx30cm', 'Activo'),
(22, 1, 'Paw', '', '689.00', '../public/images/productos/animados/Paw.webp', '40cmx60cm', 'Activo'),
(23, 1, 'Marylin Monroe', '', '369.00', '../public/images/productos/animados/Marylin_Monroe.webp', '40cmx30cm', 'Activo'),
(24, 1, 'Mariposa', '', '189.00', '../public/images/productos/animados/Mariposa.webp', '30cmx20cm', 'Activo'),
(25, 1, 'Mary_Poppins.png', '', '349.00', '../public/images/productos/animados/Mary_Poppins.webp', '40cmx30cm', 'Activo'),
(26, 1, 'Mickey Circular', '', '299.00', '../public/images/productos/animados/Mickey_circulo.webp', '30cmx30cm', 'Activo'),
(27, 1, 'Nube', '', '599.00', '../public/images/productos/animados/Nube.webp', '40cmx30cm', 'Activo'),
(28, 1, 'Sirenita', '', '299.00', '../public/images/productos/animados/Sirenita.webp', '40cmx30cm', 'Activo'),
(29, 1, 'Skyle Paw', '', '349.00', '../public/images/productos/animados/Skyle_paw.webp', '30cmx30cm', 'Activo'),
(30, 1, 'Mickey Disney', '', '589.00', '../public/images/productos/animados/MM_Disney.webp', '45cmx33cm', 'Activo'),
(32, 3, 'Cerveza', '', '169.00', '../public/images/productos/comidas/Cerveza.webp', '35cmx25cm', 'Activo'),
(33, 3, 'Dona', '', '149.00', '../public/images/productos/comidas/Dona.webp', '30cmx20cm', 'Activo'),
(34, 3, 'Hamburguesa', '', '279.00', '../public/images/productos/comidas/Hamburguesa.webp', '30cmx30cm', 'Activo'),
(35, 3, 'Helado', '', '249.00', '../public/images/productos/comidas/Helado.webp', '40cmx30cm', 'Activo'),
(36, 3, 'Hotdog', '', '349.00', '../public/images/productos/comidas/Hot_dog.webp', '40cmx30cm', 'Activo'),
(37, 3, 'Paleta Helado', '', '239.00', '../public/images/productos/comidas/Paleta_helado.webp', '30cmx20cm', 'Activo'),
(38, 3, 'Papas Fritas', '', '419.00', '../public/images/productos/comidas/Papas_fritas.webp', '40cmx30cm', 'Activo'),
(39, 3, 'Pizza', '', '389.00', '../public/images/productos/comidas/Pizza.webp', '40cmx30cm', 'Activo'),
(40, 3, 'Vaso de Soda', '', '149.00', '../public/images/productos/comidas/Vaso_soda.webp', '30cmx20cm', 'Activo'),
(41, 4, 'Bola_Navidad', '', '169.00', '../public/images/productos/festividades/Bola_Navidad.webp', '20cmx20cm', 'Activo'),
(42, 4, 'Calabaza', '', '259.00', '../public/images/productos/festividades/Calabaza.webp', '30cmx30cm', 'Activo'),
(43, 4, 'Corazon_flechado', '', '249.00', '../public/images/productos/festividades/Corazon_flechado.webp', '30cmx30cm', 'Activo'),
(44, 4, 'Fantasmas Pacman', '', '339.00', '../public/images/productos/festividades/Fantasmas.webp', '40cmx30cm', 'Activo'),
(45, 4, 'Letrero Happy Birthday', '', '389.00', '../public/images/productos/festividades/Letrero_Happy_Birthday.webp', '40cmx20cm', 'Activo'),
(46, 4, 'Murcielago', '', '379.00', '../public/images/productos/festividades/Murcielago.webp', '40cmx30cm', 'Activo'),
(47, 4, 'Papa Noel Merry Christmas', '', '479.00', '../public/images/productos/festividades/Papa_noel_MerryChristmas.webp', '40cmx30cm', 'Activo'),
(48, 4, 'Papa Noel', '', '479.00', '../public/images/productos/festividades/PapaNoel.webp', '40cmx30cm', 'Activo'),
(49, 4, 'Reno', '', '399.00', '../public/images/productos/festividades/Reno.webp', '40cmx30cm', 'Activo'),
(51, 5, 'Be you', '', '169.00', '../public/images/productos/frases/be_you.webp', '20cmx40cm', 'Activo'),
(52, 5, 'Believe in yourself', '', '429.00', '../public/images/productos/frases/believe_in_yourself.webp', '20cmx55cm', 'Activo'),
(53, 5, 'Enjoy the little things', '', '479.00', '../public/images/productos/frases/Enjoy_the_little_things.webp', '20cmx60cm', 'Activo'),
(54, 5, 'Good luck', '', '489.00', '../public/images/productos/frases/Good_luck.webp', '30cmx45cm', 'Activo'),
(55, 5, 'Happy halloween', '', '469.00', '../public/images/productos/frases/Happy_Halloween.webp', '30cmx40cm', 'Activo'),
(56, 5, 'Never stop dreaming', '', '379.00', '../public/images/productos/frases/Never_stop_dreaming.webp', '40cmx30cm', 'Activo'),
(57, 5, 'You will shine', '', '349.00', '../public/images/productos/frases/You_will_shine.webp', '20cmx50cm', 'Activo'),
(58, 5, 'Never give up', '', '389.00', '../public/images/productos/frases/Never_give_up.webp', '15cmx50cm', 'Activo'),
(59, 5, 'Shine', '', '269.00', '../public/images/productos/frases/Shine.webp', '40cmx20cm', 'Activo'),
(60, 5, 'Made with love', '', '349.00', '../public/images/productos/frases/Made_with_love.webp', '20cmx50cm', 'Activo'),
(61, 5, 'Selena', '', '329.00', '../public/images/productos/frases/Selena.webp', '40cmx30cm', 'Activo'),
(62, 5, 'Star Wars', '', '389.00', '../public/images/productos/frases/StarWars.webp', '25cmx40cm', 'Activo'),
(63, 5, 'Summer Time', '', '479.00', '../public/images/productos/frases/Summer_Time.webp', '40cmx35cm', 'Activo'),
(64, 5, 'Zona Gamer', '', '389.00', '../public/images/productos/frases/Zona_Gamer.webp', '15cmx50cm', 'Activo'),
(65, 6, 'Audifono', '', '199.00', '../public/images/productos/musica/Audifono.webp', '30cmx30cm', 'Activo'),
(66, 6, 'Guitarra', '', '289.00', '../public/images/productos/musica/guitarra.webp', '30cmx50cm', 'Activo'),
(67, 6, 'Mano rock', '', '378.00', '../public/images/productos/musica/Mano_rock.webp', '30cmx30cm', 'Activo'),
(68, 6, 'Microfono', '', '289.00', '../public/images/productos/musica/Microfono2.webp', '30cmx20cm', 'Activo'),
(69, 6, 'Microfono en mano', '', '390.00', '../public/images/productos/musica/microfono.webp', '40cmx30cm', 'Activo'),
(70, 6, 'Nota musical', '', '259.00', '../public/images/productos/musica/Nota_musical.webp', '30cmx30cm', 'Activo'),
(71, 7, 'off_50', '', '389.00', '../public/images/productos/negocios/off_50.webp', '40cmx40cm', 'Activo'),
(72, 6, 'Red Hot Chilli Peppers', '', '629.00', '../public/images/productos/musica/Red_Hot.webp', '60cmx60cm', 'Activo'),
(73, 6, 'Guitarra Rock', '', '469.00', '../public/images/productos/musica/Guitarra_Rock.webp', '60cmx40cm', 'Activo'),
(74, 7, 'Hamburguesa Cafe', '', '469.00', '../public/images/productos/negocios/Hamburguesa-Cafe.webp', '40cmx40cm', 'Activo'),
(75, 7, 'Bar', '', '239.00', '../public/images/productos/negocios/Bar.webp', '30cmx30cm', 'Activo'),
(76, 7, 'Cafe 24hrs', '', '269.00', '../public/images/productos/negocios/Cafe_24hrs.webp', '30cmx30cm', 'Activo'),
(77, 7, 'Cafe Caliente', '', '359.00', '../public/images/productos/negocios/Cafe_Caliente.webp', '40cmx30cm', 'Activo'),
(78, 7, 'Letrero Open Circular', '', '229.00', '../public/images/productos/negocios/Letrero_Open.webp', '40cmx30cm', 'Activo'),
(79, 7, 'Letrero Close', '', '349.00', '../public/images/productos/negocios/Letrero_Close.webp', '40cmx30cm', 'Activo'),
(80, 7, 'Letrero Open', '', '379.00', '../public/images/productos/negocios/Letrero_Open2.webp', '40cmx30cm', 'Activo'),
(81, 7, 'SALE', '', '379.00', '../public/images/productos/negocios/SALE.webp', '40cmx30cm', 'Activo'),
(82, 7, 'Hotdog', '', '215.00', '../public/images/productos/negocios/hotdog.webp', '30cmx20cm', 'Activo'),
(83, 8, 'Angel con cola', '', '739.00', '../public/images/productos/variados/Angel_alas_cola.webp', '120cmx80cm', 'Activo'),
(84, 8, 'Angel', '', '199.00', '../public/images/productos/variados/Alas_angel.webp', '30cmx20cm', 'Activo'),
(85, 8, 'Arcoiris y nubes', '', '499.00', '../public/images/productos/variados/Arcoiris_nubes.webp', '50cmx40cm', 'Activo'),
(86, 8, 'Pies de bailarina', '', '399.00', '../public/images/productos/variados/Bailarina_pies.webp', '40cmx30cm', 'Activo'),
(87, 8, 'Bailarina de ballet', '', '429.00', '../public/images/productos/variados/Bailarina de ballet.webp', '50cmx40cm', 'Activo'),
(88, 8, 'Cerezas', '', '219.00', '../public/images/productos/variados/Cerezas.webp', '40cmx30cm', 'Activo'),
(89, 8, 'Alianza Lima', '', '860.00', '../public/images/productos/variados/Club_Alianza.webp', '60cmx40cm', 'Activo'),
(90, 8, 'Universitario', '', '199.00', '../public/images/productos/variados/Club_Universitario.webp', '30cmx30cm', 'Activo'),
(91, 8, 'Fuego', '', '169.00', '../public/images/productos/variados/fuego.webp', '30cmx20cm', 'Activo'),
(92, 8, 'Gato', '', '219.00', '../public/images/productos/variados/Cat.webp', '40cmx20cm', 'Activo'),
(93, 8, 'Girasol', '', '589.00', '../public/images/productos/variados/Girasol.webp', '40cmx40cm', 'Activo'),
(94, 8, 'Lentes Harry Potter', '', '299.00', '../public/images/productos/variados/Lentes.webp', '40cmx20cm', 'Activo'),
(95, 8, 'Limon', '', '245.00', '../public/images/productos/variados/Limon.webp', '30cmx20cm', 'Activo'),
(96, 8, 'Palmeras', '', '359.00', '../public/images/productos/variados/Palmeras.webp', '40cmx30cm', 'Activo'),
(97, 8, 'Trebol', '', '249.00', '../public/images/productos/variados/Trebol.webp', '30cmx30cm', 'Activo'),
(98, 8, 'Basketball', '', '249.00', '../public/images/productos/variados/Basketball.webp', '30cmx30cm', 'Activo'),
(99, 8, 'Perro', '', '389.00', '../public/images/productos/variados/Dog.webp', '30cmx30cm', 'Activo'),
(100, 9, 'Among Us Dead', '', '339.00', '../public/images/productos/videojuegos/Among_us_hueso.webp', '40cmx35cm', 'Activo'),
(101, 9, 'Among Us', '', '299.00', '../public/images/productos/videojuegos/Among_us.webp', '40cmx30cm', 'Activo'),
(102, 9, 'Among Us 2', '', '379.00', '../public/images/productos/videojuegos/Among_us2.webp', '40cmx50cm', 'Activo'),
(103, 9, 'Booyah', '', '399.00', '../public/images/productos/videojuegos/Booyah.webp', '60cmx40cm', 'Activo'),
(104, 9, 'Fantasma MarioKart', '', '329.00', '../public/images/productos/videojuegos/Fantasma_MarioK.webp', '40cmx30cm', 'Activo'),
(105, 9, 'Honguito MarioBroos', '', '249.00', '../public/images/productos/videojuegos/Honguito.webp', '30cmx30cm', 'Activo'),
(106, 9, 'PS4', '', '299.00', '../public/images/productos/videojuegos/PS4.webp', '40cmx20cm', 'Activo'),
(107, 10, 'Corazones de angel y diablo', '', '349.00', '../public/images/productos/tendencia/Corazones_angelydiablo.webp', '30cmx40cm', 'Activo'),
(108, 10, 'Diamante', '', '239.00', '../public/images/productos/tendencia/Diamante.webp', '30cmx40cm', 'Activo'),
(109, 10, 'Do not enter', '', '339.00', '../public/images/productos/tendencia/Do_not_enter.webp', '40cmx40cm', 'Activo'),
(110, 10, 'Flamenco', '', '299.00', '../public/images/productos/tendencia/Flamenco.webp', '40cmx40cm', 'Activo'),
(111, 10, 'Boca', '', '289.00', '../public/images/productos/tendencia/Boca.webp', '40cmx25cm', 'Activo'),
(112, 10, 'Labios', '', '259.00', '../public/images/productos/tendencia/Labios.webp', '40cmx20cm', 'Activo'),
(113, 10, 'Tiktok', '', '349.00', '../public/images/productos/tendencia/Tiktok.webp', '35cmx30cm', 'Activo'),
(114, 10, 'Love x3', '', '329.00', '../public/images/productos/tendencia/Lovex3.webp', '30cmx30cm', 'Activo'),
(115, 10, 'Ojos', '', '299.00', '../public/images/productos/tendencia/Ojo.webp', '40cmx30cm', 'Activo'),
(116, 10, 'Pestañas', '', '229.00', '../public/images/productos/tendencia/Pestanas.webp', '40cmx20cm', 'Activo'),
(117, 10, 'Helado', '', '219.00', '../public/images/productos/tendencia/Helado.webp', '30cmx20cm', 'Activo'),
(118, 8, 'Planta', '', '389.00', '../public/images/productos/variados/planta.webp', '40cmx30cm', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_productoxcolor`
--

CREATE TABLE `tab_productoxcolor` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `tab_productoxcolor`
--

INSERT INTO `tab_productoxcolor` (`id`, `id_producto`, `id_color`) VALUES
(1, 1, 2),
(2, 1, 9),
(3, 2, 9),
(4, 2, 7),
(5, 3, 3),
(6, 4, 2),
(7, 4, 3),
(8, 5, 5),
(9, 6, 4),
(10, 7, 1),
(11, 8, 3),
(12, 9, 4),
(13, 12, 8),
(14, 13, 9),
(15, 13, 5),
(16, 13, 6),
(17, 14, 6),
(18, 15, 5),
(19, 15, 7),
(20, 16, 3),
(21, 16, 9),
(22, 17, 6),
(23, 18, 4),
(24, 18, 9),
(25, 9, 9),
(26, 19, 4),
(27, 19, 9),
(28, 20, 3),
(31, 21, 6),
(32, 22, 6),
(33, 22, 9),
(34, 22, 4),
(35, 22, 1),
(36, 23, 3),
(37, 24, 8),
(38, 25, 9),
(39, 25, 5),
(40, 26, 4),
(41, 25, 6),
(42, 25, 4),
(43, 25, 9),
(44, 28, 5),
(45, 29, 4),
(46, 30, 4),
(47, 30, 9),
(48, 32, 9),
(49, 32, 4),
(50, 33, 9),
(51, 33, 8),
(52, 33, 10),
(53, 34, 10),
(54, 34, 5),
(55, 34, 3),
(56, 35, 4),
(57, 35, 3),
(58, 35, 6),
(59, 36, 9),
(60, 36, 4),
(61, 36, 8),
(62, 37, 9),
(63, 37, 8),
(64, 37, 4),
(65, 38, 9),
(66, 38, 4),
(67, 38, 8),
(68, 39, 9),
(69, 39, 4),
(70, 39, 8),
(71, 40, 9),
(72, 40, 4),
(73, 41, 9),
(74, 41, 6),
(75, 41, 4),
(76, 41, 3),
(77, 42, 9),
(78, 42, 10),
(79, 43, 3),
(80, 43, 4),
(81, 44, 9),
(82, 44, 6),
(83, 45, 9),
(84, 45, 3),
(85, 45, 8),
(86, 45, 6),
(87, 46, 9),
(88, 46, 4),
(89, 47, 9),
(90, 47, 4),
(91, 47, 3),
(92, 47, 6),
(93, 48, 9),
(94, 48, 4),
(95, 48, 6),
(96, 49, 3),
(97, 49, 9),
(98, 51, 9),
(99, 51, 8),
(100, 52, 9),
(101, 52, 6),
(102, 53, 9),
(103, 53, 8),
(104, 54, 8),
(105, 54, 6),
(106, 55, 4),
(107, 55, 9),
(108, 56, 9),
(109, 56, 8),
(110, 57, 9),
(111, 57, 3),
(112, 58, 6),
(113, 59, 1),
(114, 60, 9),
(115, 60, 4),
(116, 61, 3),
(117, 61, 9),
(118, 62, 4),
(119, 62, 9),
(120, 63, 9),
(121, 63, 6),
(122, 64, 9),
(123, 64, 5),
(124, 65, 9),
(125, 65, 4),
(126, 66, 4),
(127, 66, 9),
(128, 67, 4),
(129, 67, 9),
(130, 67, 3),
(131, 68, 9),
(132, 68, 8),
(133, 69, 9),
(134, 69, 4),
(135, 69, 1),
(136, 70, 9),
(137, 70, 8),
(138, 71, 5),
(139, 72, 9),
(140, 72, 1),
(141, 72, 3),
(142, 73, 9),
(143, 73, 1),
(144, 74, 9),
(145, 74, 4),
(146, 74, 3),
(147, 74, 5),
(157, 75, 9),
(158, 75, 5),
(159, 76, 9),
(160, 76, 3),
(161, 76, 2),
(162, 77, 2),
(163, 78, 9),
(164, 78, 4),
(165, 79, 9),
(166, 79, 3),
(167, 79, 1),
(168, 80, 9),
(169, 80, 3),
(170, 80, 1),
(171, 81, 9),
(172, 81, 8),
(173, 81, 6),
(174, 82, 9),
(175, 82, 4),
(176, 82, 3),
(177, 83, 9),
(178, 83, 8),
(179, 83, 4),
(180, 83, 1),
(181, 84, 9),
(182, 84, 4),
(183, 84, 6),
(184, 85, 9),
(185, 85, 1),
(186, 85, 6),
(187, 85, 4),
(188, 85, 8),
(189, 85, 3),
(190, 86, 9),
(191, 86, 4),
(192, 87, 9),
(193, 87, 4),
(194, 88, 3),
(195, 88, 5),
(196, 89, 9),
(197, 89, 1),
(198, 90, 9),
(199, 90, 3),
(200, 91, 9),
(201, 91, 4),
(202, 92, 9),
(203, 93, 9),
(204, 93, 4),
(205, 93, 10),
(206, 94, 1),
(207, 95, 9),
(208, 95, 5),
(209, 95, 4),
(210, 96, 9),
(211, 96, 5),
(212, 97, 9),
(213, 96, 5),
(214, 98, 9),
(215, 98, 10),
(216, 99, 9),
(217, 99, 4),
(218, 100, 9),
(219, 100, 3),
(220, 101, 3),
(221, 101, 6),
(222, 102, 3),
(223, 102, 4),
(224, 103, 9),
(225, 103, 4),
(226, 104, 9),
(227, 103, 8),
(228, 105, 9),
(229, 105, 3),
(230, 106, 9),
(231, 106, 4),
(232, 107, 9),
(233, 107, 3),
(234, 107, 8),
(235, 108, 8),
(236, 109, 9),
(237, 109, 3),
(238, 110, 9),
(239, 110, 8),
(240, 111, 9),
(241, 111, 3),
(242, 112, 9),
(243, 112, 3),
(244, 113, 9),
(245, 113, 8),
(246, 113, 6),
(247, 114, 9),
(248, 114, 8),
(249, 115, 9),
(250, 115, 6),
(251, 116, 9),
(252, 116, 8),
(253, 117, 9),
(254, 117, 8),
(255, 117, 4),
(256, 118, 9),
(257, 118, 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tab_categorias`
--
ALTER TABLE `tab_categorias`
  ADD PRIMARY KEY (`cat_id`) USING BTREE;

--
-- Indices de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  ADD PRIMARY KEY (`cli_id`) USING BTREE;

--
-- Indices de la tabla `tab_color`
--
ALTER TABLE `tab_color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tab_listacompra`
--
ALTER TABLE `tab_listacompra`
  ADD PRIMARY KEY (`com_id`) USING BTREE,
  ADD KEY `com_cliente` (`com_cliente`) USING BTREE,
  ADD KEY `com_producto` (`com_producto`) USING BTREE;

--
-- Indices de la tabla `tab_producto`
--
ALTER TABLE `tab_producto`
  ADD PRIMARY KEY (`pro_id`) USING BTREE,
  ADD KEY `pro_categoria` (`pro_categoria`) USING BTREE;

--
-- Indices de la tabla `tab_productoxcolor`
--
ALTER TABLE `tab_productoxcolor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tab_categorias`
--
ALTER TABLE `tab_categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tab_clientes`
--
ALTER TABLE `tab_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tab_color`
--
ALTER TABLE `tab_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tab_listacompra`
--
ALTER TABLE `tab_listacompra`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tab_producto`
--
ALTER TABLE `tab_producto`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `tab_productoxcolor`
--
ALTER TABLE `tab_productoxcolor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tab_listacompra`
--
ALTER TABLE `tab_listacompra`
  ADD CONSTRAINT `tab_listacompra_ibfk_1` FOREIGN KEY (`com_cliente`) REFERENCES `tab_clientes` (`cli_id`),
  ADD CONSTRAINT `tab_listacompra_ibfk_2` FOREIGN KEY (`com_producto`) REFERENCES `tab_producto` (`pro_id`);

--
-- Filtros para la tabla `tab_producto`
--
ALTER TABLE `tab_producto`
  ADD CONSTRAINT `tab_producto_ibfk_1` FOREIGN KEY (`pro_categoria`) REFERENCES `tab_categorias` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
