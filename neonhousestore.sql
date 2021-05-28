/*
 Navicat Premium Data Transfer

 Source Server         : xampp
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : neonhousestore2

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 09/02/2021 14:36:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tab_categorias
-- ----------------------------
DROP TABLE IF EXISTS `tab_categorias`;
CREATE TABLE `tab_categorias`  (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nombre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cat_imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cat_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cat_estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`cat_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tab_categorias
-- ----------------------------
INSERT INTO `tab_categorias` VALUES (1, 'Animados', '../public/images/nombrescategorias/animados.png', 'categorias/animados.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (2, 'Cómics', '../public/images/nombrescategorias/comics.png', 'categorias/cintas.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (3, 'Comida', '../public/images/nombrescategorias/comida.png', 'categorias/comics.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (4, 'Festividades', '../public/images/nombrescategorias/festividades.png', 'categorias/deporte.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (5, 'Frases', '../public/images/nombrescategorias/frases.png', 'categorias/emojis.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (6, 'Música', '../public/images/nombrescategorias/musica.png', 'categorias/festividades.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (7, 'Negocios', '../public/images/nombrescategorias/negocios.png', 'categorias/frases.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (8, 'Variados', '../public/images/nombrescategorias/variados.png', 'categorias/musica.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (9, 'Videojuegos', '../public/images/nombrescategorias/videojuegos.png', 'categorias/personajes_iconicos.php', 'Activo');
INSERT INTO `tab_categorias` VALUES (10, 'Tendencias', '../public/images/nombrescategorias/tendencia.png', '', 'Activo');

-- ----------------------------
-- Table structure for tab_clientes
-- ----------------------------
DROP TABLE IF EXISTS `tab_clientes`;
CREATE TABLE `tab_clientes`  (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cli_apellidos` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cli_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cli_clave` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cli_estado` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`cli_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tab_clientes
-- ----------------------------
INSERT INTO `tab_clientes` VALUES (1, 'Juan', 'Quispe Guevara', 'juan@gmail.com', '$2y$10$Rl78wr7dgliEd5907tS5/ughSkdUdEWwt3PT.bZuCOMTd5/ouT1eW', 'Activo');
INSERT INTO `tab_clientes` VALUES (2, 'Gabriela', 'Gomez Suarez', 'gabriela@gmail.com', '$2y$10$FUs2jKBjVg0jJuvEWF.hc.ieSEqyuettUaHI40IrSbUlH8RXKHKiy', 'Activo');
INSERT INTO `tab_clientes` VALUES (3, 'Marvin', 'Taipe Gongora ', 'marvin@gmail.com', '$2y$10$6FfOKwdypZhzAuF82p8vbOdU2.pt2RdefPt7fdlxsEch78mN7T8WW', 'Activo');

-- ----------------------------
-- Table structure for tab_listacompra
-- ----------------------------
DROP TABLE IF EXISTS `tab_listacompra`;
CREATE TABLE `tab_listacompra`  (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_cliente` int(11) NOT NULL,
  `com_producto` int(11) NOT NULL,
  `com_precio` decimal(6, 2) NOT NULL,
  `com_cantidad` int(11) NOT NULL,
  `com_total` decimal(10, 2) NOT NULL,
  `com_imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `com_tamano` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `com_estado` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`com_id`) USING BTREE,
  INDEX `com_cliente`(`com_cliente`) USING BTREE,
  INDEX `com_producto`(`com_producto`) USING BTREE,
  CONSTRAINT `tab_listacompra_ibfk_1` FOREIGN KEY (`com_cliente`) REFERENCES `tab_clientes` (`cli_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `tab_listacompra_ibfk_2` FOREIGN KEY (`com_producto`) REFERENCES `tab_producto` (`pro_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tab_listacompra
-- ----------------------------
INSERT INTO `tab_listacompra` VALUES (3, 1, 62, 389.00, 5, 1945.00, '../public/images/productos/frases/StarWars.png', '25cmx40cm', 'Activo');
INSERT INTO `tab_listacompra` VALUES (7, 3, 51, 169.00, 1, 169.00, '../public/images/productos/frases/be_you.png', '20cmx40cm', 'Activo');
INSERT INTO `tab_listacompra` VALUES (9, 3, 111, 289.00, 1, 289.00, '../public/images/productos/tendencia/Boca.png', '40cmx25cm', 'Activo');
INSERT INTO `tab_listacompra` VALUES (10, 3, 71, 389.00, 1, 389.00, '../public/images/productos/negocios/50_ off.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_listacompra` VALUES (11, 2, 115, 299.00, 3, 897.00, '../public/images/productos/tendencia/Ojo.png', '40cmx30cm', 'Activo');

-- ----------------------------
-- Table structure for tab_producto
-- ----------------------------
DROP TABLE IF EXISTS `tab_producto`;
CREATE TABLE `tab_producto`  (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_categoria` int(11) NOT NULL,
  `pro_nombre` varchar(100) CHARACTER SET ujis COLLATE ujis_japanese_ci NOT NULL,
  `pro_descripcion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_precio` decimal(6, 2) NOT NULL,
  `pro_imagen` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pro_tamano` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pro_estado` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`pro_id`) USING BTREE,
  INDEX `pro_categoria`(`pro_categoria`) USING BTREE,
  CONSTRAINT `tab_producto_ibfk_1` FOREIGN KEY (`pro_categoria`) REFERENCES `tab_categorias` (`cat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 119 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tab_producto
-- ----------------------------
INSERT INTO `tab_producto` VALUES (1, 2, 'Advengers', '', 349.00, '../public/images/productos/comics/advengers.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (2, 2, 'Batman', '', 259.00, '../public/images/productos/comics/batman.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (3, 2, 'Deadpool', '', 289.00, '../public/images/productos/comics/deadpool.png', '30cmx35cm', 'Activo');
INSERT INTO `tab_producto` VALUES (4, 2, 'Escudo', '', 489.00, '../public/images/productos/comics/escudo.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (5, 2, 'Hulk', '', 399.00, '../public/images/productos/comics/hulk.png', '35cmx35cm', 'Activo');
INSERT INTO `tab_producto` VALUES (6, 2, 'Mujer Maravilla', '', 299.00, '../public/images/productos/comics/ww.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (7, 1, 'Astronauta', '', 489.00, '../public/images/productos/animados/Astronauta.png', '60cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (8, 1, 'Blanca Nieves', '', 319.00, '../public/images/productos/animados/Blanca_nieves.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (9, 1, 'Bob Esponja', '', 369.00, '../public/images/productos/animados/Bob_Esponja.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (12, 1, 'Chanchito', '', 389.00, '../public/images/productos/animados/Chanchito.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (13, 1, 'Chavo', '', 349.00, '../public/images/productos/animados/Chavo.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (14, 1, 'Cinderella', '', 399.00, '../public/images/productos/animados/Cinderella.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (15, 1, 'Cocodrilo Bebe', '', 329.00, '../public/images/productos/animados/Cocodrilo_bebe.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (16, 1, 'Diablito', '', 299.00, '../public/images/productos/animados/Diablito.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (17, 1, 'Elefante Bebe', '', 279.00, '../public/images/productos/animados/Elefante_bebe.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (18, 1, 'Emoji Beso', '', 289.00, '../public/images/productos/animados/Emoji_beso.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (19, 1, 'Emoji Feliz', '', 219.00, '../public/images/productos/animados/Emoji_feliz.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (20, 1, 'Gorro Mickey', '', 239.00, '../public/images/productos/animados/Gorro_Mickey.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (21, 1, 'Jazmin', '', 249.00, '../public/images/productos/animados/Jazmin.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (22, 1, 'Paw', '', 689.00, '../public/images/productos/animados/Paw.png', '40cmx60cm', 'Activo');
INSERT INTO `tab_producto` VALUES (23, 1, 'Marylin Monroe', '', 369.00, '../public/images/productos/animados/Marylin_Monroe.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (24, 1, 'Mariposa', '', 189.00, '../public/images/productos/animados/Mariposa.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (25, 1, 'Mary_Poppins.png', '', 349.00, '../public/images/productos/animados/Mary_Poppins.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (26, 1, 'Mickey Circular', '', 299.00, '../public/images/productos/animados/Mickey_circulo.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (27, 1, 'Nube', '', 599.00, '../public/images/productos/animados/Nube.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (28, 1, 'Sirenita', '', 299.00, '../public/images/productos/animados/Sirenita.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (29, 1, 'Skyle Paw', '', 349.00, '../public/images/productos/animados/Skyle_paw.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (30, 1, 'Mickey Disney', '', 589.00, '../public/images/productos/animados/MM_Disney.png', '45cmx33cm', 'Activo');
INSERT INTO `tab_producto` VALUES (32, 3, 'Cerveza', '', 169.00, '../public/images/productos/comidas/Cerveza.png', '35cmx25cm', 'Activo');
INSERT INTO `tab_producto` VALUES (33, 3, 'Dona', '', 149.00, '../public/images/productos/comidas/Dona.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (34, 3, 'Hamburguesa', '', 279.00, '../public/images/productos/comidas/Hamburguesa.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (35, 3, 'Helado', '', 249.00, '../public/images/productos/comidas/Helado.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (36, 3, 'Hotdog', '', 349.00, '../public/images/productos/comidas/Hot_dog.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (37, 3, 'Paleta Helado', '', 239.00, '../public/images/productos/comidas/Paleta_helado.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (38, 3, 'Papas Fritas', '', 419.00, '../public/images/productos/comidas/Papas_fritas.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (39, 3, 'Pizza', '', 389.00, '../public/images/productos/comidas/Pizza.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (40, 3, 'Vaso de Soda', '', 149.00, '../public/images/productos/comidas/Vaso_soda.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (41, 4, 'Bola_Navidad', '', 169.00, '../public/images/productos/festividades/Bola_Navidad.png', '20cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (42, 4, 'Calabaza', '', 259.00, '../public/images/productos/festividades/Calabaza.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (43, 4, 'Corazon_flechado', '', 249.00, '../public/images/productos/festividades/Corazon_flechado.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (44, 4, 'Fantasmas Pacman', '', 339.00, '../public/images/productos/festividades/Fantasmas.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (45, 4, 'Letrero Happy Birthday', '', 389.00, '../public/images/productos/festividades/Letrero_Happy_Birthday.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (46, 4, 'Murcielago', '', 379.00, '../public/images/productos/festividades/Murcielago.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (47, 4, 'Papa Noel Merry Christmas', '', 479.00, '../public/images/productos/festividades/Papa_noel_MerryChristmas.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (48, 4, 'Papa Noel', '', 479.00, '../public/images/productos/festividades/PapaNoel.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (49, 4, 'Reno', '', 399.00, '../public/images/productos/festividades/Reno.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (51, 5, 'Be you', '', 169.00, '../public/images/productos/frases/be_you.png', '20cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (52, 5, 'Believe in yourself', '', 429.00, '../public/images/productos/frases/believe_in_yourself.png', '20cmx55cm', 'Activo');
INSERT INTO `tab_producto` VALUES (53, 5, 'Enjoy the little things', '', 479.00, '../public/images/productos/frases/Enjoy_the_little_things.png', '20cmx60cm', 'Activo');
INSERT INTO `tab_producto` VALUES (54, 5, 'Good luck', '', 489.00, '../public/images/productos/frases/Good_luck.png', '30cmx45cm', 'Activo');
INSERT INTO `tab_producto` VALUES (55, 5, 'Happy halloween', '', 469.00, '../public/images/productos/frases/Happy_Halloween.png', '30cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (56, 5, 'Never stop dreaming', '', 379.00, '../public/images/productos/frases/Never_stop_dreaming.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (57, 5, 'You will shine', '', 349.00, '../public/images/productos/frases/You_will_shine.png', '20cmx50cm', 'Activo');
INSERT INTO `tab_producto` VALUES (58, 5, 'Never give up', '', 389.00, '../public/images/productos/frases/Never_give_up.png', '15cmx50cm', 'Activo');
INSERT INTO `tab_producto` VALUES (59, 5, 'Shine', '', 269.00, '../public/images/productos/frases/Shine.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (60, 5, 'Made with love', '', 349.00, '../public/images/productos/frases/Made_with_love.png', '20cmx50cm', 'Activo');
INSERT INTO `tab_producto` VALUES (61, 5, 'Selena', '', 329.00, '../public/images/productos/frases/Selena.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (62, 5, 'Star Wars', '', 389.00, '../public/images/productos/frases/StarWars.png', '25cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (63, 5, 'Summer Time', '', 479.00, '../public/images/productos/frases/Summer_Time.png', '40cmx35cm', 'Activo');
INSERT INTO `tab_producto` VALUES (64, 5, 'Zona Gamer', '', 389.00, '../public/images/productos/frases/Zona_Gamer.png', '15cmx50cm', 'Activo');
INSERT INTO `tab_producto` VALUES (65, 6, 'Audifono', '', 199.00, '../public/images/productos/musica/Audifono.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (66, 6, 'Guitarra', '', 289.00, '../public/images/productos/musica/Guitarra.png', '30cmx50cm', 'Activo');
INSERT INTO `tab_producto` VALUES (67, 6, 'Mano rock', '', 378.00, '../public/images/productos/musica/Mano_rock.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (68, 6, 'Microfono', '', 289.00, '../public/images/productos/musica/Microfono2.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (69, 6, 'Microfono en mano', '', 390.00, '../public/images/productos/musica/Microfono.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (70, 6, 'Nota musical', '', 259.00, '../public/images/productos/musica/Nota_musical.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (71, 7, '50%', '', 389.00, '../public/images/productos/negocios/50_ off.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (72, 6, 'Red Hot Chilli Peppers', '', 629.00, '../public/images/productos/musica/Red_Hot.png', '60cmx60cm', 'Activo');
INSERT INTO `tab_producto` VALUES (73, 6, 'Guitarra Rock', '', 469.00, '../public/images/productos/musica/Guitarra_Rock.png', '60cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (74, 7, 'Hamburguesa Cafe', '', 469.00, '../public/images/productos/negocios/Hamburguesa-Cafe.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (75, 7, 'Bar', '', 239.00, '../public/images/productos/negocios/Bar.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (76, 7, 'Cafe 24hrs', '', 269.00, '../public/images/productos/negocios/Cafe_24hrs.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (77, 7, 'Cafe Caliente', '', 359.00, '../public/images/productos/negocios/Cafe_Caliente.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (78, 7, 'Letrero Open Circular', '', 229.00, '../public/images/productos/negocios/Letrero_Open.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (79, 7, 'Letrero Close', '', 349.00, '../public/images/productos/negocios/Letrero_Close.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (80, 7, 'Letrero Open', '', 379.00, '../public/images/productos/negocios/Letrero_Open2.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (81, 7, 'SALE', '', 379.00, '../public/images/productos/negocios/SALE.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (82, 7, 'Hotdog', '', 215.00, '../public/images/productos/negocios/hotdog.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (83, 8, 'Angel con cola', '', 739.00, '../public/images/productos/variados/Angel_alas_cola.png', '120cmx80cm', 'Activo');
INSERT INTO `tab_producto` VALUES (84, 8, 'Angel', '', 199.00, '../public/images/productos/variados/Alas_angel.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (85, 8, 'Arcoiris y nubes', '', 499.00, '../public/images/productos/variados/Arcoiris_nubes.png', '50cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (86, 8, 'Pies de bailarina', '', 399.00, '../public/images/productos/variados/Bailarina_pies.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (87, 8, 'Bailarina de ballet', '', 429.00, '../public/images/productos/variados/Bailarina de ballet.png', '50cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (88, 8, 'Cerezas', '', 219.00, '../public/images/productos/variados/Cerezas.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (89, 8, 'Alianza Lima', '', 860.00, '../public/images/productos/variados/Club_Alianza.png', '60cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (90, 8, 'Universitario', '', 199.00, '../public/images/productos/variados/Club_Universitario.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (91, 8, 'Fuego', '', 169.00, '../public/images/productos/variados/fuego.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (92, 8, 'Gato', '', 219.00, '../public/images/productos/variados/Cat.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (93, 8, 'Girasol', '', 589.00, '../public/images/productos/variados/Girasol.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (94, 8, 'Lentes Harry Potter', '', 299.00, '../public/images/productos/variados/Lentes.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (95, 8, 'Limon', '', 245.00, '../public/images/productos/variados/Limon.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (96, 8, 'Palmeras', '', 359.00, '../public/images/productos/variados/Palmeras.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (97, 8, 'Trebol', '', 249.00, '../public/images/productos/variados/Trebol.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (98, 8, 'Basketball', '', 249.00, '../public/images/productos/variados/Basketball.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (99, 8, 'Perro', '', 389.00, '../public/images/productos/variados/Dog.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (100, 9, 'Among Us Dead', '', 339.00, '../public/images/productos/videojuegos/Among_us_hueso.png', '40cmx35cm', 'Activo');
INSERT INTO `tab_producto` VALUES (101, 9, 'Among Us', '', 299.00, '../public/images/productos/videojuegos/Among_us.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (102, 9, 'Among Us 2', '', 379.00, '../public/images/productos/videojuegos/Among_us2.png', '40cmx50cm', 'Activo');
INSERT INTO `tab_producto` VALUES (103, 9, 'Booyah', '', 399.00, '../public/images/productos/videojuegos/Booyah.png', '60cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (104, 9, 'Fantasma MarioKart', '', 329.00, '../public/images/productos/videojuegos/Fantasma_MarioK.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (105, 9, 'Honguito MarioBroos', '', 249.00, '../public/images/productos/videojuegos/Honguito.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (106, 9, 'PS4', '', 299.00, '../public/images/productos/videojuegos/PS4.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (107, 10, 'Corazones de angel y diablo', '', 349.00, '../public/images/productos/tendencia/Corazones_angelydiablo.png', '30cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (108, 10, 'Diamante', '', 239.00, '../public/images/productos/tendencia/Diamante.png', '30cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (109, 10, 'Do not enter', '', 339.00, '../public/images/productos/tendencia/Do_not_enter.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (110, 10, 'Flamenco', '', 299.00, '../public/images/productos/tendencia/Flamenco.png', '40cmx40cm', 'Activo');
INSERT INTO `tab_producto` VALUES (111, 10, 'Boca', '', 289.00, '../public/images/productos/tendencia/Boca.png', '40cmx25cm', 'Activo');
INSERT INTO `tab_producto` VALUES (112, 10, 'Labios', '', 259.00, '../public/images/productos/tendencia/Labios.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (113, 10, 'Tiktok', '', 349.00, '../public/images/productos/tendencia/Tiktok.png', '35cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (114, 10, 'Love x3', '', 329.00, '../public/images/productos/tendencia/Lovex3.png', '30cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (115, 10, 'Ojos', '', 299.00, '../public/images/productos/tendencia/Ojo.png', '40cmx30cm', 'Activo');
INSERT INTO `tab_producto` VALUES (116, 10, 'Pestañas', '', 229.00, '../public/images/productos/tendencia/Pestanas.png', '40cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (117, 10, 'Helado', '', 219.00, '../public/images/productos/tendencia/Helado.png', '30cmx20cm', 'Activo');
INSERT INTO `tab_producto` VALUES (118, 8, 'Planta', '', 389.00, '../public/images/productos/variados/planta.png', '40cmx30cm', 'Activo');

SET FOREIGN_KEY_CHECKS = 1;
