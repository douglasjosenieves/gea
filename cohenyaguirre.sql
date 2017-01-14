-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 15:27:50
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cohenyaguirre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form_fichas_opciones`
--

CREATE TABLE IF NOT EXISTS `form_fichas_opciones` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `elaborado_por` varchar(500) NOT NULL,
  `link` text NOT NULL,
  `direccion` text NOT NULL,
  `ciudad` varchar(500) NOT NULL,
  `zona` varchar(500) NOT NULL,
  `celular` varchar(500) NOT NULL,
  `local` varchar(500) NOT NULL,
  `nombre_contacto` varchar(500) NOT NULL,
  `vendedor_solicita` double NOT NULL,
  `nosotros_ofrecemos` double NOT NULL,
  `tamano_local` int(11) NOT NULL,
  `antiguedad` int(11) NOT NULL,
  `propietario_dispuesto_traspaso` float NOT NULL,
  `website` text NOT NULL,
  `facturacion_mensual` double NOT NULL,
  `datos_adicionales` text NOT NULL,
  `comentarios_sobre_negocio` text NOT NULL,
  `capture1` varchar(500) NOT NULL,
  `capture2` varchar(500) NOT NULL,
  `anulado` float NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `form_fichas_opciones`
--

INSERT INTO `form_fichas_opciones` (`ref`, `fecha`, `elaborado_por`, `link`, `direccion`, `ciudad`, `zona`, `celular`, `local`, `nombre_contacto`, `vendedor_solicita`, `nosotros_ofrecemos`, `tamano_local`, `antiguedad`, `propietario_dispuesto_traspaso`, `website`, `facturacion_mensual`, `datos_adicionales`, `comentarios_sobre_negocio`, `capture1`, `capture2`, `anulado`) VALUES
(1, '2016-05-27 19:14:51', 'Douglas Nieves', 'http://www.kejina.cc', 'Non et in quisquam qui exercitation dolores tenetur autem', 'BARCELONA', 'COMUNIDAD', 'Qui ex rem ipsa sunt beatae repellendus Quas cupiditate est et similique quisquam lorem minim exercitation Nam', 'Sit assumenda dolor esse laboris soluta error et in ex rem voluptatem iste et qui ipsam tenetur', '1 Culpa ea sed ipsum magnam cillum nemo sed voluptatem voluptatem optio laboriosam consequatur eaque laudantium qui fugiat', 50, 62, 14, 69, 0, 'http://www.gorapuzo.cc', 41, 'Beatae voluptatem, pariatur? Earum temporibus in facilis obcaecati veniam, ipsa, eos, sit, provident, non duis sunt tempora deserunt.', 'Irure dolor est est at inventore excepteur harum ipsam in inventore excepteur aut.', 'construcion.jpg', '', 0),
(2, '2016-05-27 19:15:37', 'Douglas Nieves', 'http://www.gebesigiz.com', 'Aperiam laboris quis labore laborum facilis non facilis a amet modi est et', 'VALENCIA', 'COMUNIDAD', 'Dolore voluptates quia voluptas consectetur ut expedita esse officia cumque', 'Est voluptatibus ullamco voluptas sit voluptas suscipit pariatur Quo optio voluptas ex laborum exercitationem magna modi', '2 Fugiat lorem culpa sunt quis non aut est', 62, 42, 42, 69, 0, 'http://www.cebafydef.biz', 16, 'Fugiat, culpa eum dignissimos adipisci quia quia deserunt sit, dolore in non sit est sapiente tempore, quae praesentium ut.', 'Explicabo. Vero rerum praesentium magni quo illo mollit commodi obcaecati est minim in qui quasi sint, et.', 'construcion (1).jpg; construcion (2).jpg', '', 0),
(3, '2016-05-30 17:42:30', 'Douglas Nieves', 'http://www.gebesigiz.com', 'Aperiam laboris quis labore laborum facilis non facilis a amet modi est et', '', '', '', '', '3 Veniam dignissimos in quo consequuntur est odio proident sit minima adipisci distinctio', 0, 0, 0, 0, 0, '', 0, '', '', '', '', 0),
(4, '2016-05-30 17:44:50', 'Douglas Nieves', 'http://www.bomabedybiwif.in', 'Velit corrupti vitae sed voluptatem exercitationem eos veniam est sit maiores nisi magni iste in soluta qui', 'VALENCIA', 'CAPITAL', 'Incididunt dolorem facere ipsum laboris accusantium ullam in qui quis magni quis aliqua Reprehenderit laborum Eligendi ut at neque deserunt', 'Consequat Molestiae sit qui fuga', '4 Veniam dignissimos in quo consequuntur est odio proident sit minima adipisci distinctio', 10, 44, 85, 69, 0, 'http://www.bewy.org', 53, 'Pariatur. Aute deleniti ut nisi occaecat in fugit, aliquip tempor fugiat, explicabo. Ut deserunt ut cupidatat do nulla.', 'Esse aperiam quo minus voluptate deserunt incididunt cupidatat et assumenda adipisci lorem quia modi sunt rerum.', '', '', 0),
(5, '2016-05-30 22:09:13', 'Douglas Nieves', 'http://www.kydafumysapenih.me.uk', 'Animi accusantium et amet qui quia obcaecati explicabo Maxime aut culpa consectetur cupiditate non voluptas est modi blanditiis quis voluptates', 'BARCELONA', 'CAPITAL', 'Officia debitis voluptate molestiae fugiat veniam velit fuga', 'Reprehenderit tempora et ipsum beatae sit ducimus ab omnis asperiores excepturi', 'Eos asperiores mollit eum eligendi quae qui ratione vel libero qui', 13, 74, 80, 69, 1, 'http://www.wupyh.net', 23, 'Dignissimos id nostrum Nam nihil est, repudiandae ut laborum. Dolor excepturi voluptatum autem tempora asperiores eaque recusandae.', 'Ratione et sit, doloribus quis totam iste quis sapiente eos esse autem voluptas ut labore atque in possimus.', 'unnamed.jpg', '', 0),
(6, '2016-05-11 00:00:00', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', 0, '', '', '', '', 0),
(7, '2016-05-27 19:14:51', 'Douglas Nieves', 'http://www.kejina.cc', 'Non et in quisquam qui exercitation dolores tenetur autem', 'BARCELONA', 'COMUNIDAD', 'Qui ex rem ipsa sunt beatae repellendus Quas cupiditate est et similique quisquam lorem minim exercitation Nam', 'Sit assumenda dolor esse laboris soluta error et in ex rem voluptatem iste et qui ipsam tenetur', 'Culpa ea sed ipsum magnam cillum nemo sed voluptatem voluptatem optio laboriosam consequatur eaque laudantium qui fugiat', 50, 62, 14, 69, 0, 'http://www.gorapuzo.cc', 41, 'Beatae voluptatem, pariatur? Earum temporibus in facilis obcaecati veniam, ipsa, eos, sit, provident, non duis sunt tempora deserunt.', 'Irure dolor est est at inventore excepteur harum ipsam in inventore excepteur aut.', 'construcion.jpg', '', 0),
(8, '2016-05-27 19:15:37', 'Douglas Nieves', 'http://www.gebesigiz.com', 'Aperiam laboris quis labore laborum facilis non facilis a amet modi est et', 'VALENCIA', 'COMUNIDAD', 'Dolore voluptates quia voluptas consectetur ut expedita esse officia cumque', 'Est voluptatibus ullamco voluptas sit voluptas suscipit pariatur Quo optio voluptas ex laborum exercitationem magna modi', 'Fugiat lorem culpa sunt quis non aut est', 62, 42, 42, 69, 0, 'http://www.cebafydef.biz', 16, 'Fugiat, culpa eum dignissimos adipisci quia quia deserunt sit, dolore in non sit est sapiente tempore, quae praesentium ut.', 'Explicabo. Vero rerum praesentium magni quo illo mollit commodi obcaecati est minim in qui quasi sint, et.', 'construcion (1).jpg; construcion (2).jpg', '', 0),
(9, '2016-05-30 17:42:30', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', 0, '', '', '', '', 0),
(10, '2016-05-30 17:44:50', 'Douglas Nieves', 'http://www.bomabedybiwif.in', 'Velit corrupti vitae sed voluptatem exercitationem eos veniam est sit maiores nisi magni iste in soluta qui', 'VALENCIA', 'CAPITAL', 'Incididunt dolorem facere ipsum laboris accusantium ullam in qui quis magni quis aliqua Reprehenderit laborum Eligendi ut at neque deserunt', 'Consequat Molestiae sit qui fuga', 'Veniam dignissimos in quo consequuntur est odio proident sit minima adipisci distinctio', 10, 44, 85, 69, 0, 'http://www.bewy.org', 53, 'Pariatur. Aute deleniti ut nisi occaecat in fugit, aliquip tempor fugiat, explicabo. Ut deserunt ut cupidatat do nulla.', 'Esse aperiam quo minus voluptate deserunt incididunt cupidatat et assumenda adipisci lorem quia modi sunt rerum.', '', '', 0),
(11, '2016-05-30 22:09:13', 'Douglas Nieves 11', 'http://www.kydafumysapenih.me.uk', 'Animi accusantium et amet qui quia obcaecati explicabo Maxime aut culpa consectetur cupiditate non voluptas est modi blanditiis quis voluptates', 'BARCELONA', 'CAPITAL', 'Officia debitis voluptate molestiae fugiat veniam velit fuga', 'Reprehenderit tempora et ipsum beatae sit ducimus ab omnis asperiores excepturi', 'Eos asperiores mollit eum eligendi quae qui ratione vel libero qui', 13, 74, 80, 69, 1, 'http://www.wupyh.net', 23, 'Dignissimos id nostrum Nam nihil est, repudiandae ut laborum. Dolor excepturi voluptatum autem tempora asperiores eaque recusandae.', 'Ratione et sit, doloribus quis totam iste quis sapiente eos esse autem voluptas ut labore atque in possimus.', 'unnamed.jpg', '', 0),
(12, '2016-06-01 23:18:10', 'Douglas Nieves', 'http://www.zakefiwub.in', 'Nobis aperiam fugiat tenetur aliqua Esse sunt id laborum Tenetur occaecat voluptas quia cupidatat in laudantium unde maiores', 'VALENCIA', 'COMUNIDAD', 'In eum debitis et incidunt consectetur ut', 'Sint id porro quia velit unde non qui pariatur Sit in beatae quae totam perspiciatis', 'Esse assumenda sed iure sint iusto suscipit aperiam magnam anim quae dolore', 24, 42, 18, 69, 0, 'http://www.halakovuwopav.cm', 19, 'Incidunt, non nisi dicta voluptate iure ad incidunt, temporibus alias enim Nam reprehenderit vero nihil nihil.', 'Asperiores fuga. Et obcaecati nulla exercitationem velit, commodi proident, architecto et voluptas tenetur autem eum.', '', '', 0),
(13, '2016-06-01 23:18:17', 'Douglas Nieves', 'http://www.nivudeqaruny.cm', 'Est et consequuntur sunt enim', 'BARCELONA', 'CAPITAL', 'Illo vel laudantium ad nihil repudiandae ut excepteur', 'Aliquid aut rerum quod elit est voluptate explicabo Aut ut eligendi veniam dicta Nam laudantium commodo quae debitis', 'Rerum beatae neque illum commodi enim doloribus', 82, 48, 21, 1, 0, 'http://www.fivimyfy.org.au', 61, 'Magna animi, soluta exercitation facere hic sed qui molestias ipsam eos et fugit, veniam.', 'In reprehenderit, et molestiae fugit, do non qui qui non.', '', '', 0),
(14, '2016-06-01 23:18:23', 'Douglas Nieves', 'http://www.xyhu.ws', 'Culpa officia velit soluta distinctio Aut esse eiusmod quod provident dolorem doloremque velit', 'MADRID', 'CAPITAL', 'Nisi quae non sit omnis nulla voluptas et consequatur duis deserunt sed do cupidatat sit at enim vel', 'Molestias accusantium irure ut laudantium necessitatibus incididunt sit elit aliquip voluptas voluptatum possimus nesciunt voluptatibus', 'Duis provident id vitae nisi sed Nam quas soluta qui ut ea dignissimos necessitatibus hic', 72, 66, 39, 1, 0, 'http://www.cizejarebesejo.mobi', 10, 'Quas quisquam aspernatur eius quia temporibus repellendus. Quo facilis eum molestiae in ad.', 'Enim minus rerum quia magna odio est dolorem in aliquip quo.', '', '', 0),
(15, '2016-06-02 15:11:26', 'Douglas Nieves', 'http://www.mutubeqacytu.mobi', 'Aperiam deserunt quae reprehenderit omnis labore perspiciatis deleniti beatae nemo est accusantium consectetur animi dolores odit placeat dolore sed a', 'BARCELONA', 'CAPITAL', 'Dolores quisquam excepturi facere aut nihil aut et est', 'Dolor nesciunt provident modi laudantium sunt error cumque animi esse adipisci elit officia', 'Sit libero incididunt cum aut cupidatat ad occaecat id esse corporis', 57, 43, 3, 69, 0, 'http://www.ruferib.com.au', 71, 'Qui duis fugiat, et officia corrupti, illum, minus fugiat, est.', 'Deleniti aliquid rerum explicabo. Laboriosam, lorem nesciunt, facere quae elit, nemo.', '0', '', 0),
(16, '2016-06-02 15:13:04', 'Douglas Nieves', 'http://www.hipanyxijec.org', 'Possimus qui modi atque tempore officia vel laboriosam non in quisquam sed possimus nostrud est in', 'BARCELONA', 'CAPITAL', 'Qui voluptate magna omnis quia reprehenderit et', 'Dolore error tenetur porro excepturi alias nisi autem omnis nesciunt eum tempora incidunt lorem repudiandae et quis eius dolore', 'Et adipisci qui eos voluptatem qui beatae enim aut do rerum itaque consectetur', 50, 75, 28, 69, 1, 'http://www.dijuryc.me.uk', 6, 'Aliquam et itaque atque a ex laboris rerum ullam ullam velit, temporibus velit eum consequuntur sapiente.', 'Officia earum veniam, asperiores voluptate nostrud esse, ipsa, quisquam elit, accusamus.', '0', '', 0),
(17, '2016-06-02 15:14:03', 'Douglas Nieves', 'http://www.vevilytydexa.co', 'Dolore laudantium exercitation nulla nisi laborum deleniti exercitationem dolorem obcaecati eum laborum ut vel doloribus eum deleniti ratione', 'BARCELONA', 'COMUNIDAD', 'Quo labore esse nemo ea ipsum amet quam molestiae', 'Nemo dolore do ut fugiat impedit eiusmod', 'Voluptatem reprehenderit excepturi veritatis assumenda qui quia itaque', 78, 5, 30, 69, 1, 'http://www.dedequt.org', 15, 'Nesciunt, dolor nesciunt, nesciunt, dolorem do ut in alias esse occaecat sit.', 'Vel exercitation quibusdam voluptas labore quidem est, non sunt quisquam temporibus nulla repellendus. Adipisci proident, cupidatat quis reiciendis laboris.', 'Array', '', 0),
(18, '2016-06-02 15:17:13', 'Douglas Nieves', 'http://www.fyjoj.com', 'Expedita quam adipisicing culpa recusandae Reprehenderit tenetur et quaerat aut reprehenderit corporis', 'MADRID', 'COMUNIDAD', 'Aliqua Perferendis molestias minima voluptatem consequat Voluptatem et similique quisquam nisi expedita facere sed', 'Odit et vel reprehenderit vel hic corrupti aliquam consectetur ducimus atque at similique iste ipsum autem adipisci delectus', 'Incididunt et id dignissimos voluptate minim nemo commodo ratione vel facilis omnis consequatur facere in voluptate harum accusantium eos', 14, 74, 19, 69, 0, 'http://www.pebodetyhulusi.org.au', 10, 'Tempora quisquam veritatis sit, quis cum qui in ut aperiam veniam, soluta labore.', 'In et aut dolorum elit, in quam adipisicing sint elit, praesentium ut quia odit animi.', 'Quia numquam fugiat pariatur Ut itaque molestias id ipsum et reprehenderit et quia tempora quod atque minima laborum;Dolor numquam fugiat consequatur quis occaecat rem dolorum est molestiae laboriosam ut animi enim similique qui non ut deserunt;', '', 0),
(19, '2016-06-02 15:18:07', 'Douglas Nieves', 'http://www.dudatevo.org', 'Qui fugiat nihil sunt consequatur quia voluptas dolore laborum Qui ex enim et assumenda sed voluptate excepturi sint ea', 'VALENCIA', 'COMUNIDAD', 'In cillum sed eos a nisi est tenetur quidem cillum', 'Animi velit aut dolorem nostrum et quo aperiam occaecat necessitatibus possimus', 'Mollitia corrupti velit ipsum possimus tempor ut iure nemo dolore ea non', 57, 19, 89, 69, 0, 'http://www.hanu.me.uk', 47, 'Dolor amet, deserunt debitis dolorem similique enim commodi voluptatum placeat, commodo.', 'Commodo est aute quis fuga. Id sit, impedit, quas ratione id, quis repellendus. Laboris blanditiis.', 'ddc-aza-barba-asombro-1974088.jpg;slider_one.jpg;', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(250) NOT NULL,
  `fecha_emis` date NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `clave` varchar(250) NOT NULL,
  `pais` varchar(250) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `anulado` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `sexo`, `email`, `tel`, `fecha_emis`, `usuario`, `clave`, `pais`, `tipo`, `anulado`) VALUES
(1, 'Douglas', 'Nieves', 'M', 'douglasjosenieves@gmail.com', '04141331946', '2016-05-23', 'douglasjosenieves@gmail.com', '123456*', 'venezuela', 'administrador', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
