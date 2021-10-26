-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2021 a las 18:51:37
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lisboa_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `titular` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `texto` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `autor` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tags` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `url` varchar(80) COLLATE utf8mb4_spanish_ci NOT NULL,
  `imgPrincipal` varchar(80) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `titular`, `fecha`, `texto`, `autor`, `tags`, `url`, `imgPrincipal`) VALUES
(0, 'Lisboa Capital de portugal', '2021-06-30', 'Lisboa es la capital​ y mayor ciudad de Portugal. Situada en la desembocadura del río Tajo (Tejo), es la capital del país, capital del distrito de Lisboa, de la región de Lisboa, del Área Metropolitana de Lisboa, y es también el principal centro de la subregión de la Gran Lisboa.\',', 'Aitor Pérez', 'Lisboa,  Turismo', 'pagina.php?id=00', 'img/principales/00.jpg'),
(1, 'Población  y datos', '2021-06-25', 'La ciudad tiene una población de 547 773 habitantes y su área metropolitana se sitúa en los 2 810 923 en una superficie de 2921,90 km². Esta área contiene el 26 % de la población del país. Lisboa es la ciudad más rica de Portugal', 'Aitor Pérez', 'Lisboa, Portugal, Turismo', 'pagina.php?id=01', 'img/principales/01.jpg'),
(2, 'Geografía', '2021-06-24', 'Lisboa se encuentra en la latitud 38° 43 norte y longitud 9°8 oeste, lo que la convierte en la capital más occidental de la Europa continental. Se encuentra al oeste de Portugal, en la costa del océano Atlántico, en la margen derecha (al norte) del estuario del Tajo. La ciudad ocupa un área de 84,8 km²', 'Aitor Garcia', 'Lisboa, Portugar, Turismo', 'pagina.php?id=02', 'img/principales/02.jpg'),
(3, 'Las 7 colinas', '2021-06-21', 'El centro histórico de la ciudad se compone de siete colinas, siendo algunas de las calles demasiado empinadas para permitir el paso de vehículos; la ciudad se sirve de tres funiculares y un elevador (elevador de Santa Justa). La parte occidental de la ciudad está ocupada por el Parque Forestal Monsanto, uno de los parques urbanos más grandes de Europa con un área de casi 10 kilómetros cuadrados', 'Aitor Osuna', 'Lisboa, Centro Histórico, Turismo', 'pagina.php?id=03', 'img/principales/03.jpg'),
(4, 'Situación', '2021-06-21', 'Hace siglos el estuario era más ancho; su reducción con el paso de los años ha provocado la ampliación del terreno disponible para la ciudad.Lisboa se asienta sobre los restos de un antiguo campo volcánico que se extiende por todo el distrito de Lisboa; entre los volcanes más conocidos están el Monsanto y las colinas de Lisboa.', 'Aitor Juanete', 'Lisboa, Portugal, Situación', 'pagina.php?id=04', 'img/principales/04.jpg'),
(5, 'El clima de lisboa', '2021-06-01', 'Lisboa es una de las capitales europeas más cálidas. Los meses de primavera y de estío son generalmente soleados, con temperaturas máximas en torno a los 28 °C durante julio y agosto, y mínimas de unos 16 °C. El otoño y el invierno son generalmente lluviosos y ventosos, con algunos días soleados. Raramente baja la temperatura de 5 °C, que normalmente permanece en una media de 10 °C. Como media, hay 2800 horas de sol al año y 100 días con lluvias.', 'Aitor Pedear', 'Lisboa, Portugal, Temperatura', 'pagina.php?id=05', 'img/principales/05.jpg'),
(6, 'Origen griego', '2021-05-30', 'Lisboa es para unos de origen griego, para otros fenicio, siendo una cuestión más bien basada en la leyenda, que en la evidencia arqueológica.19​ El puerto natural que creaba el estuario del río Tajo lo convirtió en punto adecuado para crear un asentamiento que proveyera de comida a los barcos fenicios que se encontraban en ruta comercial hacia las islas del Estaño (actualmente islas Sorlingas y Cornualles)..', 'Aitor Autor', '\'Lisboa\', \'Portugal\', \'Turismo\', \'Grecia', 'pagina.php?id=06', 'img/principales/06.jpg'),
(7, 'Comercio fenicio', '2021-05-25', 'Los fenicios también aprovecharon la situación de la colonia en la boca del río más grande de la península ibérica para comerciar con las tribus del interior de las que obtenían metales preciosos. Otro importante producto local era la sal, el pescado salado y los caballos lusitanos.', 'Aitor Itobravo', '\'Lisboa\', \'Portugal\', \'Turismo\', \'Fenicios\'', 'pagina.php?id=07', 'img/principales/07.jpg'),
(8, 'Lisboa 08', '2021-05-25', '25/5/21\',\r\n    \"texto\" => \'Lisboa es para unos de origen griego, para otros fenicio, siendo una cuestión más bien basada en la leyenda, que en la evidencia arqueológica. Los fenicios también aprovecharon la situación de la colonia en la boca del río más grande de la península.', 'Aitor Redeloro', '\'Lisboa\', \'Portugal\', \'Turismo\'', 'pagina.php?id=08', 'img/principales/08.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
