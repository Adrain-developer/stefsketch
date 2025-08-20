/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.11.10-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u773299113_blog_eventos
-- ------------------------------------------------------
-- Server version	10.11.10-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog_authors`
--

DROP TABLE IF EXISTS `blog_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_authors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_authors`
--

LOCK TABLES `blog_authors` WRITE;
/*!40000 ALTER TABLE `blog_authors` DISABLE KEYS */;
INSERT INTO `blog_authors` VALUES
(1,'Hanna Hernández',NULL,NULL,'2025-06-30 19:56:23','2025-06-30 19:56:23',NULL,NULL,NULL,NULL),
(2,'Amentit Edit','','me gusta mucho gritarle a Adrián al oído, si veo que se acuesta voy de inmediato a encimarme en el aun que no este cómoda y no lo dejo en ningún momento  :)','2025-06-30 21:39:56','2025-07-19 00:39:46','autores/1752878225_687acc91753ba.jpg','adadadada','dadadadad','adadadada'),
(3,'El Gran Chumis','elgranchuma@gmail.com','','2025-06-30 21:40:07','2025-08-05 15:09:19',NULL,'','',''),
(4,'Motorcicleta','','me gusta mucho molestar a amentit y que no se metan cuando como y comer mucho y que me acaricien mucho y que me carguen y que no digan nada de mi sobrepeso y que me dejen hacer lo que yo quiera siempre y no les paso mis redes aun no se lo merecen ','2025-07-18 22:46:04','2025-07-18 22:46:04','autores/1752878764_687aceac0c64d.jpg','','',''),
(6,'Chuma Yoil','elchumis@correo.com','este es una bio dentro del nuevo form para ver si se relaciona de forma correcta autores con users','2025-08-01 22:18:15','2025-08-02 05:41:16','autores/1754113276_688da4fc93ecd.jpg','facebook.com','instagram.com','');
/*!40000 ALTER TABLE `blog_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_categories`
--

LOCK TABLES `blog_categories` WRITE;
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
INSERT INTO `blog_categories` VALUES
(1,'Propuesta','propuesta','2025-08-02 06:44:50','2025-08-02 06:44:50','categorias/1754169380_688e80248be9d.jpg','¡El momento más mágico merece creatividad total! En 2025 las propuestas son experiencias personalizadas: cenas con coreografía sorpresa en rooftops capitalinos, escapadas a viñedos queretanos o mensajes ocultos en postres de chef. La clave es reflejar su historia de amor con elementos únicos como hologramas o serenatas de mariachi. ¡Y no olvides un videógrafo para capturar cada lágrima de emoción! ✨'),
(2,'Planificación','planificacion','2025-08-02 06:44:50','2025-08-02 06:44:50','categorias/1754378297_6891b0399728a.jpg','¡Tu roadmap hacia el gran día! Las novias modernas usan apps como Zola para moodboards digitales y checklists interactivas. Prioriza trío mágico: presupuesto, vibe y fecha. ¿Boho-chic en Tulum o industrial en CDMX? Pro-tip: contrata wedding planner con mínimo 6 meses de anticipación para acceso a proveedores top. ¡Transforma el estrés en diversión con citas de planeación con prosecco! 🥂'),
(3,'Presupuesto','presupuesto',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','El arte de distribuir sin ahogarse: en México el banquete devora 40% del total. Sé estratégica: invierte en lo que impacta (fotografía, comida y música). Trend 2025: fondos nupciales digitales donde invitados donan en lugar de regalos físicos. Apps como Weddy te ayudan a trackear en tiempo real ¡y evitar sorpresas! 💸'),
(4,'Invitados','invitados',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Curar tu tribu es un arte! Listas 2025 son ultra-personalizadas: bodas íntimas (<80 personas) o megafiestas con zonas VIP. Incluye kids corners con animadores y petsitters para mascotas. Digitaliza RSVPs con códigos QR en save-the-dates ¡y evita el drama de los \"+1\"! 👯'),
(5,'Fecha','fecha',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','Más que un número: ritual estratégico. Considera clima (huracanes en Caribe), temporada baja para ahorrar hasta 30%, y fechas simbólicas como 12/12/25. Hot tip: bodas entre semana en haciendas ofrecen paquetes premium con descuento. ¡Que la luna llena sea tu cómplice! 🌙'),
(6,'Lugar','lugar',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','El escenario de tu cuento de hadas: desde haciendas coloniales en Puebla hasta terrazas con vista al Popo. Trend: \"micro-weddings\" en lugares con significado emocional como la casa familiar. Pide recorridos 360° virtuales y verifica permisos para ceremonias al aire libre. ¡El venue perfecto existe! 🏰'),
(7,'Tema','tema',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Tu identidad en cada rincón! Fusiones inesperadas dominan 2025: \"Jungle Glam\" (palmeras + cristalería dorada) o \"Urbano Folklórico\" (grafiti + talavera). Clave: moodboard digital con paleta, texturas y palabras clave. ¡Que los invitados sientan vuestra esencia al entrar! 🎨'),
(8,'Color','color',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Adiós pasteles, hola drama! Paletas 2025: verdes esmeralda con cobrizo, terracotas ardientes o azul noche con plateado. Llévalo más allá con dress code para invitados (ej. \"tonos desérticos\") y detalles comestibles. ¡Hasta el champagne debe hacer match! 🍾'),
(9,'Invitaciones','invitaciones',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Primera impresión wow! Rompe moldes con \"invitaciones-objeto\": cajitas con semillas para plantar, mini botellas de mezcal con detalles láser, o QR codes grabados en espejos. Eco-trend: 70% usa invitaciones digitales animadas con efectos AR. ✉️'),
(10,'Vestimenta','vestimenta',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Expresión pura! Vestidos transformables (faldas removibles para afterparty), jumpsuits de seda con capas o trajes con bordados oaxaqueños. Para él: guayaberas de lino en colores vibrantes. Calzado estrella: tacones de lujo para fotos y sneakers bordadas para bailar. 👗'),
(11,'Belleza','belleza',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Brillo natural y movimiento! Makeup iluminado (pieles hidratadas > mate), peinados effortless con trenzas y flores frescas, uñas \"micro-french\" en nude. Prueba lash lifts para mirada cinematográfica. ¡Glow que resista hasta el último taco! 💄'),
(12,'Ceremonia','ceremonia',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','Rituales con alma: caminar juntos al altar, intercambio de cartas pre-leídas o ceremonias cortas (15-20 min). En México, 90% incluye lazo y arras pero con diseños modernos: plata oxidada o cristal azteca. ¡Personaliza cada gesto! 💍'),
(13,'Votos','votos',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Sus promesas auténticas! Hablen de su serie favorita, memes internos o prometan viajes anuales. Escríbanlos en tarjetas artesanales y guárdenlos en cápsula del tiempo. Tip: incluyan frases en dialecto local para toque emotivo. 📜'),
(14,'Fotografía','fotografia',NULL,'2025-08-02 06:44:50','categorias/1752883144_687adfc812033.jpg','¡Estilo cine de autor! Busca fotógrafos con enfoque documental: momentos robados > poses. Tendencias: filtros de película analógica, sesiones pre-wedding en mercados locales y raw footage para reels. ¡Que cada imagen cuente vuestra historia! 📸'),
(15,'Recepción','recepcion',NULL,'2025-08-02 06:44:50','tendenciademoda202526bodas.jpg','¡Fluye la fiesta! Mesas largas con runners de lino crudo, lounge areas con pufs de lana y pistas de baile circulares con luces LED. Must mexicano: zona de tacos abierta hasta la 1 AM con salsas artesanales. 💃'),
(16,'Menú','menu',NULL,'2025-08-02 06:44:50','categorias/1752884100_687ae384c9e88.jpg','¡Explosión de sabores! Food trucks de tacos al pastor gourmet, estaciones de aguachile o live cooking de risotto. Postres: helado de garrafa con toppings locales (chapulines, mango chamoy). Veggie power: opciones instagrameables con flores comestibles. 🌮'),
(17,'Bar','bar',NULL,'2025-08-02 06:44:50','categorias/1752875864_687ac35854db7.jpeg','¡Coctelería con identidad! Mixología con toque local: margaritas de guanábana, mezcal flights con gusano salado, o mocktails con hierbas de Oaxaca. Hit: bares 360° donde crean drinks con tu nombre en tiempo real. 🍹'),
(18,'Pastel','pastel','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡Arte comestible! Adiós fondant: pasteles desnudos con frutas tropicales, diseños geométricos tipo museo o torres de postres mini (churros, conchas gourmet). Que sea tan fotogénico como tu bouquet. 🎂'),
(19,'Entretenimiento','entretenimiento','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡De boda a festival! Bandas que fusionen cumbia con electropop, DJ con saxofonista en vivo o mariachis a la hora del pastel. Interactive: photobooth con props temáticos y GIFs instantáneos. 🎶'),
(20,'Decoración','decoracion','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡Menos es más... impactante! Instalaciones de papel picado moderno, velas flotantes en espejos y centros frutales (piñas, naranjas). Hack: alquila piezas grandes (arcos, muebles) para reducir costos y residuos. 🕯️'),
(21,'Ambientación','ambientacion','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡Una sinfonía sensorial! Luces cálidas en árboles, fragancias de vainilla o copal, y playlist acústico para cóctel. Outdoor? Fogateras tipo fire pit crean magia nocturna. 🔥'),
(22,'Sostenibilidad','sostenibilidad','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡Bodas con conciencia verde! Invitaciones digitales, catering km0 sin plásticos, decoración reutilizable (macetas con suculentas como favors). Top trend: donar sobras a bancos de alimentos locales. 🌿'),
(23,'Detalles','detalles','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡El alma de la personalización! Cócteles con sus apodos, mariachis sorpresa para abuelos o juegos de mesa sobre vuestra historia. Favorito: polaroids instantáneas para libro de invitados. 💖'),
(24,'Hospedaje','hospedaje','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡Bienvenida de lujo! Blocks con welcome bags: aguas de sabor, snacks regionales y agenda ilustrada. Destination weddings: shuttle privado y welcome party con mezcal tasting. 🛎️'),
(25,'Tornaboda','tornaboda','2025-08-02 06:44:50','2025-08-02 06:44:50',NULL,'¡La fiesta que renace! Brunch con mariachi y micheladas, picnic en viñedo o pijamada con pizza. 45% de parejas mexicanas lo incluyen para usar el vestido otra vez ¡y recuperarse con estilo! 🥂'),
(26,'Es nueva ','es-nueva',NULL,NULL,'categorias/1754148776_688e2fa8a9f47.jpg','Nueva '),
(28,'Frases para tu boda','frases-para-tu-boda',NULL,NULL,NULL,'');
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_category_subcategories`
--

DROP TABLE IF EXISTS `blog_category_subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_category_subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_id` int(11) NOT NULL,
  `blog_subcategory_id` int(11) NOT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `blog_category_id` (`blog_category_id`),
  KEY `blog_subcategory_id` (`blog_subcategory_id`),
  CONSTRAINT `fk_bcsc_bc` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_bcsc_bsc` FOREIGN KEY (`blog_subcategory_id`) REFERENCES `blog_subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_category_subcategories`
--

LOCK TABLES `blog_category_subcategories` WRITE;
/*!40000 ALTER TABLE `blog_category_subcategories` DISABLE KEYS */;
INSERT INTO `blog_category_subcategories` VALUES
(1,1,1,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(2,1,2,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(3,1,3,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(4,1,4,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(5,3,9,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(6,3,10,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(7,3,11,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(8,3,12,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(9,4,13,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(10,4,14,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(11,4,15,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(12,4,16,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(13,11,41,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(14,11,42,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(15,11,43,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(16,11,44,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(17,1,1,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(18,1,2,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(19,1,3,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(20,1,4,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(21,2,5,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(22,2,6,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(23,2,7,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(24,2,8,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(25,4,13,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(26,4,14,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(27,4,15,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(28,4,16,'2025-08-03 20:23:41','2025-08-03 20:23:41'),
(32,4,1,'2025-08-03 18:19:36','2025-08-03 18:19:36'),
(33,4,5,'2025-08-03 19:02:26','2025-08-03 19:02:26'),
(34,11,3,'2025-08-03 19:03:14','2025-08-03 19:03:14'),
(35,11,5,'2025-08-03 19:03:14','2025-08-03 19:03:14'),
(36,11,6,'2025-08-03 19:03:14','2025-08-03 19:03:14'),
(37,11,2,'2025-08-03 19:05:17','2025-08-03 19:05:17'),
(38,11,4,'2025-08-03 19:05:17','2025-08-03 19:05:17'),
(39,11,7,'2025-08-03 19:05:17','2025-08-03 19:05:17'),
(40,11,13,'2025-08-03 19:08:06','2025-08-03 19:08:06'),
(41,4,7,'2025-08-03 20:31:36','2025-08-03 20:31:36'),
(42,4,2,'2025-08-03 20:33:47','2025-08-03 20:33:47'),
(43,5,60,'2025-08-04 16:50:17','2025-08-04 16:50:17'),
(44,5,86,'2025-08-04 16:51:34','2025-08-04 16:51:34'),
(45,13,86,'2025-08-04 16:52:35','2025-08-04 16:52:35'),
(46,13,4,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(47,13,5,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(48,13,3,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(49,13,6,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(50,13,2,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(51,13,7,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(52,13,1,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(53,13,8,'2025-08-04 16:53:06','2025-08-04 16:53:06'),
(55,13,103,'2025-08-04 16:58:05','2025-08-04 16:58:05'),
(56,18,2,'2025-08-04 17:48:38','2025-08-04 17:48:38'),
(57,26,104,'2025-08-04 19:53:58','2025-08-04 19:53:58'),
(58,2,2,'2025-08-05 01:09:30','2025-08-05 01:09:30'),
(59,18,105,'2025-08-05 01:10:51','2025-08-05 01:10:51'),
(60,18,3,'2025-08-05 08:35:05','2025-08-05 08:35:05'),
(61,17,3,'2025-08-05 08:43:49','2025-08-05 08:43:49'),
(62,1,6,'2025-08-05 09:02:46','2025-08-05 09:02:46'),
(63,16,2,'2025-08-05 16:43:16','2025-08-05 16:43:16'),
(64,28,106,'2025-08-05 22:04:39','2025-08-05 22:04:39'),
(65,14,4,'2025-08-05 22:09:48','2025-08-05 22:09:48'),
(66,28,107,'2025-08-05 22:38:46','2025-08-05 22:38:46'),
(67,9,108,'2025-08-06 01:06:40','2025-08-06 01:06:40'),
(68,9,109,'2025-08-06 01:06:40','2025-08-06 01:06:40'),
(69,9,110,'2025-08-06 01:38:25','2025-08-06 01:38:25'),
(70,9,111,'2025-08-06 01:38:25','2025-08-06 01:38:25'),
(71,9,112,'2025-08-06 01:57:34','2025-08-06 01:57:34'),
(72,9,113,'2025-08-06 01:57:34','2025-08-06 01:57:34'),
(73,9,114,'2025-08-06 01:57:34','2025-08-06 01:57:34'),
(74,2,115,'2025-08-06 09:24:35','2025-08-06 09:24:35'),
(75,5,3,'2025-08-06 11:09:40','2025-08-06 11:09:40'),
(76,15,3,'2025-08-06 14:57:43','2025-08-06 14:57:43');
/*!40000 ALTER TABLE `blog_category_subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_author_id` int(10) unsigned DEFAULT NULL,
  `event_type_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `gallery` text DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL,
  `blog_category_id` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `views` int(10) unsigned NOT NULL DEFAULT 0,
  `status` varchar(20) DEFAULT 'borrador',
  `scheduled_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `blog_posts_ibfk_1` (`blog_author_id`),
  CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`blog_author_id`) REFERENCES `blog_authors` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES
(27,1,3,'demo con MDE y body','','demo-con-mde-y-body','# Título Principal\r\n\r\nEste es un párrafo con **negrita**, *cursiva* y [un enlace](https://ejemplo.com).\r\n\r\n## Subtítulo\r\n\r\nAquí va una imagen:\r\n\r\n![Texto alternativo](https://ruta-a-la-imagen.jpg)\r\n\r\nY más contenido abajo...\r\n','bannersBlog/1751474561_9141-otoo-final.jpeg',NULL,'2025-07-02 16:42:41','2025-08-04 19:22:37',1,1,16,'activo',NULL),
(28,1,1,'demo 21 MDE mejorado sin perdida de body','','demo-21-mde-mejorado-sin-perdida-de-body','# Título Principal\r\n\r\nEste es un párrafo con **negrita**, *cursiva* y [un enlace](https://mieventoapp.com/blog/boda).\r\n\r\n## Subtítulo\r\n\r\nAquí va una imagen:\r\n\r\n\r\n![texto de la img](https://mieventoapp.com/img/EAlogoPrincipal.png)\r\n\r\nY más contenido abajo...\r\n\r\n[texto de la img](https://mieventoapp.com/img/EAlogoPrincipal.png)','bannersBlog/1751474826_consejos-organizar-fiesta-cumpleanos-640x427.jpg',NULL,'2025-07-02 16:47:06','2025-08-07 00:16:14',13,1,24,'activo',NULL),
(29,2,1,'10 ideas de propuesta que te van a encantar 🥳','????????','edit-sobre-el-slug-2345','# Título principal del post\r\n\r\nBienvenida a nuestro artículo especial sobre bodas y eventos elegantes.  \r\nA continuación, mostramos ejemplos de contenido enriquecido:\r\n\r\n## Subtítulo: Consejos para tu gran día\r\n<div class=\"fix-stiky-img-body\">\r\n[img:0]  \r\n</div>\r\n\r\nAquí hay un texto con **negritas**, *cursiva* y un [enlace a Pinterest](https://www.pinterest.com).\r\n\r\n> Esta es una cita inspiradora para las futuras novias.\r\n\r\n<div class=\"fix-stiky-img-body\">\r\n[img:3]  \r\n</div>\r\n\r\n### Lista de preparativos:\r\n\r\n- Vestido de novia\r\n- Pastel de bodas\r\n- Música en vivo\r\n- **Fotografía profesional**\r\n\r\n### Lista ordenada:\r\n\r\n 1. Selecciona la fecha\r\n 2. Reserva el lugar\r\n 3. Contrata un fotógrafo\r\n 4. Haz la lista de invitados\r\n\r\n### Imagen desde galería:\r\n\r\n[img:0]  \r\n[img:1]\r\n\r\n### Fragmento de código:\r\n\r\n<div class=\"fix-stiky-img-body\">\r\n[img:4]  \r\n</div>','bannersBlog/1752562163_evento.love-demoBlog-Boda.jpg','[\"gallery\\/1751495319-Foto_demoRojoXV.jpg\",\"gallery\\/1751495319-95_5_155534.jpeg\",\"gallery\\/1751495319-9141-otoo-final.jpeg\",\"gallery\\/1751495319-FondoLilaRosasAzules.jpg\",\"gallery\\/1751495319-ca658fd318c697e776f9fd66c64be7af.webp\"]','2025-07-02 17:47:35','2025-08-04 18:59:33',11,1,42,'activo',NULL),
(32,1,1,'test con nueva imag en el form v 2.0','','test-con-nueva-imag-en-el-form-v-2-0','# Título principal del post\r\n\r\nBienvenida a nuestro artículo especial sobre bodas y eventos elegantes.  \r\nA continuación, mostramos ejemplos de contenido enriquecido:\r\n\r\n## Subtítulo: Consejos para tu gran día\r\n\r\nAquí hay un texto con **negritas**, *cursiva* y un [enlace a Pinterest](https://www.pinterest.com).\r\n\r\n> Esta es una cita inspiradora para las futuras novias.\r\n\r\n### Lista de preparativos:\r\n\r\n- Vestido de novia\r\n- Pastel de bodas\r\n- Música en vivo\r\n- **Fotografía profesional**\r\n[img:2]\r\n### Lista ordenada:\r\n\r\n1. Selecciona la fecha\r\n2. Reserva el lugar\r\n3. Contrata un fotógrafo\r\n4. Haz la lista de invitados\r\n\r\n### Imagen desde galería:\r\n\r\n[img:0]  \r\n[img:1]\r\n\r\n### Fragmento de código:\r\n\r\n# Título principal del post\r\n\r\nBienvenida a nuestro artículo especial sobre bodas y eventos elegantes.  \r\nA continuación, mostramos ejemplos de contenido enriquecido:\r\n\r\n## Subtítulo: Consejos para tu gran día\r\n\r\nAquí hay un texto con **negritas**, *cursiva* y un [enlace a Pinterest](https://www.pinterest.com).\r\n\r\n> Esta es una cita inspiradora para las futuras novias.\r\n\r\n### Lista de preparativos:\r\n\r\n- Vestido de novia\r\n- Pastel de bodas\r\n- Música en vivo\r\n- **Fotografía profesional**\r\n[img:2]\r\n### Lista ordenada:\r\n\r\n1. Selecciona la fecha\r\n2. Reserva el lugar\r\n3. Contrata un fotógrafo\r\n4. Haz la lista de invitados\r\n\r\n### Imagen desde galería:\r\n\r\n[img:0]  \r\n[img:1]\r\n\r\n### Fragmento de código:','bannersBlog/1751485732_demofiesta.jpeg','[\"gallery\\/1751485732-una-boda-de-otoc3b1o.webp\",\"gallery\\/1751485732-95_5_155534.jpeg\",\"gallery\\/1751485732-9141-otoo-final.jpeg\"]','2025-07-02 19:48:52','2025-07-29 16:34:12',13,1,16,'activo',NULL),
(35,1,1,'nuevo nombre esperando todo sea correcto','demo#no se 😅','nuevo-nombre-esperando-todo-sea-correcto','# Título principal del post\r\n\r\nBienvenida a nuestro artículo especial sobre bodas y eventos elegantes.  \r\nA continuación, mostramos ejemplos de contenido enriquecido:\r\n\r\n## Subtítulo: Consejos para tu gran día\r\n\r\nAquí hay un texto con **negritas**, *cursiva* y un [enlace a Pinterest](https://www.pinterest.com).\r\n\r\n> Esta es una cita inspiradora para las futuras novias.\r\n\r\n### Aquí va un video:\r\n\r\n<div class=\"container\"><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/c_dT7UOpsAk?si=6SCKHlZdRT0pFqXO\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>\r\n	</div>\r\n\r\n\r\n### Lista de preparativos:\r\n\r\n	- Vestido de novia\r\n	- Pastel de bodas\r\n	- Música en vivo\r\n	- **Fotografía profesional**\r\n\r\n### Lista ordenada:\r\n\r\n	1. Selecciona la fecha\r\n	2. Reserva el lugar\r\n	3. Contrata un fotógrafo\r\n	4. Haz la lista de invitados\r\n\r\n### Imagen desde galería:\r\n\r\n[img:0]  \r\n[img:1]\r\n\r\n### Fragmento de código:\r\n\r\n[img:1]\r\n\r\n# FIN! 🙂🥳','bannersBlog/1751507705_9141-otoo-final.jpeg','[\"gallery\\/1751507705-demofiesta.jpeg\",\"gallery\\/1751507705-novios_boda_oto\\u00f1o_miradas_risas_momento_felices_finca_restaurante_maestra_ceremonias_arco_hojas_wedding_planner_maestra_ceremonias.jpg\",\"gallery\\/1751507705-una-boda-de-otoc3b1o.webp\"]','2025-07-03 01:55:05','2025-08-05 15:18:14',11,1,20,'activo',NULL),
(36,2,1,'Proponle Matrimonio Como Jefe en 2025','10 Trucos Que Harán Que Diga \"SÍ\" 💖','proponle-matrimonio-como-jefe-en-2025','# ¡Proponle Matrimonio Como Jefe en 2025! \r\n\r\n## 10 Trucos Que Harán Que Diga \"SÍ\" 💖\r\n\r\n¡Hola, cupido moderno! Si estás leyendo esto es porque el amor te tiene loc@ y 2025 será **TU año**. Pedir matrimonio ya no es solo arrodillarse con un anillo (aunque eso nunca pasa de moda 😉). Te traigo los *consejos más frescos* para que tu propuesta sea **inolvidable, Instagrameable y 100% auténtica**.\r\n\r\n## 📍 Elige Tu Escenario: ¡México Tiene Magia!\r\n\r\n> \"El lugar perfecto es aquel donde sus corazones laten más fuerte\" - Experta en propuestas épicas\r\nAquí mi top 5 de locaciones mexicanas para 2025:\r\n\r\n1. **Atardecer en Tulum** [img:0]  \r\n   *Pro tip:* Contrata un fotógrafo escondido entre las palmeras 🌴\r\n\r\n2. **Globos aerostáticos en Teotihuacán** [img:1]\r\n\r\n3. **Cenote iluminado con velas flotantes** 💡 [img:2]\r\n\r\n4. **Mirador del Castillo de Chapultepec** (¡De las vistas killer en CDMX!) [img:3]\r\n\r\n5. **Tu taquería de siempre** (sí, ¡el amor también vive entre tacos!) 🌮\r\n\r\n## 💍 El Anillo: Secretos Para No Fallar\r\n\r\n### Checklist Express:\r\n\r\n- Mide su dedo EN SECRETO: ¿Cómo? ¡Usa este hack!\r\n	  #Presta uno de sus anillos actuales y llévalo a joyería\r\n- Piedras 2025: Moissanita vs. diamante lab-grown 💎  \r\n	  *Spoiler:* La segunda opción es ética y brilla igual 😉\r\n- Presupuesto REAL: ¿Sabías que puedes pagar en **12 MSI**? 💳\r\n \r\n [img:4]\r\n	\r\n## 🎭 El Guión: ¡No Dejes Nada al Azar!\r\n\r\n### Orden de Operaciones:\r\n\r\n1. **Pre-calienta ambiente**: Lléval@ a su restaurante favorito\r\n2. **Momento WOW**: Activa tu escenario planeado (¡globo/cenote/mariachi!) [img:5]\r\n3. **Discurso K.O.**: 3 frases clave:  \r\n	   - \"Recuerdo cuando...\" (anécdota cute)  \r\n	   - \"Amo tu...\" (detalle específico: su risa/cómo cocina)  \r\n	   - \"Quiero...\" (futuro juntos)  \r\n	4. **¡ACCIÓN!**: Anillo + pregunta mágica ✨\r\n	\r\n## 📸 ¡Socorro, Quiero Evidencias!\r\n\r\n### Kit de Supervivencia Fotográfica:\r\n\r\n- **Fotógrafo ninja**: Contrata uno que sepa camuflarse [img:6]\r\n- **GoPro escondida**: En canasta de picnic/florero 🌻\r\n- **Celu en trípode**: ¡Graba en 4K sin que se note!\r\n- **Hashtag personalizado**: #EllaDijoQueSíEn2025 💘\r\n	\r\n## 💌 El After: Cuando Ya Dijo \"SÍ\"\r\n\r\n- **Champán listo**: ¡Que no falte la burbuja celebratoria! 🥂\r\n- **Kit lágrimas**: Pañuelos + toquecitos para el rimel 😭 [img:8]\r\n- **Primera llamada**: A sus papás (¡o mejor un video call grupal!)[img:9]\r\n- **Post Instagram**: ¡Con foto y video en 24 horas! #FueSí\r\n\r\n# FIN! 🥳🎉  \r\n\r\n*¿List@ para ser el protagonista de su mejor historia? ¡Cuéntanos tu plan en comentarios! 👇*','bannersBlog/1752562389_evento.love-demoBlog-Boda.jpg','[\"gallery\\/1751522467-1000057141.jpg\",\"gallery\\/1751522467-1000057142.jpg\",\"gallery\\/1751522467-1000057143.jpg\",\"gallery\\/1751522467-1000057144.jpg\",\"gallery\\/1751522467-1000057145.jpg\",\"gallery\\/1751522467-1000057146.jpg\",\"gallery\\/1751522467-1000057147.jpg\",\"gallery\\/1751522467-1000057148.jpg\",\"gallery\\/1751522467-1000056803.jpg\",\"gallery\\/1751522467-1000056781.jpg\"]','2025-07-03 05:57:57','2025-08-05 15:45:13',3,1,76,'activo',NULL),
(38,6,1,'adadasdsadadasdsad','adasdsadadada','adadasdsadadasdsad','a','bannersBlog/1752883754_Imagen de WhatsApp 2025-07-18 a las 16.36.51_92598225.jpg',NULL,'2025-07-03 23:36:40','2025-08-07 03:28:31',4,1,131,'activo',NULL),
(50,6,1,'post publico activo ','asdsaddasda','post-publico-activo','Si estás buscando los mejores vestidos, este es el sitio 👰☀️\r\n# ya no busques más \r\n','bannersBlog/1754404505_planificacion-de-bodas-sin-estres.jpg',NULL,'2025-08-05 08:35:05','2025-08-07 02:50:49',18,1,7,'activo',NULL),
(57,2,1,'Las 10 frases más chic para la mesa de regalos','Estás frases les encantarán a tus invitados','las-10-frases-mas-chic-para-la-mesa-de-regalos','','bannersBlog/1754456863_1000065261.jpg',NULL,'2025-08-05 22:38:46','2025-08-06 08:46:16',28,1,8,'activo',NULL),
(58,2,1,'Invitación Digital: \"El Latido de la Tinta','La Invitación como Reliquia Sensorial','invitacion-digital-el-latido-de-la-tinta','#### **Capa Táctil: La Geometría del Amor**  \r\n*(Técnico: Instrucciones para recrear)*  \r\n1. Cada píxel de esta invitación late con el ritmo de tu respiración del 12 de mayo.  \r\n2. He tejido el PDF con hilos de luz azul zafiro, tu color en el atardecer de Tulum.  \r\n3. Al deslizar el dedo sobre la fecha, sentirás la textura del encaje de mi vestido.  \r\n4. El botón \"Confirmar Asistencia\" palpita como mi muñeca aquella noche del sí.  \r\n5. Usé código hex #E8C4C4: el rosa de tus mejillas cuando robaste el primer beso.  \r\n\r\n#### **Capa Emocional: Arqueología del Nosotros**  \r\n*(Emocional: Ecos de memoria)*  \r\n6. Estas 20 frases son fósiles de nuestro volcán: la ceniza del día que gritamos \"¡chapulines!\" riendo.  \r\n7. Incluí un campo de sonido oculto: aprieta aquí para oír mi corazón al recibir el anillo.  \r\n8. La tipografía Abril Fatface no es casual: imita tus pestañas contra mi frente en Cinépolis.  \r\n9. Al pasar el cursor sobre las flores, liberarán aroma a gardenias... como tu sudor bailando cumbia.  \r\n10. La animación de lluvia es nuestro abril en Oaxaca, cuando el aguacero nos hizo refugiados de ternura.  \r\n\r\n#### **Capa Eterna: Tiempo Liquefeito**  \r\n*(Filosófico: Metafísica del instante)*  \r\n11. ¿Sabes por qué elegí formato digital? Porque los servidores son más eternos que el mármol.  \r\n12. Cada \"click\" en este documento es un doblez en el origami del destino que nos pliega juntos.  \r\n13. Las letras doradas no son pixeles: son migajas de esa luna que nos bañó desnudos en Zipolite.  \r\n14. Programé un contador que resta segundos hasta el altar... y suma eternidades en cada latido.  \r\n15. Si miras el código fuente, hallarás nuestro ADN mezclado: `if (alma_roja) + (alma_azul) = universo_morado`.  \r\n\r\n#### **Epílogo: Invocación**  \r\n16. No es invitación: es mapa estelar para que tu brújula encuentre mi pelvis el día cero.  \r\n17. Los RSVP no confirman asistencia... sellan pactos cósmicos de cuerpos que ya son constelación.  \r\n18. Al descargar este archivo, aceptas ser el oxígeno de mi incendio hasta que el último byte muera.  \r\n19. Si el wifi falla, respira hondo: tu aliento replicará la vibración de mi firma digital.  \r\n20. **Llegarás el 12, pero el viaje empezó hoy: al leer esta sílaba. ¿Sientes el temblor?**  \r\n\r\n\r\n> ✨ **Nota de la autora:**  \r\n> *\"Esta invitación es organismo vivo: mutará el día antes de la boda con tus pulsaciones nocturnas.  \r\n> ¿Encontraste el glitch? En el punto 15, pasa el cursor sobre \'universo_morado\'...  \r\n> Ahí está el video que nunca te envié del amanecer en Chiapas. - P.S.\"*','bannersBlog/1754464000_1000064705.jpg',NULL,'2025-08-06 01:06:40','2025-08-06 19:28:23',9,1,60,'activo',NULL),
(59,2,1,'Tacto Digital: Cuando el Amor se Programa','Programando Emociones en Píxeles para Bodas que Trascienden Pantallas','tacto-digital-cuando-el-amor-se-programa','#### **Diseño que Respira (Técnico)**  \r\n\r\nLa invitación digital no es un archivo: es piel tecnológica. Cuando elegí la tipografía Abril Fatface, no buscaba elegancia sino memoria táctil. Cada curva de estas letras replica el arco de tus pestañas rozando mi frente aquella noche en Cinépolis. ¿Cómo lograrlo? Con algoritmos de *haptic feedback* que convierten el deslizar de los dedos en caricias digitales. Al programar el botón \"Confirmar\", lo diseñé para palpitar rítmicamente (72 pulsos por minuto), idéntico a mi corazón cuando pronunciaste \"sí\". El código de color #E8C4C4 no es casual: es el rosa exacto que inundó tus mejillas al pedir mi mano frente al mar. Estos detalles técnicos -aparentemente invisibles- son andamios emocionales. Como explica el UX designer Eduardo Montiel (2023), *\"La tecnología nupcial del futuro no se ve: se siente en las terminaciones nerviosas\"*.  \r\n\r\n**Relación con post anterior:**  \r\n\r\nEsta capa técnica expande el *\"mapa estelar\"* de nuestra invitación original, transformando gestos cotidianos (deslizar, clickear) en rituales sensoriales.  \r\n---\r\n#### **Píxeles con Memoria (Emocional)**  \r\n\r\nLos recuerdos no viven en el cerebro: habitan en los intersticios de la luz digital. Aquí, cada píxel es una cápsula del tiempo. La animación de lluvia que baña la esquina superior derecha? Es nuestro aguacero en Oaxaca, cuando el agua convirtió un estacionamiento en templo de complicidad. Programé su código con registros meteorológicos exactos de ese 15 de abril. Al tocar el ícono de sonido, los auriculares reproducen mi taquicardia del día del anillo - 124 latidos por minuto capturados con micrófono binaural. Estos recursos no son decorativos: son puentes hacia lo intangible. Como descubrió el MIT Media Lab (2024), *\"Las memorias evocadas mediante estímulos digitales multisensoriales activan un 47% más el hipocampo\"*. El RSVP esconde nuestro primer secreto: tu nombre escrito con constelaciones de Zipolite, usando coordenadas estelares de esa noche.  \r\n\r\n[img:0]\r\n\r\n\r\n**Conexión sensorial:**\r\n\r\nEsta sección profundiza en los *\"fósiles de nuestro volcán\"* mencionados en la invitación, dando herramientas para excavar emociones en código.  \r\n---\r\n\r\n#### **Eternidad Efímera (Filosófico)**  \r\n\r\n¿Por qué digital? Porque los servidores guardan besos mejor que el mármol. Mientras las invitaciones de papel amarillean, esta mutará cada luna llena: el 12 de mayo mostrará fotos de nuestra ceremonia; en nuestro primer aniversario, revelará votos no dichos. El contador regresivo no marca días: suma latidos sincronizados hasta el altar. Hoy, a 134 días, registra 18,643,200 pulsos compartidos. Lo fascinante es la paradoja: diseñamos reliquias efímeras. Como escribió Borges en *El Aleph*, *\"Lo eterno son los instantes que arden\"*. Esta invitación morirá cuando se apague el último servidor, pero nuestro \"sí\" sobrevivirá en el blockchain emocional que creamos. Cuando falla el wifi, enseñé a los novios a respirar hondo: el aliento recrea la vibración de firmas digitales en su piel. Es la nueva espiritualidad tecnológica: fe en lo invisible.  \r\n\r\n**Hilo filosófico:**  \r\nDesarrolla el concepto de *\"origami del destino\"* de la invitación inicial, explorando cómo lo digital redefine la inmortalidad amorosa.  \r\n\r\n> 🌸 **Nota de la autora:**  \r\n> *\"Equilibrio encontrado: reduje 30% la abstracción manteniendo densidad sensorial.  \r\n> El secreto está en la frase del contador de latidos: datos duros envueltos en piel humana.  \r\n> ¿Prueba? Compara el \'universo_morado\' original con el \'blockchain emocional\' aquí:  \r\n> misma esencia, menor vuelo metafórico. - P.S.\"*','bannersBlog/1754613091_Gemini_Generated_Image_zdkq9xzdkq9xzdkq.png','[\"gallery\\/1754614200-Gemini_Generated_Image_xb1kxpxb1kxpxb1k.png\"]','2025-08-06 01:37:53','2025-08-07 18:50:00',9,1,1236,'activo',NULL),
(60,2,1,'Cronografías: Tejiendo Eternidad en Código','Donde los Latidos se Convierten en Legado Digital','cronografias-tejiendo-eternidad-en-codigo','#  **El Tiempo como Material Artístico (Técnico)**  \r\n\r\nEl diseño de eventos digitales ha trascendido la mera funcionalidad para convertirse en escultura temporal. En nuestra trilogía sensorial, transformamos cronografías - esos contadores que marcan días hasta la boda - en arquitectura emocional viva. Imagina un algoritmo que sincroniza su ritmo con los latidos de los novios: cuando la distancia los separa, el contador acelera; al abrazarse, desacelera dibujando patrones de calma en la pantalla. Esta técnica, inspirada en los estudios del MIT sobre biofeedback (2024), utiliza APIs de wearables para traducir frecuencias cardiacas en visualizaciones fluidas. El código #FF6B8B no es un mero color: es la tonalidad exacta que adquiere el amor cuando late a 120 pulsaciones por minuto durante un \"sí\". Como explica la ingeniera mexicana Valeria Campos: *\"Programar emociones exige dominar tres lenguajes: Python para la lógica, JSON para los datos, y el silencio para escuchar lo no dicho\"*. La innovación clave está en los *\"desencadenantes temporales\"*: al cumplirse metas de planificación (e.g., elección del vestido), la invitación libera pétalos digitales con mensajes ocultos. Esta capa técnica expande nuestro concepto de *\"contadores existenciales\"* del post anterior, transformando el tiempo lineal en una danza interactiva.  \r\n\r\n---\r\n\r\n#### **Memorias Afectivas Encapsuladas (Emocional)**  \r\nLos píxeles son hoy cápsulas de arqueología íntima. Retomando el concepto de *\"fósiles de nuestro volcán\"* de la primera entrega, desarrollamos cápsulas del tiempo digitales que se activan por hitos relacionales. Cuando los novios visitan el lugar de su primera cita, el sistema GPS desbloquea un fragmento de audio: el crujir de la silla del café donde temblaron sus manos. Estos archivos no son almacenados en la nube, sino en *\"nodos afectivos\"* - dispositivos IoT distribuidos entre sus seres queridos, donde la abuela guarda el sonido de su risa en un pendrive con forma de mariposa. La tecnología aquí es profundamente humana: utilizamos impresión 4D para crear USB que florecen al insertarse, revelando fotos olvidadas. Como demostró el proyecto *Memoria MX* del Tec de Monterrey, *\"Los recuerdos encapsulados en objetos físico-digitales tienen un 68% más de persistencia emocional\"*. Este enfoque revoluciona nuestro anterior concepto de *\"píxeles con memoria\"*, añadiendo capas de ritualidad física al universo digital. La verdadera magia ocurre cuando, décadas después, los hijos desbloquean estas cápsulas durante sus propias bodas, creando un legado intergeneracional de amor codificado.  \r\n\r\n---\r\n\r\n#### **Lo Etéreo en lo Efímero (Filosófico)**  \r\nEn esta culminación de la trilogía, confrontamos la paradoja central: cómo lo eterno habita en lo efímero digital. Los servidores mueren, los formatos se obsolescen, pero el deseo humano de permanencia persiste. Nuestra solución son *\"fantasmas digitales\"* - algoritmos que migran automáticamente entre plataformas, transformándose pero conservando su esencia. Como el vestido de novia que pasa de madre a hija adaptándose a nuevas siluetas, estas reliquias digitales mutan: de invitación web a NFT, luego a holograma, después a implantación de memoria neuronal (tecnología en desarrollo por Neuralink). Este concepto evoluciona nuestra reflexión sobre *\"lo eterno en lo efímero\"* del post inicial, añadiendo una dimensión transhumanista. El filósofo Javier Sádaba advierte: *\"Preservar el amor en código exige resolver un dilema ético: ¿debemos permitir que la IA reinterprete nuestros sentimientos al migrarlos?\"*. La respuesta está en los *\"guardianes de esencia\"* - familiares que custodian llaves físicas para validar autenticidad emocional en cada trasmutación. Así, cuando el último servidor de 2050 se apague, nuestro \"sí\" renacerá como luz proyectada en la luna mediante láseres satelitales: efímero en su manifestación, eterno en su significado.  ','bannersBlog/1754491666_1000064726.jpg',NULL,'2025-08-06 01:57:34','2025-08-06 18:07:26',9,1,7,'activo',NULL),
(61,3,1,'El Álgebra del Amor: Cuando 1+1=3 en tu Presupuesto','Transformando Números en Pactos Sagrados: La Fórmula Matemática que Convierte Sueños en Realidad sin Quebrar tu Bolsillo','el-algebra-del-amor-cuando-1-1-3-en-tu-presupuesto','#### El Teorema del Amor Eficiente\r\n\r\nEn el universo de las bodas mexicanas, el presupuesto no es una hoja de cálculo fría: es un *poema vivo* donde cada peso late con el ritmo de tus ilusiones. Aquí, **1+1 nunca suma 2**: suma risas compartidas, lágrimas de abuelas y el aroma del mole que flotará en el aire. Este artículo—tejido por la precisión de **Valeria Montes (Arquitecta de Sistemas)**, la sensorialidad de **Sofía Ríos (Cartógrafa Sensorial)** y el enfoque comunitario de **Ana López (Tejedora de Comunidades)**—revela cómo lograrlo. Usaremos ecuaciones lineales, metáforas táctiles y sabiduría popular para demostrar que **la magia nupcial nace de la alquimia entre lógica y emoción** .  \r\n\r\n---\r\n\r\n### **I. La Ecuación Maestra: Desglose Técnico del Presupuesto**  \r\n*(Por Valeria Montes, Arquitecta de Sistemas)*  \r\n**Fórmula anti-desperdicio:**  \r\n```  \r\n[Inversión Total] - [(Recursos no usados) × 0.7] = Presupuesto Efectivo  \r\n```  \r\n**Variables clave:**  \r\n- **Costos urbanos vs. rurales:** En CDMX, el banquete cuesta un 40% más que en Oaxaca (datos INEGI 2024).  \r\n- **Tasa de imprevistos:** Siempre suma un 15% al total para emergencias (ej: lluvia repentina que exige carpas).  \r\n- **ROI emocional:** Inversiones con retorno afectivo (ej: banda de viento vs. DJ genérico) . \r\n\r\n**Tabla comparativa: Banquetes en 3 escalas**  \r\n| **Concepto**       | **Urbano (CDMX)** | **Rural (Oaxaca)** | **Ahorro con trueque** |  \r\n|--------------------|-------------------|--------------------|------------------------|  \r\n| **100 invitados**  | $45,000 MXN       | $28,000 MXN        | $15,000 (intercambio floral) |  \r\n| **Música**         | $12,000 MXN       | $7,000 MXN         | $5,000 (mariachi comunitario) |  \r\n| **Decoración**     | $20,000 MXN       | $9,000 MXN         | $11,000 (artesanos locales) |  \r\n\r\n> *\"Un presupuesto es un sistema vivo: si una variable falla, otra compensa. ¡Por eso 1+1=3!\"* \r\n\r\n### **II. Poesía Numérica: El Lenguaje Secreto del Dinero**  \r\n*(Por Sofía Ríos, Cartógrafa Sensorial)*  \r\nLos números no son cifras: son **huellas dactilares de tus deseos**. La línea 34 de tu Excel (\"centros de mesa\") es el aroma a gardenias que hipnotizará a tu suegra. El renglón olvidado (\"chocolate de la abuela\") es la textura del cacao que derretirá a los invitados en memorias infantiles.  \r\n\r\n**Metáfora clave:**  \r\n> *\"Presupuestar es tejer un rebozo: hilo económico + hilo emocional = manto sagrado que cubrirá tu historia.\"*  \r\n\r\n**Ejemplo sensorial:**  \r\n- **$500 MXN en velas:** No es \"gasto decorativo\". Es el brillo que hará brillar los ojos de tu padre durante el vals.  \r\n- **$0 MXN en el vestido:** Trueque con una prima por tu talento como diseñadora. Costo material: cero. Valor emocional: infinito .  \r\n\r\n---\r\n\r\n### **III. Sabiduría Colectiva: Tandas, Trueques y Otras Revoluciones**  \r\n*(Por Ana López, Tejedora de Comunidades)*  \r\nEn México, **la comunidad es tu mejor aliada financiera**. Casos reales:  \r\n1. **Tandas revolucionarias (Guadalajara):** 10 familias aportan $1,000 MXN mensuales. Cada mes, una novia recibe $10,000. ¡Sin intereses!  \r\n2. **Trueque de saberes (Chiapas):** Intercambio de bordados por fotografía profesional. Resultado: álbum épico y manteles únicos.  \r\n3. **Abastecimiento comunitario (Puebla):** Compra colectiva de flor de cempasúchil con productores locales: 30% más barato que mercados .  \r\n\r\n> *\"El dinero aísla. El trueque teje redes que sobreviven al brindis final.\"*  \r\n\r\n---\r\n\r\n### **IV. Errores que Transforman: Cuando el Caos Genera Belleza**  \r\n*(Fusión de los 3 enfoques)*  \r\n**Caso práctico:** *Karina y Luis (bodas en Monterrey)*  \r\n- **Error lógico (Valeria):** Contrataron 5 fotógrafos por pánico (\"¿Y si uno falla?\").  \r\n- **Crisis emocional (Sofía):** El día de la boda, los 5 se estorbaban. Karina rompió en llanto.  \r\n- **Solución comunitaria (Ana):** Un invitado—aficionado a la fotografía—improvisó sesiones con su iPhone. Las fotos borrosas se volvieron arte abstracto.  \r\n\r\n**Lección algebraica:**  \r\n```  \r\n(Desastre)² + (Improvisación humana) = Recuerdos más valiosos que lo planeado  \r\n```  \r\n\r\n---\r\n\r\n### **V. Tu Hoja de Ruta: 5 Pasos para Aplicar el Teorema**  \r\n1. **Descompón en factores primos:** Separa necesidades (agua, comida, música) de deseos (hielo seco, doce pasteles).  \r\n2. **Asigna valores sensoriales:** ¿$2,000 MXN en luces LED? Traduce: \"esto creará un atardecer artificial para mi abuela que no puede viajar\".  \r\n3. **Activa redes comunitarias:** Pide ayuda con una *tanda nupcial* o intercambia habilidades en grupos de Facebook.  \r\n4. **Aplica el \"principio del rebozo\":** Cada peso debe sostener un hilo económico y otro emocional. Si solo cubre uno, elimínalo.  \r\n5. **Programa el caos:** Reserva un 15% del presupuesto para \"errores que serán arte\" .  \r\n\r\n---\r\n\r\n### **Nota del Autor:**  \r\n\r\n>\"Este artículo fusiona 3 mentes: la lógica que descompone, la poeta que siente y la tejedora que une. Así es como 1+1 suma 3: cuando los números se humanizan y las comunidades abrazan tus sueños. ¿Fallos en el cálculo? Bienvenidos: son la semilla de lo inolvidable.\" .','bannersBlog/1754493874_1000063739.jpg',NULL,'2025-08-06 09:24:35','2025-08-06 09:24:35',2,1,4,'activo',NULL),
(62,3,1,'nuevo post para futura fecha y su funciono 👌👀👅','asdadsad','nuevo-post-para-futura-fecha-y-su-funciono','sdaddasd','bannersBlog/1754500179_planificacion-de-bodas-sin-estres.jpg',NULL,'2025-08-06 11:09:39','2025-08-07 03:23:06',5,1,56,'activo',NULL),
(63,3,1,'test blog 2 para auto mostrar en fecha','asASsSasA','test-blog-2-para-auto-mostrar-en-fecha','# Muestra imagen 👇🏻\r\n\r\n![texto de la img](https://mieventoapp.com/img/EAlogoPrincipal.png)\r\n\r\n# Muestra botón 👇🏻\r\n\r\n[botón?]()','bannersBlog/1754513872_Imagen de WhatsApp 2025-07-18 a las 16.36.51_92598225.jpg',NULL,'2025-08-06 14:57:43','2025-08-07 03:28:21',15,1,146,'activo','2030-12-31 16:30:00');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts_blog_subcategories`
--

DROP TABLE IF EXISTS `blog_posts_blog_subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts_blog_subcategories` (
  `blog_post_id` int(11) NOT NULL,
  `blog_subcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_post_id`,`blog_subcategory_id`),
  KEY `blog_subcategory_id` (`blog_subcategory_id`),
  CONSTRAINT `blog_posts_blog_subcategories_ibfk_1` FOREIGN KEY (`blog_post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `blog_posts_blog_subcategories_ibfk_2` FOREIGN KEY (`blog_subcategory_id`) REFERENCES `blog_subcategories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts_blog_subcategories`
--

LOCK TABLES `blog_posts_blog_subcategories` WRITE;
/*!40000 ALTER TABLE `blog_posts_blog_subcategories` DISABLE KEYS */;
INSERT INTO `blog_posts_blog_subcategories` VALUES
(27,5),
(27,6),
(28,2),
(29,2),
(29,4),
(29,5),
(29,7),
(32,1),
(35,1),
(35,3),
(36,1),
(36,2),
(36,9),
(36,11),
(36,12),
(38,5),
(50,3),
(57,106),
(57,107),
(58,108),
(58,109),
(58,111),
(59,110),
(59,111),
(60,111),
(60,112),
(60,113),
(60,114),
(61,115),
(62,3),
(63,3);
/*!40000 ALTER TABLE `blog_posts_blog_subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_posts_blog_tags`
--

DROP TABLE IF EXISTS `blog_posts_blog_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts_blog_tags` (
  `blog_post_id` int(11) NOT NULL,
  `blog_tag_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_post_id`,`blog_tag_id`),
  KEY `blog_tag_id` (`blog_tag_id`),
  CONSTRAINT `blog_posts_blog_tags_ibfk_1` FOREIGN KEY (`blog_post_id`) REFERENCES `blog_posts` (`id`),
  CONSTRAINT `blog_posts_blog_tags_ibfk_2` FOREIGN KEY (`blog_tag_id`) REFERENCES `blog_tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts_blog_tags`
--

LOCK TABLES `blog_posts_blog_tags` WRITE;
/*!40000 ALTER TABLE `blog_posts_blog_tags` DISABLE KEYS */;
INSERT INTO `blog_posts_blog_tags` VALUES
(27,23),
(27,24),
(28,2),
(28,25),
(29,1),
(29,2),
(29,5),
(29,9),
(29,11),
(29,26),
(29,30),
(32,27),
(32,28),
(32,29),
(35,31),
(35,32),
(35,33),
(36,1),
(36,2),
(38,7),
(50,2),
(57,213),
(57,214),
(58,215),
(58,216),
(58,217),
(58,218),
(58,219),
(58,220),
(59,215),
(59,216),
(59,221),
(59,222),
(59,223),
(59,224),
(60,215),
(60,216),
(60,218),
(60,219),
(60,225),
(60,226),
(60,227),
(61,216),
(61,228),
(61,229),
(61,230),
(61,231),
(61,232),
(62,3),
(62,4),
(63,2);
/*!40000 ALTER TABLE `blog_posts_blog_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_subcategories`
--

DROP TABLE IF EXISTS `blog_subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `blog_category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_blog_subcategories_category` (`blog_category_id`),
  CONSTRAINT `fk_blog_subcategories_category` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_subcategories`
--

LOCK TABLES `blog_subcategories` WRITE;
/*!40000 ALTER TABLE `blog_subcategories` DISABLE KEYS */;
INSERT INTO `blog_subcategories` VALUES
(1,'Propuestas temáticas','propuestas-tematicas','2025-07-03 15:45:10','2025-08-02 06:59:23',1),
(2,'Videos virales','videos-virales','2025-07-03 15:57:02','2025-08-02 06:59:23',1),
(3,'Anillos personalizados','anillos-personalizados','2025-07-03 16:04:12','2025-08-02 06:59:23',1),
(4,'Escenarios sorpresa','escenarios-sorpresa','2025-07-03 16:11:57','2025-08-02 06:59:23',1),
(5,'Apps organización','apps-organizacion','2025-07-03 17:36:19','2025-08-02 06:59:23',2),
(6,'Checklists inteligentes','checklists-inteligentes','2025-07-04 01:43:14','2025-08-02 06:59:23',2),
(7,'Wedding planners top','wedding-planners-top','2025-07-04 01:43:14','2025-08-02 06:59:23',2),
(8,'Timelines detallados','timelines-detallados','2025-07-04 01:43:14','2025-08-02 06:59:23',2),
(9,'Costos por rubro','costos-por-rubro','2025-07-04 01:43:14','2025-08-02 06:59:23',3),
(10,'Fondos nupciales','fondos-nupciales','2025-07-04 01:43:14','2025-08-02 06:59:23',3),
(11,'Ahorros creativos','ahorros-creativos','2025-07-04 01:43:14','2025-08-02 06:59:23',3),
(12,'Tracking digital','tracking-digital','2025-07-04 01:43:14','2025-08-02 06:59:23',3),
(13,'Zonas VIP','zonas-vip','2025-07-04 01:43:14','2025-08-02 06:59:23',4),
(14,'Kids corners','kids-corners','2025-07-04 09:47:28','2025-08-02 06:59:23',4),
(15,'RSVP digital','rsvp-digital','2025-07-10 01:45:41','2025-08-02 06:59:23',4),
(16,'Mascotas invitadas','mascotas-invitadas','2025-07-10 01:45:41','2025-08-02 06:59:23',4),
(17,'Temporada baja','temporada-baja','2025-07-10 21:23:11','2025-08-02 06:59:23',5),
(18,'Fechas simbólicas','fechas-simbolicas','2025-07-10 21:23:11','2025-08-02 06:59:23',5),
(19,'Clima ideal','clima-ideal','2025-08-02 06:59:23','2025-08-02 06:59:23',5),
(20,'Bodas entre semana','bodas-entre-semana','2025-08-02 06:59:23','2025-08-02 06:59:23',5),
(21,'Haciendas mágicas','haciendas-magicas','2025-08-02 06:59:23','2025-08-02 06:59:23',6),
(22,'Rooftops urbanos','rooftops-urbanos','2025-08-02 06:59:23','2025-08-02 06:59:23',6),
(23,'Micro-weddings','micro-weddings','2025-08-02 06:59:23','2025-08-02 06:59:23',6),
(24,'Tours virtuales','tours-virtuales','2025-08-02 06:59:23','2025-08-02 06:59:23',6),
(25,'Fusiones estéticas','fusiones-esteticas','2025-08-02 06:59:23','2025-08-02 06:59:23',7),
(26,'Moodboards digitales','moodboards-digitales','2025-08-02 06:59:23','2025-08-02 06:59:23',7),
(27,'Temas híbridos','temas-hibridos','2025-08-02 06:59:23','2025-08-02 06:59:23',7),
(28,'Estilo identitario','estilo-identitario','2025-08-02 06:59:23','2025-08-02 06:59:23',7),
(29,'Paletas atrevidas','paletas-atrevidas','2025-08-02 06:59:23','2025-08-02 06:59:23',8),
(30,'Dress code coordinado','dress-code-coordinado','2025-08-02 06:59:23','2025-08-02 06:59:23',8),
(31,'Efectos comestibles','efectos-comestibles','2025-08-02 06:59:23','2025-08-02 06:59:23',8),
(32,'Texturas tendencia','texturas-tendencia','2025-08-02 06:59:23','2025-08-02 06:59:23',8),
(33,'Invitaciones-objeto','invitaciones-objeto','2025-08-02 06:59:23','2025-08-02 06:59:23',9),
(34,'Digitales animadas','digitales-animadas','2025-08-02 06:59:23','2025-08-02 06:59:23',9),
(35,'Eco-invitaciones','eco-invitaciones','2025-08-02 06:59:23','2025-08-02 06:59:23',9),
(36,'QR creativos','qr-creativos','2025-08-02 06:59:23','2025-08-02 06:59:23',9),
(37,'Vestidos transformables','vestidos-transformables','2025-08-02 06:59:23','2025-08-02 06:59:23',10),
(38,'Bordados mexicanos','bordados-mexicanos','2025-08-02 06:59:23','2025-08-02 06:59:23',10),
(39,'Jumpsuits elegantes','jumpsuits-elegantes','2025-08-02 06:59:23','2025-08-02 06:59:23',10),
(40,'Calzado bifuncional','calzado-bifuncional','2025-08-02 06:59:23','2025-08-02 06:59:23',10),
(41,'Makeup iluminado','makeup-iluminado','2025-08-02 06:59:23','2025-08-02 06:59:23',11),
(42,'Peinados effortless','peinados-effortless','2025-08-02 06:59:23','2025-08-02 06:59:23',11),
(43,'Bridal lash lifts','bridal-lash-lifts','2025-08-02 06:59:23','2025-08-02 06:59:23',11),
(44,'Uñas micro-french','unias-micro-french','2025-08-02 06:59:23','2025-08-02 06:59:23',11),
(45,'Rituales modernos','rituales-modernos','2025-08-02 06:59:23','2025-08-02 06:59:23',12),
(46,'Ceremonias cortas','ceremonias-cortas','2025-08-02 06:59:23','2025-08-02 06:59:23',12),
(47,'Lazo contemporáneo','lazo-contemporaneo','2025-08-02 06:59:23','2025-08-02 06:59:23',12),
(48,'Arras artísticas','arras-artisticas','2025-08-02 06:59:23','2025-08-02 06:59:23',12),
(49,'Votos personalizados','votos-personalizados','2025-08-02 06:59:23','2025-08-02 06:59:23',13),
(50,'Promesas divertidas','promesas-divertidas','2025-08-02 06:59:23','2025-08-02 06:59:23',13),
(51,'Cápsulas tiempo','capsulas-tiempo','2025-08-02 06:59:23','2025-08-02 06:59:23',13),
(52,'Dialectos locales','dialectos-locales','2025-08-02 06:59:23','2025-08-02 06:59:23',13),
(53,'Estilo documental','estilo-documental','2025-08-02 06:59:23','2025-08-02 06:59:23',14),
(54,'Filtros analógicos','filtros-analogicos','2025-08-02 06:59:23','2025-08-02 06:59:23',14),
(55,'Pre-wedding urbanas','pre-wedding-urbanas','2025-08-02 06:59:23','2025-08-02 06:59:23',14),
(56,'Raw footage','raw-footage','2025-08-02 06:59:23','2025-08-02 06:59:23',14),
(57,'Mesas comunitarias','mesas-comunitarias','2025-08-02 06:59:23','2025-08-02 06:59:23',15),
(58,'Lounge areas','lounge-areas','2025-08-02 06:59:23','2025-08-02 06:59:23',15),
(59,'Pistas circulares','pistas-circulares','2025-08-02 06:59:23','2025-08-02 06:59:23',15),
(60,'Zonas taco','zonas-taco','2025-08-02 06:59:23','2025-08-02 06:59:23',15),
(61,'Food trucks gourmet','food-trucks-gourmet','2025-08-02 06:59:23','2025-08-02 06:59:23',16),
(62,'Estaciones live cooking','estaciones-live-cooking','2025-08-02 06:59:23','2025-08-02 06:59:23',16),
(63,'Postres instagrameables','postres-instagrameables','2025-08-02 06:59:23','2025-08-02 06:59:23',16),
(64,'Opciones veganas chic','opciones-veganas-chic','2025-08-02 06:59:23','2025-08-02 06:59:23',16),
(65,'Mixología local','mixologia-local','2025-08-02 06:59:23','2025-08-02 06:59:23',17),
(66,'Mezcal flights','mezcal-flights','2025-08-02 06:59:23','2025-08-02 06:59:23',17),
(67,'Mocktails artesanales','mocktails-artesanales','2025-08-02 06:59:23','2025-08-02 06:59:23',17),
(68,'Bares 360°','bares-360','2025-08-02 06:59:23','2025-08-02 06:59:23',17),
(69,'Pasteles desnudos','pasteles-desnudos','2025-08-02 06:59:23','2025-08-02 06:59:23',18),
(70,'Torres postres','torres-postres','2025-08-02 06:59:23','2025-08-02 06:59:23',18),
(71,'Diseños escultóricos','disenos-escultoricos','2025-08-02 06:59:23','2025-08-02 06:59:23',18),
(72,'Frutas tropicales','frutas-tropicales','2025-08-02 06:59:23','2025-08-02 06:59:23',18),
(73,'Bandas versátiles','bandas-versatiles','2025-08-02 06:59:23','2025-08-02 06:59:23',19),
(74,'DJ + saxofón','dj-saxofon','2025-08-02 06:59:23','2025-08-02 06:59:23',19),
(75,'Mariachi hora pastel','mariachi-hora-pastel','2025-08-02 06:59:23','2025-08-02 06:59:23',19),
(76,'Photobooth GIF','photobooth-gif','2025-08-02 06:59:23','2025-08-02 06:59:23',19),
(77,'Papel picado moderno','papel-picado-moderno','2025-08-02 06:59:23','2025-08-02 06:59:23',20),
(78,'Centros frutales','centros-frutales','2025-08-02 06:59:23','2025-08-02 06:59:23',20),
(79,'Alquiler decoración','alquiler-decoracion','2025-08-02 06:59:23','2025-08-02 06:59:23',20),
(80,'Velas flotantes','velas-flotantes','2025-08-02 06:59:23','2025-08-02 06:59:23',20),
(81,'Iluminación atmosférica','iluminacion-atmosferica','2025-08-02 06:59:23','2025-08-02 06:59:23',21),
(82,'Aromas ambientales','aromas-ambientales','2025-08-02 06:59:23','2025-08-02 06:59:23',21),
(83,'Playlists temáticos','playlists-tematicos','2025-08-02 06:59:23','2025-08-02 06:59:23',21),
(84,'Fogateras estilo','fogateras-estilo','2025-08-02 06:59:23','2025-08-02 06:59:23',21),
(85,'Cero plásticos','cero-plasticos','2025-08-02 06:59:23','2025-08-02 06:59:23',22),
(86,'Catering km0','catering-km0','2025-08-02 06:59:23','2025-08-02 06:59:23',22),
(87,'Donación sobras','donacion-sobras','2025-08-02 06:59:23','2025-08-02 06:59:23',22),
(88,'Recuerdos vivos','recuerdos-vivos','2025-08-02 06:59:23','2025-08-02 06:59:23',22),
(89,'Cócteles con apodos','cocktails-con-apodos','2025-08-02 06:59:23','2025-08-02 06:59:23',23),
(90,'Sorpresas generacionales','sorpresas-generacionales','2025-08-02 06:59:23','2025-08-02 06:59:23',23),
(91,'Juegos personalizados','juegos-personalizados','2025-08-02 06:59:23','2025-08-02 06:59:23',23),
(92,'Polaroid libro','polaroid-libro','2025-08-02 06:59:23','2025-08-02 06:59:23',23),
(93,'Welcome bags','welcome-bags','2025-08-02 06:59:23','2025-08-02 06:59:23',24),
(94,'Shuttles privados','shuttles-privados','2025-08-02 06:59:23','2025-08-02 06:59:23',24),
(95,'Welcome parties','welcome-parties','2025-08-02 06:59:23','2025-08-02 06:59:23',24),
(96,'Agendas ilustradas','agendas-ilustradas','2025-08-02 06:59:23','2025-08-02 06:59:23',24),
(97,'Brunch con mariachi','brunch-con-mariachi','2025-08-02 06:59:23','2025-08-02 06:59:23',25),
(98,'Picnic recuperación','picnic-recuperacion','2025-08-02 06:59:23','2025-08-02 06:59:23',25),
(99,'Pijamada postboda','pijamada-postboda','2025-08-02 06:59:23','2025-08-02 06:59:23',25),
(100,'Reuso vestido','reuso-vestido','2025-08-02 06:59:23','2025-08-02 06:59:23',25),
(101,'nueva subCategoria con el slug',NULL,'2025-08-02 22:23:35','2025-08-02 22:23:35',NULL),
(103,'NuvSubCat con Slug','nuvsubcat-con-slug','2025-08-04 16:58:05','2025-08-04 23:58:19',25),
(104,'primera parte del chumis','primera-parte-del-chumis','2025-08-04 19:53:58','2025-08-04 19:53:58',NULL),
(105,'pastel rico','pastel-rico','2025-08-05 01:10:51','2025-08-05 01:10:51',NULL),
(106,'Frases para mesas de regalo','frases-para-mesas-de-regalo','2025-08-05 22:04:38','2025-08-05 22:04:38',NULL),
(107,'Frases lindas','frases-lindas','2025-08-05 22:38:46','2025-08-05 22:38:46',NULL),
(108,'Memoria afectiva','memoria-afectiva','2025-08-06 01:06:40','2025-08-06 02:01:32',NULL),
(109,'El tiempo como material artístico','el-tiempo-como-material-artistico','2025-08-06 01:06:40','2025-08-06 01:06:40',NULL),
(110,'Pixel con memoria','pixel-con-memoria','2025-08-06 01:37:53','2025-08-06 01:37:53',NULL),
(111,'Lo eterno en lo efímero','lo-eterno-en-lo-efimero','2025-08-06 01:37:53','2025-08-06 01:37:53',NULL),
(112,'Tiempo materializado','tiempo-materializado','2025-08-06 01:57:34','2025-08-06 01:57:34',NULL),
(113,'Legado transgeneracional','legado-transgeneracional','2025-08-06 01:57:34','2025-08-06 01:57:34',NULL),
(114,'Fantasmas digitales','fantasmas-digitales','2025-08-06 01:57:34','2025-08-06 01:57:34',NULL),
(115,'Trueques con alternativas para comprar','trueques-con-alternativas-para-comprar','2025-08-06 09:24:35','2025-08-06 09:24:35',NULL);
/*!40000 ALTER TABLE `blog_subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blog_tags`
--

DROP TABLE IF EXISTS `blog_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=233 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_tags`
--

LOCK TABLES `blog_tags` WRITE;
/*!40000 ALTER TABLE `blog_tags` DISABLE KEYS */;
INSERT INTO `blog_tags` VALUES
(1,'Propuestas','propuestas',NULL,'2025-08-02 07:06:04'),
(2,'Planificación','planificacion',NULL,'2025-08-02 07:06:04'),
(3,'Presupuesto','presupuesto',NULL,'2025-08-02 07:06:04'),
(4,'Invitados','invitados',NULL,'2025-08-02 07:06:04'),
(5,'Fechas','fechas',NULL,'2025-08-02 07:06:04'),
(6,'Lugares','lugares',NULL,'2025-08-02 07:06:04'),
(7,'Temas','temas',NULL,'2025-08-02 07:06:04'),
(8,'Colores','colores',NULL,'2025-08-02 07:06:04'),
(9,'Invitaciones','invitaciones',NULL,'2025-08-02 07:06:04'),
(10,'Vestidos','vestidos',NULL,'2025-08-02 07:06:04'),
(11,'Trajes','trajes',NULL,'2025-08-02 07:06:04'),
(12,'Belleza','belleza',NULL,'2025-08-02 07:06:04'),
(13,'Ceremonias','ceremonias',NULL,'2025-08-02 07:06:04'),
(14,'Votos','votos',NULL,'2025-08-02 07:06:04'),
(15,'Fotografía','fotografia',NULL,'2025-08-02 07:06:04'),
(16,'Recepción','recepcion',NULL,'2025-08-02 07:06:04'),
(17,'Menús','menus',NULL,'2025-08-02 07:06:04'),
(18,'Bares','bares',NULL,'2025-08-02 07:06:04'),
(19,'Pasteles','pasteles',NULL,'2025-08-02 07:06:04'),
(20,'Música','musica',NULL,'2025-08-02 07:06:04'),
(21,'Decoración','decoracion',NULL,'2025-08-02 07:06:04'),
(22,'Sostenibilidad','sostenibilidad',NULL,'2025-08-02 07:06:04'),
(23,'Detalles','detalles',NULL,'2025-08-02 07:06:04'),
(24,'Hospedaje','hospedaje',NULL,'2025-08-02 07:06:04'),
(25,'Tornabodas','tornabodas',NULL,'2025-08-02 07:06:04'),
(26,'CreativeProposals','creativeproposals',NULL,'2025-08-02 07:06:04'),
(27,'WeddingPlanner','weddingplanner',NULL,'2025-08-02 07:06:04'),
(28,'BudgetHacks','budgethacks',NULL,'2025-08-02 07:06:04'),
(29,'GuestList','guestlist',NULL,'2025-08-02 07:06:04'),
(30,'DateIdeas','dateideas',NULL,'2025-08-02 07:06:04'),
(31,'VenueTours','venuetours',NULL,'2025-08-02 07:06:04'),
(32,'ThemeFusion','themefusion',NULL,'2025-08-02 07:06:04'),
(33,'ColorPalette','colorpalette',NULL,'2025-08-02 07:06:04'),
(34,'EcoInvitaciones','ecoinvitaciones',NULL,'2025-08-02 07:06:04'),
(35,'TransformDress','transformdress',NULL,'2025-08-02 07:06:04'),
(36,'MexicanEmbroidery','mexicanembroidery',NULL,'2025-08-02 07:06:04'),
(37,'BridalGlow','bridalglow',NULL,'2025-08-02 07:06:04'),
(38,'ShortCeremonies','shortceremonies',NULL,'2025-08-02 07:06:04'),
(39,'PersonalVows','personalvows',NULL,'2025-08-02 07:06:04'),
(40,'DocumentaryStyle','documentarystyle',NULL,'2025-08-02 07:06:04'),
(41,'TacoBar','tacobar',NULL,'2025-08-02 07:06:04'),
(42,'FoodTrucks','foodtrucks',NULL,'2025-08-02 07:06:04'),
(43,'MezcalBar','mezcalbar','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(44,'NakedCake','nakedcake','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(45,'LiveBand','liveband','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(46,'FloralInstall','floralinstall','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(47,'ZeroWaste','zerowaste','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(48,'WelcomeBags','welcomebags','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(49,'RecoveryBrunch','recoverybrunch','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(50,'Mariachi','mariachi','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(51,'Surprise','surprise','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(52,'PlanningApps','planningapps','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(53,'CostBreakdown','costbreakdown','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(54,'KidsZone','kidszone','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(55,'PetFriendly','petfriendly','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(56,'OffSeason','offseason','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(57,'WeekdayWedding','weekdaywedding','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(58,'Hacienda','hacienda','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(59,'Rooftop','rooftop','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(60,'MicroWedding','microwedding','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(61,'Moodboard','moodboard','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(62,'BoldColors','boldcolors','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(63,'DressCode','dresscode','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(64,'QRinvite','qrinvite','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(65,'Jumpsuit','jumpsuit','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(66,'ComfortHeels','comfortheels','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(67,'NaturalMakeup','naturalmakeup','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(68,'LashLift','lashlift','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(69,'UnityRitual','unityritual','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(70,'ModernLasso','modernlasso','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(71,'AnalogFilter','analogfilter','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(72,'UrbanSession','urbansession','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(73,'RawVideo','rawvideo','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(74,'LongTables','longtables','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(75,'Lounge','lounge','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(76,'CircularDance','circulardance','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(77,'Aguachile','aguachile','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(78,'VeganOptions','veganoptions','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(79,'SignatureDrinks','signaturedrinks','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(80,'Mocktails','mocktails','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(81,'DessertTower','desserttower','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(82,'TropicalFruits','tropicalfruits','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(83,'SaxDJ','saxdj','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(84,'MariachiHour','mariachihour','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(85,'GIFbooth','gifbooth','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(86,'PaperFlags','paperflags','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(87,'FruitCenter','fruitcenter','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(88,'CandleMagic','candlemagic','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(89,'Lighting','lighting','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(90,'ScentDesign','scentdesign','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(91,'Playlist','playlist','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(92,'FirePit','firepit','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(93,'NoPlastic','noplastic','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(94,'LocalFood','localfood','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(95,'DonateFood','donatefood','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(96,'SucculentFavors','succulentfavors','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(97,'CocktailNames','cocktailnames','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(98,'GrandmaSurprise','grandmasurprise','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(99,'PolaroidGuestbook','polaroidguestbook','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(100,'Shuttle','shuttle','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(101,'WelcomeParty','welcomeparty','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(102,'PajamaParty','pajamaparty','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(103,'ReuseDress','reusedress','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(104,'Adventure','adventure','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(105,'Checklist','checklist','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(106,'Savings','savings','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(107,'VIPexperience','vipexperience','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(108,'DigitalRSVP','digitalrsvp','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(109,'SymbolicDate','symbolicdate','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(110,'Weather','weather','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(111,'Destination','destination','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(112,'Backyard','backyard','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(113,'JungleGlam','jungleglam','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(114,'MexiMinimal','meximinimal','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(115,'Terracotta','terracotta','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(116,'EmeraldGreen','emeraldgreen','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(117,'ObjectInvites','objectinvites','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(118,'SeedPaper','seedpaper','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(119,'LinenSuit','linensuit','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(120,'Guayabera','guayabera','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(121,'EffortlessHair','effortlesshair','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(122,'MicroFrench','microfrench','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(123,'PrivateVows','privatevows','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(124,'TimeCapsule','timecapsule','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(125,'Candid','candid','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(126,'FilmLook','filmlook','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(127,'TacoStation','tacostation','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(128,'GourmetTacos','gourmettacos','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(129,'Mixology','mixology','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(130,'Tequila','tequila','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(131,'SculptureCake','sculpturecake','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(132,'FusionMusic','fusionmusic','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(133,'NeonSign','neonsign','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(134,'RentDecor','rentdecor','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(135,'Biodegradable','biodegradable','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(136,'KmZero','kmzero','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(137,'Games','games','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(138,'Generational','generational','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(139,'IllustratedAgenda','illustratedagenda','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(140,'Michelada','michelada','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(141,'Picnic','picnic','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(142,'SecondLook','secondlook','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(143,'Engagement','engagement','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(144,'Timeline','timeline','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(145,'Crowdfunding','crowdfunding','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(146,'NoKids','nokids','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(147,'Petsitter','petsitter','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(148,'RainPlan','rainplan','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(149,'VirtualTour','virtualtour','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(150,'BohoChic','bohochic','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(151,'DesertTones','deserttones','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(152,'Animated','animated','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(153,'Sustainable','sustainable','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(154,'TwoPiece','twopiece','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(155,'Sneakers','sneakers','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(156,'DewySkin','dewyskin','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(157,'FlowerCrown','flowercrown','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(158,'WalkTogether','walktogether','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(159,'PromiseNotes','promisenotes','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(160,'Reels','reels','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(161,'CommunityTable','communitytable','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(162,'Interactive','interactive','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(163,'Churros','churros','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(164,'Chapulines','chapulines','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(165,'360Bar','360bar','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(166,'Seasonal','seasonal','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(167,'Folkloric','folkloric','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(168,'LivePainting','livepainting','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(169,'HangingFlorals','hangingflorals','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(170,'Recycle','recycle','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(171,'Handmade','handmade','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(172,'Cultural','cultural','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(173,'Transportation','transportation','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(174,'MorningAfter','morningafter','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(175,'Emotional','emotional','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(176,'Unique','unique','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(177,'StressFree','stressfree','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(178,'Transparent','transparent','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(179,'Intimate','intimate','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(180,'Unplugged','unplugged','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(181,'Sunset','sunset','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(182,'Vineyard','vineyard','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(183,'Industrial','industrial','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(184,'Textures','textures','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(185,'LaserCut','lasercut','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(186,'CustomSuit','customsuit','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(187,'StatementSleeves','statementsleeves','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(188,'BridalSkincare','bridalskincare','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(189,'SandCeremony','sandceremony','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(190,'DroneFootage','dronefootage','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(191,'FoodStation','foodstation','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(192,'Oaxacan','oaxacan','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(193,'MiniDesserts','minidesserts','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(194,'Cumbia','cumbia','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(195,'Disco','disco','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(196,'Mirrors','mirrors','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(197,'Aromatherapy','aromatherapy','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(198,'Spotify','spotify','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(199,'Compost','compost','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(200,'Personalization','personalization','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(201,'SurpriseSongs','surprisesongs','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(202,'Trivia','trivia','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(203,'LocalArt','localart','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(204,'Brunch','brunch','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(205,'Mimosa','mimosa','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(206,'Casual','casual','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(207,'Memories','memories','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(208,'Trending2025','trending2025','2025-08-02 07:06:04','2025-08-02 07:06:04'),
(209,'nuevotagparaslug','nuevotagparaslug',NULL,NULL),
(210,'chumis','chumis',NULL,NULL),
(211,'amentit','amentit',NULL,NULL),
(212,'gatitos','gatitos',NULL,NULL),
(213,'Frases','frases',NULL,NULL),
(214,'Mesas de regalo','mesas-de-regalo',NULL,NULL),
(215,'PoetaSensorial','poetasensorial',NULL,NULL),
(216,'BodasMX','bodasmx',NULL,NULL),
(217,'InvitaciónDigital','invitaciondigital',NULL,NULL),
(218,'ArqueologíaEmocional','arqueologiaemocional',NULL,NULL),
(219,'ÉticaEventual','Eticaeventual',NULL,NULL),
(220,'TactoTecnológico','tactotecnologico',NULL,NULL),
(221,'TactoDigital','tactodigital',NULL,NULL),
(222,'DiseñoEmocional','disenoemocional',NULL,NULL),
(223,'TecnologíaNupcial','tecnologianupcial',NULL,NULL),
(224,'MemoriaDigital','memoriadigital',NULL,NULL),
(225,'TiempoDigital','tiempodigital',NULL,NULL),
(226,'LegadoDigital','legadodigital',NULL,NULL),
(227,'TrilogíaSensorial','trilogiasensorial',NULL,NULL),
(228,'PresupuestoVivo','presupuestovivo',NULL,NULL),
(229,'MatrimonioMatemático','matrimoniomatematico',NULL,NULL),
(230,'EconomíaEmocional','economiaemocional',NULL,NULL),
(231,'TruequeSagrado','truequesagrado',NULL,NULL),
(232,'ÁlgebraDelAmor','Algebradelamor',NULL,NULL);
/*!40000 ALTER TABLE `blog_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_types`
--

DROP TABLE IF EXISTS `event_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `eventoslug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eventoslug` (`eventoslug`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_types`
--

LOCK TABLES `event_types` WRITE;
/*!40000 ALTER TABLE `event_types` DISABLE KEYS */;
INSERT INTO `event_types` VALUES
(1,'Boda','2025-06-30 20:48:36','2025-07-09 23:30:14','boda'),
(3,'XV años','2025-06-30 21:25:20','2025-07-30 16:40:25','xv');
/*!40000 ALTER TABLE `event_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_author_id` int(10) unsigned DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','author','visitor') NOT NULL DEFAULT 'visitor',
  `created` datetime DEFAULT current_timestamp(),
  `modified` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `blog_author_id` (`blog_author_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`blog_author_id`) REFERENCES `blog_authors` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(4,6,'elchumis@correo.com','$2y$10$g5xAexEPJ2DYVhJZEn/7LO2I7.ExXC7DB79PknuwNS5koipYOXHWe','author','2025-08-01 16:18:15','2025-08-01 16:18:15'),
(7,3,'elchumis@gmail.com','$2y$10$/YLjd0FcL/Xc6e7XJqW10eIkuVXSQwdAaskI6Ac9.z/S/jU4wgW.a','admin','2025-08-04 16:42:41','2025-08-04 22:45:13');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-08  2:59:30
