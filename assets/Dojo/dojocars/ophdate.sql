-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2018 a las 18:49:53
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ophdate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_especificas`
--

CREATE TABLE `categorias_especificas` (
  `id_categorias_especificas` int(11) NOT NULL,
  `categorias_general_id_categoria_producto` int(11) NOT NULL,
  `categoria_especifica` varchar(60) NOT NULL,
  `categoria_especifica_ingles` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias_especificas`
--

INSERT INTO `categorias_especificas` (`id_categorias_especificas`, `categorias_general_id_categoria_producto`, `categoria_especifica`, `categoria_especifica_ingles`) VALUES
(1, 27, 'Test', 'Test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_general`
--

CREATE TABLE `categorias_general` (
  `id_categoria_producto` int(11) NOT NULL,
  `categoria_producto` varchar(65) NOT NULL,
  `categoria_ingles` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias_general`
--

INSERT INTO `categorias_general` (`id_categoria_producto`, `categoria_producto`, `categoria_ingles`) VALUES
(27, 'Cuidado Personal', 'Personal care'),
(29, 'Fitness', 'Fitness'),
(30, 'Clases de Baile', 'Dance Classes'),
(32, 'Clases de m?sica', 'Music classes  ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ciudad_id` int(11) NOT NULL,
  `pais_Paisid` int(11) NOT NULL,
  `ciudad_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ciudad_id`, `pais_Paisid`, `ciudad_nombre`) VALUES
(1, 1, 'Buenos Aires'),
(2, 1, 'Santa Fe'),
(3, 1, 'Mendoza'),
(4, 1, 'Tucumán'),
(5, 1, 'Entre Rios'),
(6, 1, 'Salta'),
(7, 1, 'Misiones'),
(8, 1, 'Chaco'),
(9, 1, 'Corrientes'),
(10, 1, 'Santiago del Estero'),
(11, 1, 'Jujuy'),
(12, 1, 'San Juan'),
(13, 1, 'Río Negro'),
(14, 1, 'Formosa'),
(15, 1, 'Neuquén'),
(16, 1, 'Chubut'),
(17, 1, 'San Luis'),
(18, 1, 'Catamarca'),
(19, 1, 'La Rioja'),
(20, 1, 'La Pampa'),
(21, 1, 'Santa Cruz'),
(22, 1, 'Tierra del Fuego'),
(23, 2, 'Aruba'),
(24, 3, 'Sidney'),
(25, 3, 'Melbourne'),
(26, 3, 'Brisbane'),
(27, 3, 'Adelaida'),
(28, 3, 'Perth'),
(29, 3, 'Hobart'),
(30, 3, 'Camberra'),
(31, 3, 'Sussex Inlet'),
(32, 3, 'Darwin'),
(33, 3, 'Kingston'),
(34, 3, 'Flying Fish Cove'),
(35, 3, 'West Island'),
(36, 4, 'Burgenland'),
(40, 4, 'Salzburg'),
(41, 4, 'Steiermark'),
(43, 4, 'Vorarlberg'),
(44, 4, 'Wien'),
(45, 5, 'Acklins and Crooked Islands'),
(46, 5, 'Bimini'),
(47, 5, 'Cat Island'),
(48, 5, 'Exuma'),
(49, 5, 'Freeport'),
(50, 5, 'Fresh Creek'),
(51, 5, 'Governor\'s Harbour'),
(52, 5, 'Green Turtle Cay'),
(53, 5, 'Harbour Island'),
(54, 5, 'High Rock'),
(55, 5, 'Inagua'),
(56, 5, 'Kemps Bay'),
(57, 5, 'Long Island'),
(58, 5, 'Marsh Harbour'),
(59, 5, 'Mayaguana'),
(60, 5, 'New Providence'),
(61, 5, 'Nichollstown and Berry Islands'),
(62, 5, 'Ragged Island'),
(63, 5, 'Rock Sound'),
(64, 5, 'Sandy Point'),
(65, 5, 'San Salvador and Rum Cay'),
(66, 6, 'Amberes'),
(67, 6, 'Limburgo'),
(68, 6, 'Brabante Flamenco'),
(69, 6, 'Flandes eastern'),
(70, 6, 'Flandes western'),
(71, 6, 'Henao'),
(72, 6, 'Brabante Valon'),
(73, 6, 'Namur'),
(74, 6, 'Lieja'),
(75, 6, 'Luxemburgo'),
(76, 7, 'Devonshire'),
(77, 7, 'Hamilton'),
(78, 7, 'Paget'),
(79, 7, 'Pembroke'),
(80, 7, 'Saint George'),
(81, 7, 'Sandys'),
(82, 7, 'Smith'),
(83, 7, 'Southampton'),
(84, 7, 'Warwick'),
(85, 8, 'Beni'),
(86, 8, 'Chuquisaca'),
(87, 8, 'Cochabamba'),
(88, 8, 'La Paz'),
(89, 8, 'Oruro'),
(90, 8, 'Pando'),
(91, 8, 'Potosi'),
(92, 8, 'Santa Cruz'),
(93, 8, 'Tarija'),
(94, 9, 'Acre'),
(95, 9, 'Alagoas'),
(96, 9, 'Amapa'),
(97, 9, 'Amazonas'),
(98, 9, 'Bahia'),
(99, 9, 'Ceara'),
(100, 9, 'Distrito Federal'),
(101, 9, 'Espírito Santo'),
(102, 9, 'Goiás'),
(103, 9, 'Maranhao'),
(104, 9, 'Mato Grosso'),
(105, 9, 'Mato Grosso del Sur'),
(106, 9, 'Minas Gerais'),
(107, 9, 'Para'),
(108, 9, 'Paraiba'),
(109, 9, 'Parana'),
(110, 9, 'Pernambuco'),
(111, 9, 'Piaui'),
(112, 9, 'Rio de Janeiro'),
(113, 9, 'Rio Grande del Norte'),
(114, 9, 'Rio Grande del Sur'),
(115, 9, 'Rondonia'),
(116, 9, 'Roraima'),
(117, 9, 'Santa Catarina'),
(118, 9, 'Sao Paulo'),
(119, 9, 'Sergipe'),
(120, 9, 'Tocantins'),
(121, 10, 'Blagoevgrad'),
(122, 10, 'Burgas'),
(123, 10, 'Dobrich'),
(124, 10, 'Gabrovo'),
(125, 10, 'Haskovo'),
(126, 10, 'Kardzhali'),
(127, 10, 'Kyustendil'),
(128, 10, 'Lovech'),
(129, 10, 'Montana'),
(130, 10, 'Pazardzhik'),
(131, 10, 'Pernik'),
(132, 10, 'Pleven'),
(133, 10, 'Plovdiv'),
(134, 10, 'Razgrad'),
(135, 10, 'Ruse'),
(136, 10, 'Shumen'),
(137, 10, 'Silistra'),
(138, 10, 'Sliven'),
(139, 10, 'Smolyan'),
(142, 10, 'Stara Zagora'),
(143, 10, 'Targovishte'),
(144, 10, 'Veliko Tarnovo'),
(145, 10, 'Varna'),
(146, 10, 'Vidin'),
(147, 10, 'Vratsa'),
(148, 10, 'Yambol'),
(149, 11, 'Alberta'),
(150, 11, 'British Columbia'),
(151, 11, 'Manitoba'),
(152, 11, 'New Brunswick '),
(153, 11, 'Newfoundland and Labrador  '),
(154, 11, 'Nova Scotia  '),
(155, 11, 'Ontario'),
(156, 11, 'Prince Edward Island '),
(157, 11, 'Quebec'),
(158, 11, 'Saskatchewan'),
(159, 12, 'Arica y Parinacota'),
(160, 12, 'Tarapaca'),
(161, 12, 'Antofagasta'),
(162, 12, 'Atacama'),
(163, 12, 'Coquimbo'),
(164, 12, 'Valparaiso'),
(165, 12, 'Rancagua'),
(166, 12, 'Maule'),
(167, 12, 'Biobio'),
(169, 12, 'Los Ríos'),
(170, 12, 'Los Lagos'),
(171, 12, 'Coyhaique'),
(172, 12, 'Punta Arenas'),
(173, 12, 'Santiago'),
(174, 13, 'Antioquia'),
(175, 13, 'Bogotá, D. F.'),
(176, 13, 'Bolivar'),
(177, 13, 'Boyaca'),
(178, 13, 'Cauca'),
(179, 13, 'Cundinamarca'),
(180, 13, 'Magdalena'),
(181, 13, 'Santander'),
(182, 13, 'Tolima'),
(183, 14, 'San Jose'),
(184, 14, 'Alajuela'),
(185, 14, 'Cartago'),
(186, 14, 'Heredia'),
(187, 14, 'Limon'),
(188, 14, 'Guanacaste'),
(189, 14, 'Puntarenas'),
(190, 16, 'Pinar del Río'),
(191, 16, 'Artemisa'),
(192, 16, 'La Habana'),
(193, 16, 'Mayabeque'),
(194, 16, 'Matanzas'),
(195, 16, 'Cienfuegos'),
(196, 16, 'Villa Clara'),
(197, 16, 'Sancti Sp?ritus'),
(198, 16, 'Ciego de Ávila'),
(199, 16, 'Camaguey'),
(200, 16, 'Las Tunas'),
(201, 16, 'Granma'),
(203, 16, 'Santiago de Cuba'),
(205, 16, 'Isla de la Juventud'),
(206, 17, 'Praga'),
(207, 17, 'Brno'),
(208, 17, 'Karlovy Vary'),
(209, 17, 'Liberec'),
(210, 17, 'Ostrava'),
(211, 17, 'Olomouc'),
(212, 17, 'Pardubice'),
(213, 17, 'Pilsen'),
(214, 17, 'Praga'),
(215, 17, 'Jihlava'),
(216, 17, 'Usti nad Labem'),
(217, 17, 'Zlin'),
(218, 18, 'Copenhague'),
(219, 18, 'Frederiksberg'),
(220, 18, 'Copenhague'),
(221, 18, 'Frederiksborg'),
(222, 18, 'Roskilde'),
(223, 18, 'Selandia Occidental'),
(225, 18, 'Fionia'),
(226, 18, 'Jutlandia Meridional'),
(227, 18, 'Ribe'),
(228, 18, 'Vejle'),
(230, 18, 'Viborg'),
(231, 18, 'Jutlandia Septentrional'),
(232, 18, 'Aarhus'),
(233, 18, 'Bornholm'),
(234, 20, 'Distrito Nacional'),
(235, 20, 'Azua'),
(236, 20, 'Baoruco'),
(237, 20, 'Barahona'),
(238, 20, 'Dajabon'),
(239, 20, 'Duarte'),
(241, 20, 'El Seibo'),
(242, 20, 'Espaillat'),
(243, 20, 'Hato Mayor'),
(244, 20, 'Independencia'),
(245, 20, 'La Altagracia'),
(246, 20, 'La Romana'),
(247, 20, 'La Vega'),
(248, 20, 'María Trinidad Sánchez'),
(249, 20, 'Monseñor Nouel'),
(250, 20, 'Monte Cristi'),
(251, 20, 'Monte Plata'),
(252, 20, 'Pedernales'),
(253, 20, 'Peravia'),
(254, 20, 'Puerto Plata'),
(255, 20, 'Salcedo'),
(256, 20, 'Samana'),
(257, 20, 'Sanchez Ramírez'),
(258, 20, 'San Cristóbal'),
(259, 20, 'San Jose de Ocoa'),
(260, 20, 'San Juan'),
(261, 20, 'San Pedro de Macorís'),
(262, 20, 'Santiago'),
(263, 20, 'Santiago Rodriguez'),
(264, 20, 'Santo Domingo'),
(265, 20, 'Valverde'),
(267, 21, 'Cuenca'),
(268, 21, 'Guaranda'),
(269, 21, 'Machala'),
(270, 21, 'Esmeraldas'),
(271, 21, 'Puerto Baquerizo Moreno'),
(272, 21, 'Guayaquil'),
(273, 21, 'Ibarra'),
(274, 21, 'Loja'),
(275, 21, 'Babahoyo'),
(276, 21, 'Portoviejo'),
(277, 21, 'Macas'),
(278, 21, 'Tena'),
(279, 21, 'Puyo'),
(280, 21, 'Quito'),
(281, 21, 'Santa Elena'),
(282, 21, 'Santo Domingo'),
(283, 21, 'Nueva Loja'),
(284, 22, 'Alexandria'),
(286, 22, 'Asiut'),
(287, 22, 'Damanhur'),
(288, 22, 'Beni Suef'),
(289, 22, 'Cairo'),
(290, 22, 'Mansura'),
(291, 22, 'Damieta'),
(293, 58, 'Carmelo'),
(294, 58, 'Bella Union'),
(295, 58, 'Young'),
(296, 22, 'Kafr el Sheij'),
(298, 22, 'Menia'),
(299, 22, 'Shibin el-qom'),
(300, 22, 'El Jariya'),
(301, 22, 'El Arish'),
(303, 22, 'Banha'),
(304, 22, 'Quena'),
(305, 22, 'Hurgada'),
(306, 22, 'Zaqaziq'),
(307, 22, 'Suhag'),
(308, 22, 'El Tor'),
(309, 22, 'Suez'),
(310, 22, 'Luxor'),
(311, 23, 'Acajutla'),
(314, 23, 'Apopa'),
(315, 23, 'Chalatenango'),
(316, 23, 'Chalchuapa'),
(317, 23, 'Cojutepeque'),
(318, 23, 'Cuscatancingo'),
(319, 23, 'Delgado'),
(320, 23, 'Izalco'),
(321, 23, 'La Union'),
(322, 23, 'Mejicanos'),
(324, 23, 'Puerto El Triunfo'),
(325, 23, 'Quezaltepeque'),
(326, 23, 'San Francisco'),
(327, 23, 'San Marcos'),
(328, 23, 'San Martín'),
(329, 23, 'San Miquel'),
(330, 23, 'San Rafael Oriente'),
(331, 23, 'San Salvador'),
(332, 23, 'San Vicente'),
(333, 23, 'Santa Ana'),
(334, 23, 'Santa Rosa de Lima'),
(335, 23, 'Santa Tecla'),
(336, 23, 'Sensuntepeque'),
(337, 23, 'Sonsonate'),
(338, 23, 'Soyapango'),
(340, 23, 'Zacatecoluca'),
(341, 24, 'Helsinki'),
(342, 24, 'Lathi'),
(343, 24, 'Tampere'),
(344, 24, 'Turku'),
(345, 24, 'Oulu'),
(346, 25, 'Estrasburgo'),
(347, 25, 'Burdeos'),
(348, 25, 'Clermont-Ferrand'),
(349, 25, 'Dijon'),
(350, 25, 'Rennes'),
(351, 25, 'Orleans'),
(352, 25, 'Châlons en Champagne'),
(353, 25, 'Ajaccio'),
(354, 25, 'Besançon'),
(355, 25, 'ParÍs'),
(356, 25, 'Montpellier'),
(357, 25, 'Limoges'),
(358, 25, 'Metz'),
(359, 25, 'Toulouse'),
(360, 25, 'Lille'),
(361, 25, 'Caen'),
(362, 25, 'Nantes'),
(363, 25, 'Amiens'),
(364, 25, 'Poitiers'),
(365, 25, 'Marsella'),
(366, 25, 'Lyon'),
(367, 25, 'Basse-Terre'),
(368, 25, 'Cayenne'),
(369, 25, 'Fort de France'),
(370, 25, 'Saint-Denis'),
(371, 25, 'Mamoudzou'),
(372, 26, 'Baden-Wurtemberg'),
(373, 26, 'Baviera'),
(374, 26, 'BerlÍn'),
(375, 26, 'Brandeburgo'),
(376, 26, 'Bremen'),
(377, 26, 'Hamburgo'),
(378, 26, 'Hesse'),
(379, 26, 'Mecklemburgo-Pomerania Occidental'),
(380, 26, 'Baja Sajonia'),
(381, 26, 'Renania del Norte-Westfalia'),
(382, 26, 'Renania-Palatinado'),
(383, 26, 'Sarre'),
(384, 26, 'Sajonia'),
(385, 26, 'Sajonia-Anhalt'),
(386, 26, 'Schleswig-Holstein'),
(387, 26, 'Turingia'),
(388, 27, 'South East'),
(389, 27, 'London'),
(390, 27, 'North West'),
(391, 27, 'East of England'),
(392, 27, 'West Midlands'),
(393, 27, 'South West'),
(394, 27, 'Yorkshire and the Humber'),
(395, 27, 'East Midlands'),
(396, 27, 'North East'),
(397, 28, 'Atenas'),
(399, 28, 'Patras'),
(400, 28, 'Heraclion'),
(401, 28, 'Larisa'),
(402, 28, 'Volos'),
(403, 28, 'Rodas'),
(404, 28, 'Ioanina'),
(405, 28, 'La Canea'),
(406, 28, 'Calcis'),
(407, 29, 'Saint George'),
(408, 29, 'Gouyave'),
(409, 29, 'Grenville'),
(410, 29, 'Victoria'),
(411, 30, 'Alta Verapaz'),
(412, 30, 'Baja Verapaz'),
(413, 30, 'Chimaltenango'),
(414, 30, 'Chiquimula'),
(415, 30, 'Peten'),
(416, 30, 'El Progreso'),
(417, 30, 'Quiche'),
(418, 30, 'Escuintla'),
(419, 30, 'Guatemala'),
(420, 30, 'Huehuetenango'),
(421, 30, 'Izabal'),
(422, 30, 'Jalapa'),
(423, 30, 'Jutiapa'),
(424, 30, 'Quetzaltenango'),
(425, 30, 'Retalhuleu'),
(426, 30, 'Sacatepequez'),
(427, 30, 'San Marcos'),
(428, 30, 'Santa Rosa'),
(429, 30, 'Solola'),
(432, 30, 'Zacapa'),
(433, 31, 'Tegucigalpa'),
(434, 31, 'San Pedro Sula'),
(435, 32, 'Miskolc'),
(436, 32, 'Debrecen'),
(437, 32, 'Szeged'),
(438, 32, 'Budapest'),
(442, 33, 'Jakarta'),
(443, 33, 'Surabaya'),
(444, 33, 'Bandung'),
(445, 33, 'Bekasi'),
(446, 33, 'Medan'),
(447, 33, 'Tangerang'),
(448, 33, 'Depok'),
(449, 33, 'Semarang'),
(450, 33, 'Palembang'),
(451, 33, 'Makassar'),
(452, 33, 'South Tangerang'),
(453, 33, 'Bogor'),
(454, 33, 'Batam'),
(455, 33, 'Pekanbaru'),
(456, 33, 'Bandar Lampung'),
(457, 33, 'Padang'),
(458, 33, 'Malang'),
(459, 33, 'Denpasar'),
(460, 33, 'Samarinda'),
(461, 33, 'Tasikmalaya'),
(462, 34, 'Dublín'),
(463, 34, 'Belfast.'),
(464, 34, 'KILLARNEY'),
(465, 34, 'WATERFORD'),
(466, 35, 'TEL AVIV'),
(467, 35, 'JERUSALÉN'),
(468, 35, 'HAIFA'),
(469, 35, 'NETANYA'),
(470, 35, 'NAZARET'),
(471, 35, 'PETAJ TIKVA'),
(472, 35, 'EILAT'),
(473, 36, 'L\'Aquila'),
(474, 36, 'Bari'),
(475, 36, 'Potenza'),
(476, 36, 'Catanzaro'),
(477, 36, 'Nápoles'),
(478, 36, 'Cagliari'),
(479, 36, 'Bolonia'),
(480, 36, 'Trieste'),
(481, 36, 'Roma'),
(482, 36, 'Génova'),
(483, 36, 'Milán'),
(484, 36, 'Ancona'),
(485, 36, 'Campobasso'),
(486, 36, 'Turín'),
(487, 36, 'Palermo'),
(488, 36, 'Florencia'),
(489, 36, 'Trento'),
(490, 36, 'Perusa'),
(491, 36, 'Aosta'),
(492, 36, 'Venecia'),
(493, 37, 'Lucea'),
(494, 37, 'Black River'),
(495, 37, 'Montego Bay'),
(496, 37, 'Falmouth'),
(497, 37, 'Savanna-la-Mar'),
(498, 37, 'May Pen'),
(499, 37, 'Mandeville'),
(500, 37, 'Saint Ann\'s Bay'),
(501, 37, 'Spanish Town'),
(502, 37, 'Port Maria'),
(503, 37, 'Kingston'),
(504, 37, 'Port Antonio'),
(505, 37, 'Half Way Tree'),
(506, 37, 'Morant Bay'),
(508, 38, 'Akita '),
(509, 38, 'Aomori '),
(510, 38, 'Chiba'),
(511, 38, 'Ehime'),
(512, 38, 'Fukui '),
(513, 38, 'Fukuoka'),
(514, 38, 'Fukushima'),
(515, 38, 'Gifu '),
(516, 38, 'Gunma '),
(517, 38, 'Hiroshima'),
(520, 38, 'Ibaraki '),
(521, 38, 'Ishikawa'),
(522, 38, 'Iwate'),
(523, 38, 'Kagawa  '),
(524, 38, 'Kagoshima  '),
(525, 38, 'Kanagawa '),
(527, 38, 'Kumamoto '),
(528, 38, 'Kioto  '),
(529, 38, 'Mie  '),
(530, 38, 'Miyagi '),
(531, 38, 'Miyazaki  '),
(532, 38, 'Nagano '),
(533, 38, 'Nagasaki  '),
(534, 38, 'Nara '),
(535, 38, 'Niigata '),
(537, 38, 'Okayama  '),
(538, 38, 'Okinawa '),
(539, 38, 'Osaka  '),
(540, 38, 'Saga  '),
(541, 38, 'Saitama '),
(542, 38, 'Shiga  '),
(543, 38, 'Shimane  '),
(544, 38, 'Shizuoka '),
(545, 38, 'Tochigi '),
(546, 38, 'Tokushima  '),
(547, 38, 'Tokio  '),
(548, 38, 'Tottori '),
(549, 38, 'Toyama '),
(550, 38, 'Wakayama  '),
(551, 38, 'Yamagata '),
(552, 38, 'Yamaguchi '),
(553, 38, 'Yamanashi '),
(554, 40, 'Distrito Federal'),
(555, 40, 'Jalisco'),
(556, 40, 'Puebla'),
(557, 40, 'Nuevo León'),
(558, 40, 'Chihuahua'),
(559, 40, 'Yucatan'),
(560, 40, 'San Luis Potosi'),
(561, 40, 'Aguascalientes'),
(562, 40, 'Sonora'),
(563, 40, 'Coahuila'),
(564, 40, 'Baja California'),
(565, 40, 'Sinaloa'),
(566, 40, 'Queretaro'),
(567, 40, 'Michoacan'),
(568, 40, 'Chiapas'),
(569, 40, 'Durango'),
(570, 40, 'México'),
(571, 40, 'Veracruz'),
(572, 40, 'Tabasco'),
(573, 40, 'Morelos'),
(574, 40, 'Nayarit'),
(575, 40, 'Tamaulipas'),
(576, 40, 'Hidalgo'),
(577, 40, 'Oaxaca'),
(578, 40, 'Campeche'),
(579, 40, 'Baja California Sur'),
(580, 40, 'Guerrero'),
(581, 40, 'Quintana Roo'),
(582, 40, 'Colima'),
(583, 40, 'Zacatecas'),
(584, 40, 'Guanajuato'),
(585, 40, 'Tlaxcala'),
(586, 41, 'Amsterdam'),
(587, 41, 'Rotterdam'),
(588, 41, 'Delft'),
(589, 41, 'Den Haag'),
(590, 41, 'Gouda'),
(591, 41, 'Utrecht'),
(592, 41, 'Maastricht'),
(593, 41, 'Eindhoven'),
(594, 41, 'Groningen'),
(595, 41, 'Deventer'),
(596, 41, 'Haarlem'),
(597, 41, 'Alkmaar'),
(598, 41, 'Hoorn'),
(599, 41, 'Enkhuizen'),
(600, 41, 'Dordrecht'),
(601, 41, 'Amersfoort'),
(602, 41, 'Marken'),
(603, 41, 'Volendam'),
(604, 41, 'Zaanse Schans'),
(605, 42, 'Northland'),
(606, 42, 'Auckland'),
(607, 38, 'Aichi '),
(608, 42, 'Bay of Plenty'),
(609, 42, 'Gisborne'),
(610, 42, 'Hawke\'s Bay'),
(611, 42, 'Taranaki'),
(612, 42, 'Manawatu-Wanganui'),
(613, 42, 'Wellington'),
(614, 42, 'Tasman'),
(615, 42, 'Nelson'),
(616, 42, 'Marlborough'),
(617, 42, 'West Coast'),
(618, 42, 'Canterbury'),
(619, 42, 'Otago'),
(620, 42, 'Southland'),
(621, 43, 'Bilwi'),
(622, 43, 'Bluefields'),
(623, 43, 'Boaco'),
(624, 43, 'Jinotepe'),
(625, 43, 'Chinandega'),
(626, 43, 'Juigalpa'),
(627, 43, 'Esteli'),
(628, 43, 'Granada'),
(629, 43, 'Jinotega'),
(630, 43, 'León'),
(631, 43, 'Somoto'),
(632, 43, 'Managua'),
(633, 43, 'Masaya'),
(634, 43, 'Matagalpa'),
(635, 43, 'Ocotal'),
(636, 43, 'San Carlos'),
(637, 43, 'Rivas'),
(638, 43, 'Managua'),
(639, 45, 'Bocas del Toro'),
(640, 45, 'Cocle'),
(641, 45, 'Colón'),
(642, 45, 'Chiriqui'),
(643, 45, 'Darien'),
(644, 45, 'Herrera'),
(645, 45, 'Los Santos'),
(646, 45, 'Panamá'),
(647, 45, 'Veraguas'),
(648, 45, 'Panama Oeste'),
(649, 46, 'Asuncion'),
(650, 46, 'Concepción'),
(651, 46, 'San Pedro'),
(652, 46, 'Cordillera'),
(653, 46, 'Guaira'),
(654, 46, 'Caaguazu'),
(655, 46, 'Caazapa'),
(656, 46, 'Itapua'),
(657, 46, 'Misiones'),
(658, 46, 'Paraguari'),
(659, 46, 'Alto Parana'),
(660, 46, 'Central'),
(662, 46, 'Amambay'),
(663, 46, 'Canindeyu'),
(664, 46, 'Presidente Hayes'),
(665, 46, 'Boqueron'),
(666, 46, 'Alto Paraguay'),
(667, 47, 'Lima'),
(668, 47, 'Arequipa'),
(669, 47, 'Trujillo'),
(670, 47, 'Chiclayo'),
(671, 47, 'Iquitos'),
(672, 47, 'Piura'),
(673, 47, 'Cuzco'),
(674, 47, 'Chimbote'),
(675, 47, 'Huancayo'),
(676, 47, 'Tacna'),
(677, 48, 'Varsovia'),
(678, 48, 'Cracovia'),
(680, 48, 'Breslavia'),
(683, 48, 'Szczecin'),
(684, 48, 'Bydgoszcz'),
(685, 48, 'Lublin'),
(686, 48, 'Katowice'),
(687, 49, 'Lisboa'),
(688, 49, 'Leiria'),
(689, 49, 'Santarem'),
(690, 49, 'Setubal'),
(691, 49, 'Beja'),
(692, 49, 'Faro'),
(693, 49, 'Evora'),
(694, 49, 'Portalegre'),
(695, 49, 'Castelo Branco'),
(696, 49, 'Guarda'),
(697, 49, 'Coimbra'),
(698, 49, 'Aveiro'),
(699, 49, 'Viseu'),
(700, 49, 'Braganza'),
(701, 49, 'Vila Real'),
(702, 49, 'Oporto'),
(703, 49, 'Braga'),
(704, 49, 'Viana do Castelo'),
(705, 51, 'Alba'),
(706, 51, 'Arad'),
(707, 51, 'Arge?'),
(708, 51, 'Bac?u'),
(709, 51, 'Bihor'),
(710, 51, 'Bistri?a-N?s?ud'),
(711, 51, 'Boto?ani'),
(712, 51, 'Bra?ov'),
(713, 51, 'Br?ila'),
(714, 51, 'Buz?u'),
(715, 51, 'Cara?-Severin'),
(716, 51, 'C?l?ra?i'),
(717, 51, 'Cluj'),
(718, 51, 'Constan?a'),
(719, 51, 'Bucure?ti'),
(720, 51, 'Covasna'),
(721, 51, 'D?mbovi?a'),
(722, 51, 'Dolj'),
(723, 51, 'Gala?i'),
(724, 51, 'Giurgiu'),
(725, 51, 'Gorj'),
(726, 51, 'Harghita'),
(727, 51, 'Hunedoara'),
(728, 51, 'Ialomi?a'),
(729, 51, 'Ia?i'),
(730, 51, 'Ilfov'),
(731, 51, 'Maramure?'),
(732, 51, 'Mehedin?i'),
(733, 51, 'Mure?'),
(734, 51, 'Neam?'),
(735, 51, 'Olt'),
(736, 51, 'Prahova'),
(737, 51, 'Satu Mare'),
(738, 51, 'S?laj'),
(739, 51, 'Sibiu'),
(740, 51, 'Suceava'),
(741, 51, 'Teleorman'),
(742, 51, 'Timi?'),
(743, 51, 'Tulcea'),
(744, 51, 'Vaslui'),
(745, 51, 'V?lcea'),
(746, 51, 'Vrancea'),
(747, 52, 'Madrid'),
(748, 52, 'Barcelona'),
(749, 52, 'Valencia'),
(750, 52, 'Sevilla'),
(751, 52, 'Zaragoza'),
(752, 52, 'Málaga'),
(753, 52, 'Murcia'),
(754, 52, 'Palma de Mallorca'),
(755, 52, 'Las Palmas de Gran Canaria'),
(756, 52, 'Bilbao'),
(757, 52, 'Alicante'),
(758, 52, 'Córdoba'),
(759, 52, 'Valladolid'),
(760, 52, 'Vigo'),
(761, 52, 'Gijon'),
(762, 52, 'Hospitalet de Llobregat'),
(763, 52, 'La Coruña'),
(764, 52, 'Vitoria'),
(765, 52, 'Granada'),
(766, 52, 'Tenerife'),
(767, 52, 'Mallorca'),
(768, 52, 'Gran Canaria'),
(769, 52, 'Lanzarote'),
(770, 52, 'Ibiza'),
(771, 52, 'Fuerteventura'),
(772, 52, 'Menorca'),
(773, 52, 'La Palma'),
(774, 52, 'La Gomera'),
(775, 52, 'El Hierro'),
(776, 52, 'Formentera'),
(777, 52, 'Arosa'),
(778, 53, 'Estocolmo'),
(779, 53, 'Gotemburgo'),
(781, 53, 'Upsala'),
(785, 53, 'Helsingborg'),
(789, 53, 'Lund'),
(792, 53, 'Eskilstuna'),
(793, 53, 'Karlstad'),
(797, 53, 'Halmstad'),
(798, 54, 'Aarau'),
(799, 54, 'Herisau?y Trogen'),
(800, 54, 'Appenzell'),
(801, 54, 'Basilea'),
(802, 54, 'Liestal'),
(803, 54, 'Berna'),
(804, 54, 'Friburgo'),
(805, 54, 'Ginebra'),
(806, 54, 'Glaris'),
(807, 54, 'Coira'),
(808, 54, 'Delemont'),
(809, 54, 'Lucerna'),
(810, 54, 'Neuch?tel'),
(811, 54, 'Stans'),
(812, 54, 'Sarnen'),
(813, 54, 'Schaffhausen'),
(814, 54, 'Schwyz'),
(815, 54, 'Soleura'),
(816, 54, 'San Galo'),
(817, 54, 'Frauenfeld'),
(818, 54, 'Bellinzona'),
(819, 54, 'Altdorf'),
(820, 54, 'Sion'),
(821, 54, 'Lausana'),
(822, 54, 'Zug'),
(823, 54, 'Zúrich'),
(824, 55, 'Couva-Tabaquite-Talparo'),
(825, 55, 'Diego Martin'),
(826, 55, 'Penal-Debe'),
(827, 55, 'Princes Town'),
(828, 55, 'Río Claro-Mayaro'),
(829, 55, 'San Juan-Laventille'),
(830, 55, 'Sangre Grande'),
(831, 55, 'Siparia'),
(832, 55, 'Tunapuna-Piarco'),
(833, 55, 'Arima'),
(834, 55, 'Chaguanas'),
(835, 55, 'Point Fortin'),
(836, 55, 'Puerto Espania'),
(837, 55, 'San Fernando'),
(838, 55, 'Tobago'),
(839, 56, 'Abu Dabi'),
(840, 56, 'Ajman'),
(841, 56, 'Dubai'),
(842, 56, 'Fuyaira '),
(843, 56, 'Ras al-Jaima'),
(844, 56, 'Sharjah '),
(845, 56, 'Umm al-Qaywayn'),
(846, 57, 'Alabama'),
(847, 57, 'Alaska'),
(848, 57, 'Arizona'),
(849, 57, 'Arkansas'),
(850, 57, 'California'),
(853, 57, 'Colorado'),
(854, 57, 'Connecticut'),
(855, 57, 'North Dakota '),
(856, 57, 'South Dakota'),
(857, 57, 'Delaware'),
(858, 57, 'Florida'),
(859, 57, 'Georgia'),
(860, 57, 'Hawai'),
(861, 57, 'Idaho'),
(862, 57, 'Illinois'),
(863, 57, 'Indiana'),
(864, 57, 'Iowa'),
(865, 57, 'Kansas'),
(866, 57, 'Kentucky'),
(867, 57, 'Luisiana'),
(868, 57, 'Maine'),
(869, 57, 'Maryland'),
(870, 57, 'Massachusetts'),
(871, 57, 'Michigan'),
(872, 57, 'Minnesota'),
(873, 57, 'Misisipi'),
(874, 57, 'Misuri'),
(875, 57, 'Montana'),
(876, 57, 'Nebraska'),
(877, 57, 'Nevada'),
(878, 57, 'New Jersey'),
(879, 57, 'New York'),
(880, 57, 'New Hampshire'),
(881, 57, 'New México'),
(882, 57, 'Ohio'),
(883, 57, 'Oklahoma'),
(884, 57, 'Oregon'),
(885, 57, 'Pensilvania'),
(886, 57, 'Rhode Island'),
(887, 57, 'Tennessee'),
(888, 57, 'Texas'),
(889, 57, 'Utah'),
(890, 57, 'Vermont'),
(891, 57, 'Virginia'),
(892, 57, 'Western Virginia'),
(893, 57, 'Washington'),
(894, 57, 'Wisconsin'),
(895, 57, 'Wyoming'),
(896, 58, 'Montevideo'),
(897, 58, 'Ciudad de la Costa'),
(898, 58, 'Salto'),
(899, 58, 'Paysandu'),
(900, 58, 'Maldonado'),
(901, 58, 'Rivera'),
(902, 58, 'Las Piedras'),
(903, 58, 'Tacuarembo'),
(904, 58, 'Melo'),
(905, 58, 'Artigas'),
(906, 58, 'Mercedes'),
(907, 58, 'Minas'),
(908, 58, 'San José de Mayo'),
(909, 58, 'Durazno'),
(910, 58, 'Florida'),
(911, 58, 'Treinta y Tres'),
(912, 58, 'Barros Blancos'),
(913, 58, 'Ciudad del Plata'),
(914, 58, 'San Carlos'),
(915, 58, 'Colonia del Sacramento'),
(916, 58, 'Pando'),
(917, 58, 'Rocha'),
(918, 58, 'Fray Bentos'),
(919, 58, 'Trinidad'),
(920, 58, 'La Paz'),
(921, 58, 'Canelones'),
(922, 58, 'Dolores'),
(927, 58, 'Progreso'),
(928, 58, 'Río Branco'),
(929, 58, 'Paso de los Toros'),
(930, 58, 'Juan Lacaze'),
(931, 58, 'Punta del Este'),
(932, 58, 'Nueva Helvecia'),
(933, 58, 'Libertad'),
(934, 58, 'Rosario'),
(935, 58, 'Nueva Palmira'),
(936, 59, 'Amazonas'),
(937, 59, 'Anzoategui'),
(938, 59, 'Apure'),
(939, 59, 'Aragua'),
(940, 59, 'Barinas'),
(941, 59, 'Bolivar'),
(942, 59, 'Carabobo'),
(943, 59, 'Cojedes'),
(944, 59, 'Delta Amacuro'),
(945, 59, 'Distrito Capital'),
(946, 59, 'Falcón'),
(947, 59, 'Guarico'),
(948, 59, 'Lara'),
(949, 59, 'Mérida'),
(950, 59, 'Miranda'),
(951, 59, 'Monagas'),
(952, 59, 'Nueva Esparta'),
(953, 59, 'Portuguesa'),
(954, 59, 'Sucre'),
(955, 59, 'Táchira'),
(956, 59, 'Trujillo'),
(957, 59, 'Vargas'),
(958, 59, 'Yaracuy'),
(959, 59, 'Zulia'),
(960, 60, 'Other City'),
(961, 1, 'Córdoba'),
(1000, 21, 'Ambato'),
(1001, 21, 'Zamora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `licencia` varchar(255) NOT NULL DEFAULT 'FV' COMMENT 'Numero de Licencia',
  `empresa` varchar(255) DEFAULT 'DEMO' COMMENT 'Nombre empresa',
  `fecultsinc` datetime DEFAULT NULL COMMENT 'Fecha de ultima sincronizacion',
  `initarea` datetime DEFAULT NULL COMMENT 'Fecha y Hora de inicio de sincronizacion',
  `fintarea` datetime DEFAULT NULL COMMENT 'Fecha y Hora de finalizacion de sincronizacion',
  `fecultclientes` datetime NOT NULL DEFAULT '1900-01-01 00:00:00',
  `logerr` text COMMENT 'Registro de errores de sincronizacion',
  `sincro` int(1) DEFAULT '1' COMMENT 'Semaforo o switch para indicar sincronizacion manual',
  `clave` varchar(255) DEFAULT 'fe01ce2a7fbac8fafaed7c982a04e229' COMMENT 'Clave acceso de aplicacion',
  `dominio` varchar(128) DEFAULT 'demo' COMMENT 'Nombre subdominio',
  `srvprofit` varchar(128) DEFAULT 'SERVIDOR-DEMO' COMMENT 'Nombre de servidor \\ instancia sql',
  `bdprofit` varchar(128) DEFAULT 'DEMO_AM' COMMENT 'Codigo Base de Datos profit',
  `userbd` varchar(128) DEFAULT 'profit' COMMENT 'Usuario base de datos',
  `passbd` varchar(128) DEFAULT 'profit' COMMENT 'Contraseña base de datos',
  `fecinstal` datetime DEFAULT NULL COMMENT 'Fecha de instalacion',
  `codprovedor` varchar(60) DEFAULT '0000' COMMENT 'Codigo proveedor principal',
  `codtipbanco` varchar(60) DEFAULT '0000' COMMENT 'Codigo para proveedor tipo bancos',
  `costo` varchar(60) DEFAULT 'cos_pro_un' COMMENT 'Costo por defecto',
  `precio` varchar(60) DEFAULT 'prec_vta1' COMMENT 'Precio por defecto',
  `pmaxgan` decimal(5,2) DEFAULT '30.00' COMMENT 'Porcentaje max ganancia',
  `pestcos` decimal(5,2) DEFAULT '12.50' COMMENT 'Porcentaje estructura de costos',
  `montalrtodp` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de orden de pago',
  `montalrtodc` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta orden de compra',
  `montalrcom` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de compras',
  `montalrfact` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de factura',
  `montalrcotz` decimal(18,4) DEFAULT '10000.0000' COMMENT 'Monto para alerta de cotizacion',
  `clave2` varchar(255) DEFAULT 'fe01ce2a7fbac8fafaed7c982a04e229' COMMENT 'Clave acceso panel admin',
  `panelsaint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`licencia`, `empresa`, `fecultsinc`, `initarea`, `fintarea`, `fecultclientes`, `logerr`, `sincro`, `clave`, `dominio`, `srvprofit`, `bdprofit`, `userbd`, `passbd`, `fecinstal`, `codprovedor`, `codtipbanco`, `costo`, `precio`, `pmaxgan`, `pestcos`, `montalrtodp`, `montalrtodc`, `montalrcom`, `montalrfact`, `montalrcotz`, `clave2`, `panelsaint`) VALUES
('COPS2', 'MegaWatt C.A.', '2015-07-09 15:31:08', '2017-08-22 15:54:26', '2017-08-22 16:09:55', '2017-08-22 16:09:49', '', 0, '', 'COPSmovil.com', 'DESKTOP-MFOPP38\\SERVIDOR', 'MWM_A', 'profit', 'profit', '2015-06-15 10:30:55', '', '3', 'ult_cos_un', 'prec_vta1', '0.00', '0.00', '0.0000', '0.0000', '0.0000', '0.0000', '0.0000', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cops`
--

CREATE TABLE `cops` (
  `id_cops` int(11) NOT NULL,
  `status` char(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cops`
--

INSERT INTO `cops` (`id_cops`, `status`) VALUES
(1, 'OFF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento_es` varchar(64) NOT NULL,
  `departamento_in` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento_es`, `departamento_in`) VALUES
(2, 'Oficina en Doral', 'Office in Doral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_categorias`
--

CREATE TABLE `departamento_categorias` (
  `id_departamento_categorias` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_categorias_general` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento_categorias`
--

INSERT INTO `departamento_categorias` (`id_departamento_categorias`, `id_departamento`, `id_categorias_general`) VALUES
(9, 2, 14),
(10, 2, 15),
(11, 2, 13),
(12, 2, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_enviados`
--

CREATE TABLE `documentos_enviados` (
  `id_documentos_enviados` int(11) NOT NULL,
  `tipo_mensaje` varchar(15) NOT NULL,
  `fecha_envio` date NOT NULL,
  `mensaje_adjunto` text NOT NULL,
  `documento` varchar(24) NOT NULL,
  `id_analista` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos_enviados`
--

INSERT INTO `documentos_enviados` (`id_documentos_enviados`, `tipo_mensaje`, `fecha_envio`, `mensaje_adjunto`, `documento`, `id_analista`, `id_curso`) VALUES
(23, '1', '2018-08-30', 'test', '23.jpg', 6, 0),
(24, '3', '2018-08-31', 'Test', '24.jpg', 6, 4),
(25, '2', '2018-09-06', 'ASG', '25.jpg', 6, 0),
(26, '3', '2018-09-06', ';;;;;;;;;;;;', '26.jpg', 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_enviados_cesta`
--

CREATE TABLE `documentos_enviados_cesta` (
  `id_documentos_enviados_cesta` int(11) NOT NULL,
  `id_documentos_enviados` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_analista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos_enviados_cesta`
--

INSERT INTO `documentos_enviados_cesta` (`id_documentos_enviados_cesta`, `id_documentos_enviados`, `id_cliente`, `id_analista`) VALUES
(39, 23, 3, 6),
(40, 23, 8, 6),
(41, 24, 3, 6),
(42, 24, 8, 6),
(43, 25, 3, 6),
(44, 25, 8, 6),
(45, 25, 1, 6),
(46, 26, 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id_favorito` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id_favorito`, `id_producto`, `id_vendedor`, `id_comprador`) VALUES
(1, 17, 15, 15),
(2, 17, 15, 16),
(4, 22, 28, 28),
(5, 24, 29, 0),
(6, 41, 41, 41),
(7, 30, 1, 0),
(8, 29, 1, 0),
(9, 27, 1, 0),
(10, 30, 1, 0),
(11, 29, 1, 0),
(12, 27, 1, 0),
(13, 48, 1, 0),
(14, 47, 1, 0),
(15, 46, 1, 0),
(16, 45, 1, 0),
(17, 44, 1, 0),
(18, 43, 1, 0),
(19, 42, 1, 0),
(20, 41, 1, 0),
(21, 31, 1, 0),
(22, 32, 1, 0),
(23, 33, 1, 0),
(24, 34, 1, 0),
(25, 37, 1, 0),
(26, 35, 1, 0),
(27, 38, 1, 0),
(28, 36, 1, 0),
(29, 40, 1, 0),
(30, 39, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `apertura` time NOT NULL,
  `cierre` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `apertura`, `cierre`) VALUES
(1, '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_deseos`
--

CREATE TABLE `lista_deseos` (
  `id_lista_deseos` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista_deseos`
--

INSERT INTO `lista_deseos` (`id_lista_deseos`, `id_producto`, `id_usuario`) VALUES
(6, 30, 13),
(7, 33, 18),
(8, 47, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_enviados`
--

CREATE TABLE `pagos_enviados` (
  `id_pagos_enviados` int(11) NOT NULL,
  `tipo_mensaje` int(11) NOT NULL,
  `fecha_envio` date NOT NULL,
  `concepto` varchar(240) NOT NULL,
  `monto` decimal(24,2) NOT NULL,
  `id_analista` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos_enviados`
--

INSERT INTO `pagos_enviados` (`id_pagos_enviados`, `tipo_mensaje`, `fecha_envio`, `concepto`, `monto`, `id_analista`, `id_curso`, `codigo`) VALUES
(13, 1, '2018-08-31', 'Almuerzo a la Habitacion', '12000.00', 6, 0, 0),
(14, 1, '2018-09-06', 'yoga', '60000.00', 6, 0, 0),
(15, 3, '2018-09-06', 'yoga', '60000.00', 6, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_enviados_cestas`
--

CREATE TABLE `pagos_enviados_cestas` (
  `id_pagos_enviados_cestas` int(11) NOT NULL,
  `id_pagos_enviados` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `status` varchar(24) NOT NULL,
  `fecha_pago` date NOT NULL,
  `pago_adjunto` varchar(24) NOT NULL,
  `negado_motivo` varchar(240) NOT NULL,
  `id_analista` int(11) NOT NULL,
  `codigo` varchar(42) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos_enviados_cestas`
--

INSERT INTO `pagos_enviados_cestas` (`id_pagos_enviados_cestas`, `id_pagos_enviados`, `id_cliente`, `status`, `fecha_pago`, `pago_adjunto`, `negado_motivo`, `id_analista`, `codigo`) VALUES
(24, 13, 3, 'Aprobado', '0000-00-00', '24.jpg', 'El adjunto no es correcto', 6, '18083100024'),
(25, 13, 8, 'Pendiente', '0000-00-00', '', '', 6, '18083100025'),
(26, 14, 1, 'Pendiente', '0000-00-00', '', '', 6, '18090600026'),
(27, 14, 3, 'Pendiente', '0000-00-00', '', '', 6, '18090600027'),
(28, 14, 8, 'Pendiente', '0000-00-00', '', '', 6, '18090600028'),
(29, 15, 1, 'Pendiente', '0000-00-00', '', '', 6, '18090600029');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Paisid` int(11) NOT NULL,
  `Pais_nombre` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Paisid`, `Pais_nombre`) VALUES
(1, 'Argentina'),
(2, 'Aruba'),
(3, 'Australia'),
(4, 'Austria'),
(5, 'Bahamas'),
(6, 'Bélgica'),
(7, 'Bermudas'),
(8, 'Bolivia'),
(9, 'Brasil'),
(10, 'Bulgaria'),
(11, 'Canada'),
(12, 'Chile'),
(13, 'Colombia'),
(14, 'Costa Rica'),
(16, 'Cuba'),
(17, 'República Checa'),
(18, 'Dinamarca'),
(20, 'República Dominicana '),
(21, 'Ecuador'),
(22, 'Egipto'),
(23, 'El Salvador'),
(24, 'Finlandia'),
(25, 'Francia'),
(26, 'Alemania'),
(27, 'Inglaterra'),
(28, 'Grecia'),
(29, 'Granada'),
(30, 'Guatemala'),
(31, 'Honduras'),
(32, 'Hungria'),
(33, 'Indonesia'),
(34, 'Irlanda'),
(35, 'Israel'),
(36, 'Italia'),
(37, 'Jamaica'),
(38, 'Japón'),
(40, 'México'),
(41, 'Holanda'),
(42, 'Nueva Zelanda'),
(43, 'Nicaragua'),
(45, 'Panamá'),
(46, 'Paraguay'),
(47, 'Perú'),
(48, 'Polonia'),
(49, 'Portugal'),
(51, 'Rumania'),
(52, 'España'),
(53, 'Suecia'),
(54, 'Suiza'),
(55, 'Trinidad y Tobago'),
(56, 'Emiratos Arabes Unidos'),
(57, 'Estados Unidos'),
(58, 'Uruguay'),
(59, 'Venezuela'),
(60, 'Other Contry');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE `parametros` (
  `rsocial` varchar(255) DEFAULT NULL,
  `rif` varchar(20) NOT NULL DEFAULT '',
  `registro` int(2) DEFAULT NULL,
  `login` int(2) DEFAULT NULL,
  `email_pedidos` varchar(255) DEFAULT NULL,
  `email_cobros` varchar(255) DEFAULT NULL,
  `email_contacto` varchar(255) DEFAULT NULL,
  `anonimos` int(2) DEFAULT NULL,
  `precios` int(8) DEFAULT NULL,
  `stock` int(8) DEFAULT NULL,
  `destacado` int(8) DEFAULT NULL,
  `nrodest` int(8) DEFAULT NULL,
  `imagenes` int(8) DEFAULT NULL,
  `imgcar` int(8) DEFAULT NULL,
  `calciva` int(8) DEFAULT NULL,
  `piva` int(8) DEFAULT NULL,
  `linvacias` int(8) DEFAULT NULL,
  `catpro` int(8) DEFAULT NULL,
  `direccion` text,
  `telefono` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `propag` int(8) DEFAULT NULL,
  `pie` varchar(255) DEFAULT NULL,
  `fcorrel` varchar(100) DEFAULT NULL,
  `mapa` int(8) DEFAULT NULL,
  `coor` text,
  `c1` text,
  `linpro` int(8) DEFAULT NULL,
  `colpro` int(4) DEFAULT NULL,
  `etsublineas` varchar(255) DEFAULT NULL,
  `etcatego` varchar(255) DEFAULT NULL,
  `etcolores` varchar(255) DEFAULT NULL,
  `publicidad` int(4) DEFAULT NULL,
  `paginainicial` int(4) DEFAULT NULL,
  `c2` text,
  `pci` text,
  `lnkpci` text,
  `pcd` text,
  `lnkpcd` text,
  `pcc` text,
  `lnkpcc` text,
  `logo` varchar(255) DEFAULT NULL,
  `stocket1` varchar(255) DEFAULT NULL,
  `stocket2` varchar(255) DEFAULT NULL,
  `stocket3` varchar(255) DEFAULT NULL,
  `stkcrt` int(4) DEFAULT NULL,
  `vista` int(4) DEFAULT NULL,
  `inspro` int(11) DEFAULT NULL,
  `cligen` varchar(10) DEFAULT NULL,
  `segmento` varchar(60) DEFAULT NULL,
  `tipocli` varchar(60) DEFAULT NULL,
  `codcli` varchar(100) DEFAULT NULL,
  `modpag1` int(4) DEFAULT NULL,
  `ncuenta` varchar(60) DEFAULT NULL,
  `titular` varchar(255) DEFAULT NULL,
  `modpag2` int(4) DEFAULT NULL,
  `precio` int(4) DEFAULT NULL,
  `vendedor` varchar(10) DEFAULT NULL,
  `cta_ingr` varchar(10) DEFAULT NULL,
  `env_ped` int(1) DEFAULT '0' COMMENT '0=pedidos, 1=cotizacion, 2=nota entrega',
  `ins_ped` varchar(10) DEFAULT NULL,
  `co_sucu` varchar(6) DEFAULT NULL,
  `co_alma` varchar(6) DEFAULT NULL,
  `co_cond` varchar(6) DEFAULT NULL,
  `co_tran` varchar(6) DEFAULT NULL,
  `ndvenc` int(2) DEFAULT NULL,
  `mtvenc` int(10) DEFAULT NULL,
  `cliven` int(1) NOT NULL DEFAULT '0',
  `anulado` int(1) NOT NULL DEFAULT '1',
  `agotados` int(2) NOT NULL DEFAULT '1',
  `moneda` varchar(6) NOT NULL DEFAULT 'BSF',
  `cant_item_x_pedido` int(3) NOT NULL DEFAULT '21' COMMENT 'Cantidad de Ítem en un pedido',
  `inven_negativo` int(1) NOT NULL DEFAULT '0',
  `desc_artc` int(1) NOT NULL DEFAULT '0',
  `desc_pedido` int(1) NOT NULL DEFAULT '0',
  `mod_notifica` int(2) NOT NULL DEFAULT '0' COMMENT 'Modulo de Notificacion de FV Movil... o= apagado, 1 = encendido',
  `opcion_nvcliente` int(1) NOT NULL DEFAULT '0' COMMENT 'Poder crear Nuevos Clientes',
  `opcion_cliente` int(1) NOT NULL DEFAULT '0' COMMENT 'Configuracion de Clientes de FVMovil',
  `opcion_vend_pedidos` int(1) NOT NULL DEFAULT '0' COMMENT 'Restricción de Pedidos de Vendedores de FVMovil',
  `opcion_condicion` int(1) NOT NULL DEFAULT '0',
  `opcion_galeria_vendedor` int(1) NOT NULL DEFAULT '0' COMMENT 'Opcion para que el vendedor cargue imagenes, 0 = no carga, 1 = carga',
  `coment_pedido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`rsocial`, `rif`, `registro`, `login`, `email_pedidos`, `email_cobros`, `email_contacto`, `anonimos`, `precios`, `stock`, `destacado`, `nrodest`, `imagenes`, `imgcar`, `calciva`, `piva`, `linvacias`, `catpro`, `direccion`, `telefono`, `titulo`, `propag`, `pie`, `fcorrel`, `mapa`, `coor`, `c1`, `linpro`, `colpro`, `etsublineas`, `etcatego`, `etcolores`, `publicidad`, `paginainicial`, `c2`, `pci`, `lnkpci`, `pcd`, `lnkpcd`, `pcc`, `lnkpcc`, `logo`, `stocket1`, `stocket2`, `stocket3`, `stkcrt`, `vista`, `inspro`, `cligen`, `segmento`, `tipocli`, `codcli`, `modpag1`, `ncuenta`, `titular`, `modpag2`, `precio`, `vendedor`, `cta_ingr`, `env_ped`, `ins_ped`, `co_sucu`, `co_alma`, `co_cond`, `co_tran`, `ndvenc`, `mtvenc`, `cliven`, `anulado`, `agotados`, `moneda`, `cant_item_x_pedido`, `inven_negativo`, `desc_artc`, `desc_pedido`, `mod_notifica`, `opcion_nvcliente`, `opcion_cliente`, `opcion_vend_pedidos`, `opcion_condicion`, `opcion_galeria_vendedor`, `coment_pedido`) VALUES
('Empresa, C.A.', 'J-1234567-8', 1, 1, 'ventas@empresa.com', 'ventas@empresa.com', 'ventas@correo.com', 0, 1, 1, 1, 8, 3, 0, 1, 12, 0, 1, 'Caracas - Venezuela', '(0212) 123.45.67', 'Empresa', 12, 'Cops cops cops', 'PC0000', 1, 'http://maps.google.com/maps?q=iseweb&hl=es&ll=10.48701,-66.820629&spn=0.008703,0.013937&sll=10.48701,-66.820629&sspn=0.008703,0.013937&vpsrc=0&hq=iseweb&t=m&z=17&iwloc=A', '<p style=\"text-align: justify;\"><strong>Condiciones de Servicio</strong></p>\r\n<p style=\"text-align: justify;\">Nulla fermentum vestibulum turpis, non elementum nibh volutpat a. Proin lacus velit, facilisis et placerat sit amet, hendrerit tempor velit. Vivamus non lectus nec magna ornare tempor ut sit amet sapien. Pellentesque mollis dapibus luctus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In hac habitasse platea dictumst. Etiam at tellus mauris, vel venenatis est. Vivamus eu convallis dui.</p>\r\n<p style=\"text-align: justify;\"><strong>Despachos y M&eacute;todos de Env&iacute;os</strong></p>\r\n<p style=\"text-align: justify;\">Morbi quis euismod nunc. Pellentesque purus sapien, porttitor a consectetur et, posuere eu sapien. Aenean porta dui at turpis semper vulputate. Etiam convallis tempor mi vitae mollis. Donec consequat molestie auctor. Suspendisse sed mauris in enim aliquam egestas. Duis id velit sem. Aenean vehicula consectetur gravida. Curabitur orci velit, fringilla non congue in, egestas varius lorem.</p>\r\n<p style=\"text-align: justify;\"><strong>Formas de Pago</strong></p>\r\n<p style=\"text-align: justify;\">Aliquam et sem urna. Aliquam luctus nulla in risus egestas vitae aliquet velit posuere. Nunc convallis vestibulum elit, in malesuada ligula commodo non. Phasellus congue erat ac justo dapibus dignissim. Phasellus consectetur ultricies erat eget molestie. Vivamus volutpat facilisis risus, scelerisque cursus massa tempor quis. Mauris sollicitudin malesuada sem quis bibendum. Nulla facilisi. Etiam pretium varius tortor ut porta.</p>', 1, 1, 'Sub LÃ­neas', 'CategorÃ­as', 'Marcas', 0, 3, '<p style=\"text-align: left;\"><span style=\"color: #333399; font-family: verdana, geneva; font-size: x-large;\">Bienvenido a mi Catalogo</span></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi urna dui, consectetur nec gravida posuere, consectetur id turpis. Sed cursus egestas risus sed tempus. Sed mattis augue ut nisl luctus eget imperdiet tortor ultricies. Curabitur et enim mi. Proin dignissim pretium egestas. Cras elementum metus eu metus viverra feugiat. Suspendisse sit amet nunc felis, vitae dignissim massa. Donec vitae ultrices augue. Phasellus ut nisi nulla, dignissim luctus libero. In ornare pharetra diam vel commodo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget egestas metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sagittis tempor justo, at fringilla sapien viverra id. Phasellus ligula justo, dignissim at mollis ut, sodales vulputate arcu.</span></p>', 'bnr1.gif', 'http://www.iseweb.com/site/modules/content/index.php?id=11', '', '', 'bnr2.jpg', 'http://www.iseweb.com/site/modules/content/index.php?id=5', 'imgs/logo.jpg', 'Agotado', 'Quedan pocos', 'Disponible', 5, 1, 1, 'GEN-001', '0015  ', '0001  ', 'WEB-000', 1, 'BVC-01', 'Empresa C.A.', 0, 0, '0001  ', '0006  ', 0, '2', '01    ', 'CCS   ', '01    ', '01    ', 30, 50000, 0, 0, 0, 'BSF   ', 21, 1, 0, 0, 0, 1, 1, 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `envio_nombre` varchar(120) DEFAULT NULL,
  `envio_direccion_1` varchar(120) DEFAULT NULL,
  `envio_direccion_2` varchar(120) DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `envio_estado` varchar(120) DEFAULT NULL,
  `envio_zip` varchar(12) DEFAULT NULL,
  `envio_pais` varchar(120) DEFAULT NULL,
  `envio_telefono` varchar(120) DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `pago_impuestos` decimal(24,2) DEFAULT NULL,
  `pago_descuento` decimal(24,2) DEFAULT NULL,
  `pago_total` decimal(24,2) DEFAULT NULL,
  `comentarios` varchar(120) DEFAULT NULL,
  `id_status_profit` int(1) NOT NULL DEFAULT '0' COMMENT '0=cargado. 1= Aprobado para descarga en profit, 2=Procesado, 3=Facturado',
  `status` varchar(16) DEFAULT NULL,
  `enviando_tracking` varchar(120) DEFAULT NULL,
  `enviando_compania` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_cesta`
--

CREATE TABLE `pedido_cesta` (
  `id_pedido_cesta` int(11) NOT NULL,
  `id_pedido` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `nombre_producto` varchar(160) DEFAULT NULL,
  `nombre_producto_ingles` varchar(320) DEFAULT NULL,
  `precio_producto` decimal(24,2) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id_precios` int(11) NOT NULL,
  `archivo` varchar(24) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id_precios`, `archivo`) VALUES
(1, '1.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_preguntas` int(11) NOT NULL,
  `pregunta` varchar(256) DEFAULT NULL,
  `respuesta` varchar(256) DEFAULT NULL,
  `id_comprador` int(11) DEFAULT NULL,
  `id_vendedor` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_preguntas`, `pregunta`, `respuesta`, `id_comprador`, `id_vendedor`, `id_producto`) VALUES
(5, 'Prueba 1', 'Pregunta de Prueba', 1, 6, 5),
(6, 'Esta es una pregunta de Prueba', NULL, 3, 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `id_profit` varchar(60) NOT NULL DEFAULT '0',
  `nombre_0` varchar(80) DEFAULT NULL COMMENT 'in',
  `nombre_1` varchar(120) DEFAULT NULL COMMENT 'es',
  `precio_producto` decimal(24,2) DEFAULT NULL,
  `precio_cops` decimal(24,2) NOT NULL,
  `impuesto_producto` decimal(24,2) DEFAULT NULL,
  `descuento_producto` decimal(24,2) DEFAULT NULL,
  `descripcion_producto_0` text COMMENT 'in',
  `descripcion_producto_1` text COMMENT 'es',
  `id_usuario` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `ciudad_id` varchar(250) DEFAULT NULL,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `foto_3` varchar(255) DEFAULT NULL,
  `foto_4` varchar(255) DEFAULT NULL,
  `condiciones_contratacion` varchar(560) DEFAULT NULL,
  `id_categoria_producto` int(11) NOT NULL,
  `id_categorias_especificas` int(11) NOT NULL,
  `imagen_descripcion_producto` varchar(255) DEFAULT NULL,
  `tipo_producto` char(2) DEFAULT NULL,
  `cantidad_disponible` int(11) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL COMMENT '0 es activo, 1 es inactiivo',
  `date_now` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cita_duracion` int(11) NOT NULL COMMENT '0 hora, 1, 30 min',
  `cita_representante` varchar(120) NOT NULL,
  `cita_fecha_inicio` date DEFAULT NULL,
  `cita_fecha_cierre` date DEFAULT NULL,
  `cita_simultaneas` int(11) DEFAULT NULL,
  `Lunes` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo',
  `Martes` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo',
  `Miercoles` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo',
  `Jueves` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo',
  `Viernes` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo',
  `Sabado` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo',
  `Domingo` int(11) DEFAULT NULL COMMENT '1 Activo, 0 Inactivo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `id_profit`, `nombre_0`, `nombre_1`, `precio_producto`, `precio_cops`, `impuesto_producto`, `descuento_producto`, `descripcion_producto_0`, `descripcion_producto_1`, `id_usuario`, `pais_id`, `ciudad_id`, `foto_1`, `foto_2`, `foto_3`, `foto_4`, `condiciones_contratacion`, `id_categoria_producto`, `id_categorias_especificas`, `imagen_descripcion_producto`, `tipo_producto`, `cantidad_disponible`, `activo`, `date_now`, `cita_duracion`, `cita_representante`, `cita_fecha_inicio`, `cita_fecha_cierre`, `cita_simultaneas`, `Lunes`, `Martes`, `Miercoles`, `Jueves`, `Viernes`, `Sabado`, `Domingo`) VALUES
(5, '0', 'Curso de Trading & Mineria de Criptomonedas', 'Curso de Trading & Mineria de Criptomonedas', '0.00', '0.00', '0.00', '0.00', 'Descripcion de Prueba', 'Descripcion de Prueba', 1, 1, '', 'articulo.jpg', 'articulo.jpg', 'articulo.jpg', 'articulo.jpg', NULL, 30, 1, NULL, NULL, NULL, NULL, '2018-09-02 14:08:58', 1, '6', NULL, NULL, 3, 0, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_cesta_especificos`
--

CREATE TABLE `productos_cesta_especificos` (
  `id_productos_cesta_especificos` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `producto_cesta` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos_cesta_especificos`
--

INSERT INTO `productos_cesta_especificos` (`id_productos_cesta_especificos`, `id_producto`, `producto_cesta`) VALUES
(5, 4, 'Especifico 1'),
(6, 4, 'Especifico 2'),
(7, 4, 'Especifico 3'),
(8, 5, 'Frenos'),
(9, 5, 'Aire Acondicionado'),
(10, 5, 'Motor'),
(11, 6, 'Yoga Terapeutico'),
(12, 8, 'lo que sea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_cita_cesta`
--

CREATE TABLE `producto_cita_cesta` (
  `id_producto_cita_cesta` int(11) NOT NULL,
  `id_productos` int(11) DEFAULT NULL,
  `dia` char(2) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `inicio` varchar(8) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_cita_cesta`
--

INSERT INTO `producto_cita_cesta` (`id_producto_cita_cesta`, `id_productos`, `dia`, `duracion`, `inicio`) VALUES
(254, 5, '7', 1, '11:30'),
(253, 5, '6', 1, '11:30'),
(252, 5, '5', 1, '11:30'),
(251, 5, '7', 1, '11:00'),
(250, 5, '6', 1, '11:00'),
(249, 5, '5', 1, '11:00'),
(248, 5, '7', 1, '10:30'),
(247, 5, '6', 1, '10:30'),
(246, 5, '5', 1, '10:30'),
(245, 5, '7', 1, '10:00'),
(244, 5, '6', 1, '10:00'),
(243, 5, '5', 1, '10:00'),
(242, 5, '7', 1, '09:30'),
(241, 5, '6', 1, '09:30'),
(240, 5, '5', 1, '09:30'),
(239, 5, '7', 1, '09:00'),
(238, 5, '6', 1, '09:00'),
(237, 5, '5', 1, '09:00'),
(236, 5, '7', 1, '08:30'),
(235, 5, '6', 1, '08:30'),
(234, 5, '5', 1, '08:30'),
(233, 5, '7', 1, '08:00'),
(232, 5, '6', 1, '08:00'),
(231, 5, '5', 1, '08:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promociones` int(11) NOT NULL,
  `tipo_de_promo` varchar(60) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `url` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_promociones`, `tipo_de_promo`, `img`, `url`) VALUES
(1, '1', '1.jpg', ''),
(2, '2', '2.jpg', ''),
(3, '3', '3.jpg', ''),
(4, '4', '4.jpg', ''),
(5, '5', '5.jpg', NULL),
(6, '6', '6.jpg', NULL),
(7, '7', '7.jpg', NULL),
(8, '8', '8.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_cita`
--

CREATE TABLE `tatu_cita` (
  `id_tatu_cita` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_analista` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `tiempo` varchar(12) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(12) NOT NULL,
  `dia_semana` varchar(12) NOT NULL,
  `usuario_nombre` varchar(84) NOT NULL,
  `telefono_cliente` varchar(24) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tatu_cita`
--

INSERT INTO `tatu_cita` (`id_tatu_cita`, `id_usuario`, `id_analista`, `id_producto`, `tiempo`, `fecha`, `hora`, `dia_semana`, `usuario_nombre`, `telefono_cliente`) VALUES
(191, 1, 6, 5, '', '2018-09-09', '09:00', 'Sunday', 'Administrador', '+58 212 985 83 05'),
(188, 1, 6, 5, '', '2018-09-07', '08:00', 'Friday', 'Administrador', '9858305'),
(192, 1, 6, 5, '', '2018-09-09', '10:30', 'Sunday', 'Administrador', '9858305');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_cita_cesta`
--

CREATE TABLE `tatu_cita_cesta` (
  `id_tatu_cita_cesta` int(11) NOT NULL,
  `id_tatu_cita` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ocupada` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_cita_servicio_especifico`
--

CREATE TABLE `tatu_cita_servicio_especifico` (
  `id_tatu_cita_servicio_especifico` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_servicio_especifico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tatu_cita_servicio_especifico`
--

INSERT INTO `tatu_cita_servicio_especifico` (`id_tatu_cita_servicio_especifico`, `id_cita`, `id_servicio`, `id_servicio_especifico`) VALUES
(5, 181, 4, 6),
(6, 182, 4, 5),
(7, 184, 4, 6),
(8, 185, 4, 6),
(9, 186, 4, 6),
(10, 187, 4, 6),
(11, 187, 4, 7),
(12, 188, 5, 9),
(13, 189, 5, 8),
(14, 190, 5, 9),
(15, 191, 5, 9),
(16, 191, 5, 10),
(17, 192, 5, 9),
(18, 193, 5, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_eventos`
--

CREATE TABLE `tatu_eventos` (
  `id_tatu_eventos` int(11) NOT NULL,
  `id_tatu_eventos_categoria` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(24) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `flyer` varchar(42) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tatu_eventos`
--

INSERT INTO `tatu_eventos` (`id_tatu_eventos`, `id_tatu_eventos_categoria`, `fecha`, `hora`, `titulo`, `descripcion`, `flyer`) VALUES
(11, 3, '2018-01-18', '12:00', 'Beauty Care', 'Largest selection of Professional Hair and Beauty Products. ', '11.jpg'),
(12, 3, '2018-01-18', '12:00', 'Health System', 'Looking for health events events in Miami? Whether you\'re a local, new in town, or just passing through, you\'ll be sure to find something on Eventbrite that piques your interest.', '12.jpg'),
(13, 4, '2018-01-01', '12:00', 'Music lessons', 'The most recommended Music School in south florida, for children & adults\r\nPercussion Lessons · Trumpet Lessons · Day Camp · Voice Lessons · Music Camp · Latin Percussion', '13.jpg'),
(14, 4, '2019-01-19', '12:00', 'Spinning Lessons', 'We love to ride our bikes outside, but sometimes a spin class is a quick way to get a super intense fitness fix that could see you reaping serious benefits in power and speed. ', '14.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_eventos_categorias`
--

CREATE TABLE `tatu_eventos_categorias` (
  `id_tatu_eventos_categorias` int(11) NOT NULL,
  `categorias` varchar(56) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tatu_eventos_categorias`
--

INSERT INTO `tatu_eventos_categorias` (`id_tatu_eventos_categorias`, `categorias`) VALUES
(3, 'Exposiciones'),
(4, 'Lanzamientos'),
(7, 'Promociones ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_galeria`
--

CREATE TABLE `tatu_galeria` (
  `id_tatu_galeria` int(11) NOT NULL,
  `id_tatu_galeria_categoria` int(11) NOT NULL,
  `foto` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tatu_galeria`
--

INSERT INTO `tatu_galeria` (`id_tatu_galeria`, `id_tatu_galeria_categoria`, `foto`) VALUES
(28, 22, '28.jpg'),
(20, 22, '20.jpg'),
(19, 22, '19.jpg'),
(27, 22, '27.jpg'),
(26, 22, '26.jpg'),
(22, 22, '22.jpg'),
(23, 22, '23.jpg'),
(24, 22, '24.jpg'),
(29, 22, '29.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatu_galeria_categoria`
--

CREATE TABLE `tatu_galeria_categoria` (
  `id_tatu_galeria_categoria` int(11) NOT NULL,
  `tatu_galeria_categoria` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tatu_galeria_categoria`
--

INSERT INTO `tatu_galeria_categoria` (`id_tatu_galeria_categoria`, `tatu_galeria_categoria`) VALUES
(7, 'Nueva escuela'),
(22, 'REALISMO'),
(10, 'Puntillismo'),
(15, 'Ilustración'),
(23, 'WATER COLOR'),
(24, 'calculo'),
(20, 'Letras'),
(21, 'Japonés');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `tipousuarioid` int(11) NOT NULL,
  `tipousuario_nombre` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`tipousuarioid`, `tipousuario_nombre`) VALUES
(1, 'administrador'),
(2, 'editor'),
(3, 'cliente'),
(4, 'Representante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_publicidad`
--

CREATE TABLE `tipo_publicidad` (
  `id_tipo_publicidad` int(11) NOT NULL,
  `tipo_publicidad` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_publicidad`
--

INSERT INTO `tipo_publicidad` (`id_tipo_publicidad`, `tipo_publicidad`) VALUES
(1, 'slider_principal_1'),
(2, 'slider_principal_2'),
(3, 'slider_principal_3'),
(4, 'slider_principal_4'),
(5, 'banner_inferior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_facebook` varchar(42) NOT NULL,
  `usuario` varchar(120) NOT NULL,
  `usuario_nombre` varchar(120) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `pais_Paisid` int(11) NOT NULL,
  `ciudad_id` varchar(240) DEFAULT NULL,
  `tipousuario_tipousuarioid` int(11) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `telefono_1` varchar(24) DEFAULT NULL,
  `telefono_2` varchar(24) DEFAULT NULL,
  `cargado_por` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_facebook`, `usuario`, `usuario_nombre`, `contrasena`, `pais_Paisid`, `ciudad_id`, `tipousuario_tipousuarioid`, `correo`, `telefono_1`, `telefono_2`, `cargado_por`) VALUES
(1, '0', 'user1@gmail.com', 'Administrador', '12345', 59, 'Caracas', 2, 'user1@gmail.com', NULL, NULL, NULL),
(2, '0', 'user2@gmail.com', 'Editor', '12345', 13, NULL, 2, 'user2@gmail.com', NULL, NULL, NULL),
(3, '0', 'user3@gmail.com', 'Cliente', '12345', 13, NULL, 3, 'user3@gmail.com', NULL, NULL, NULL),
(6, '0', 'user4@gmail.com', 'Profesor de Yoga', '12345', 1, NULL, 4, 'user4@gmail.com', NULL, NULL, NULL),
(7, '0', 'r.a.s.ogamer@gmail.com', 'rafael sanchez', 'ophyra', 52, NULL, 3, 'r.a.s.ogamer@gmail.com', NULL, NULL, NULL),
(8, '0', 'cliente1@gmail.com', 'Maria Isern', '12345', 1, NULL, 3, 'cliente1@gmail.com', NULL, NULL, 6),
(9, '1977439618946102', 'dreletro@gmail.com', 'Domenico Ruperti Franco', '12345', 52, NULL, 3, 'dreletro@gmail.com', NULL, NULL, NULL),
(10, '2228512660806642', 'led.culture.venezuela@gmail.com', 'Jonathan Moreno', '2228512660806642', 52, NULL, 3, 'led.culture.venezuela@gmail.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_asociado`
--

CREATE TABLE `usuario_asociado` (
  `id_usuario_asociado` int(11) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_clase` int(11) NOT NULL,
  `nombre_cliente` varchar(120) DEFAULT NULL,
  `ficha_nombre` varchar(64) NOT NULL,
  `ficha_referencia` varchar(64) NOT NULL,
  `ficha_cedula` varchar(32) NOT NULL,
  `ficha_pais` varchar(24) DEFAULT NULL,
  `ficha_ciudad` varchar(24) DEFAULT NULL,
  `ficha_direccion` varchar(240) NOT NULL,
  `ficha_descripcion` text NOT NULL,
  `ficha_fecha_de_nacimiento` date NOT NULL,
  `ficha_foto` varchar(12) DEFAULT NULL,
  `ficha_telefono` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_asociado`
--

INSERT INTO `usuario_asociado` (`id_usuario_asociado`, `id_representante`, `id_cliente`, `id_clase`, `nombre_cliente`, `ficha_nombre`, `ficha_referencia`, `ficha_cedula`, `ficha_pais`, `ficha_ciudad`, `ficha_direccion`, `ficha_descripcion`, `ficha_fecha_de_nacimiento`, `ficha_foto`, `ficha_telefono`) VALUES
(10, 6, 3, 4, 'Cliente', 'Cliente Principal', 'Secretaria ejecutiva de la seccion A', 'V-16929446', 'United States', 'Weston', '2645 Executive Park Drive, Suite 682, 2, 2, 2', 'Test', '1971-03-18', NULL, '19543059830'),
(11, 6, 8, 4, 'Maria Isern', '', '', '', NULL, NULL, '', '', '0000-00-00', NULL, NULL),
(12, 6, 1, 5, 'Administrador', '', '', '', NULL, NULL, '', '', '0000-00-00', NULL, '9858305');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_especificas`
--
ALTER TABLE `categorias_especificas`
  ADD PRIMARY KEY (`id_categorias_especificas`,`categorias_general_id_categoria_producto`),
  ADD KEY `fk_categorias_especificas_categorias_general1_idx` (`categorias_general_id_categoria_producto`);

--
-- Indices de la tabla `categorias_general`
--
ALTER TABLE `categorias_general`
  ADD PRIMARY KEY (`id_categoria_producto`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ciudad_id`),
  ADD KEY `fk_ciudad_pais1` (`pais_Paisid`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`licencia`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `departamento_categorias`
--
ALTER TABLE `departamento_categorias`
  ADD PRIMARY KEY (`id_departamento_categorias`);

--
-- Indices de la tabla `documentos_enviados`
--
ALTER TABLE `documentos_enviados`
  ADD PRIMARY KEY (`id_documentos_enviados`);

--
-- Indices de la tabla `documentos_enviados_cesta`
--
ALTER TABLE `documentos_enviados_cesta`
  ADD PRIMARY KEY (`id_documentos_enviados_cesta`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id_favorito`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  ADD PRIMARY KEY (`id_lista_deseos`);

--
-- Indices de la tabla `pagos_enviados`
--
ALTER TABLE `pagos_enviados`
  ADD PRIMARY KEY (`id_pagos_enviados`);

--
-- Indices de la tabla `pagos_enviados_cestas`
--
ALTER TABLE `pagos_enviados_cestas`
  ADD PRIMARY KEY (`id_pagos_enviados_cestas`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Paisid`);

--
-- Indices de la tabla `parametros`
--
ALTER TABLE `parametros`
  ADD PRIMARY KEY (`rif`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_status_profit` (`id_status_profit`);

--
-- Indices de la tabla `pedido_cesta`
--
ALTER TABLE `pedido_cesta`
  ADD PRIMARY KEY (`id_pedido_cesta`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
  ADD PRIMARY KEY (`id_precios`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_preguntas`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`,`id_usuario`,`pais_id`,`id_categoria_producto`,`id_categorias_especificas`),
  ADD KEY `fk_productos_usuario1_idx` (`id_usuario`),
  ADD KEY `fk_productos_pais1_idx` (`pais_id`),
  ADD KEY `fk_productos_categorias_general1_idx` (`id_categoria_producto`),
  ADD KEY `fk_productos_categorias_especificas1_idx` (`id_categorias_especificas`),
  ADD KEY `id_profit` (`id_profit`);

--
-- Indices de la tabla `productos_cesta_especificos`
--
ALTER TABLE `productos_cesta_especificos`
  ADD PRIMARY KEY (`id_productos_cesta_especificos`);

--
-- Indices de la tabla `producto_cita_cesta`
--
ALTER TABLE `producto_cita_cesta`
  ADD PRIMARY KEY (`id_producto_cita_cesta`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promociones`);

--
-- Indices de la tabla `tatu_cita`
--
ALTER TABLE `tatu_cita`
  ADD PRIMARY KEY (`id_tatu_cita`);

--
-- Indices de la tabla `tatu_cita_cesta`
--
ALTER TABLE `tatu_cita_cesta`
  ADD PRIMARY KEY (`id_tatu_cita_cesta`);

--
-- Indices de la tabla `tatu_cita_servicio_especifico`
--
ALTER TABLE `tatu_cita_servicio_especifico`
  ADD PRIMARY KEY (`id_tatu_cita_servicio_especifico`);

--
-- Indices de la tabla `tatu_eventos`
--
ALTER TABLE `tatu_eventos`
  ADD PRIMARY KEY (`id_tatu_eventos`);

--
-- Indices de la tabla `tatu_eventos_categorias`
--
ALTER TABLE `tatu_eventos_categorias`
  ADD PRIMARY KEY (`id_tatu_eventos_categorias`);

--
-- Indices de la tabla `tatu_galeria`
--
ALTER TABLE `tatu_galeria`
  ADD PRIMARY KEY (`id_tatu_galeria`);

--
-- Indices de la tabla `tatu_galeria_categoria`
--
ALTER TABLE `tatu_galeria_categoria`
  ADD PRIMARY KEY (`id_tatu_galeria_categoria`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`tipousuarioid`);

--
-- Indices de la tabla `tipo_publicidad`
--
ALTER TABLE `tipo_publicidad`
  ADD PRIMARY KEY (`id_tipo_publicidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`,`pais_Paisid`,`tipousuario_tipousuarioid`),
  ADD KEY `fk_usuario_pais_idx` (`pais_Paisid`),
  ADD KEY `fk_usuario_tipousuario1_idx` (`tipousuario_tipousuarioid`);

--
-- Indices de la tabla `usuario_asociado`
--
ALTER TABLE `usuario_asociado`
  ADD PRIMARY KEY (`id_usuario_asociado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_especificas`
--
ALTER TABLE `categorias_especificas`
  MODIFY `id_categorias_especificas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias_general`
--
ALTER TABLE `categorias_general`
  MODIFY `id_categoria_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento_categorias`
--
ALTER TABLE `departamento_categorias`
  MODIFY `id_departamento_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `documentos_enviados`
--
ALTER TABLE `documentos_enviados`
  MODIFY `id_documentos_enviados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `documentos_enviados_cesta`
--
ALTER TABLE `documentos_enviados_cesta`
  MODIFY `id_documentos_enviados_cesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id_favorito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lista_deseos`
--
ALTER TABLE `lista_deseos`
  MODIFY `id_lista_deseos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pagos_enviados`
--
ALTER TABLE `pagos_enviados`
  MODIFY `id_pagos_enviados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `pagos_enviados_cestas`
--
ALTER TABLE `pagos_enviados_cestas`
  MODIFY `id_pagos_enviados_cestas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `Paisid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `pedido_cesta`
--
ALTER TABLE `pedido_cesta`
  MODIFY `id_pedido_cesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id_precios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_preguntas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos_cesta_especificos`
--
ALTER TABLE `productos_cesta_especificos`
  MODIFY `id_productos_cesta_especificos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `producto_cita_cesta`
--
ALTER TABLE `producto_cita_cesta`
  MODIFY `id_producto_cita_cesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promociones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tatu_cita`
--
ALTER TABLE `tatu_cita`
  MODIFY `id_tatu_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT de la tabla `tatu_cita_cesta`
--
ALTER TABLE `tatu_cita_cesta`
  MODIFY `id_tatu_cita_cesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT de la tabla `tatu_cita_servicio_especifico`
--
ALTER TABLE `tatu_cita_servicio_especifico`
  MODIFY `id_tatu_cita_servicio_especifico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tatu_eventos`
--
ALTER TABLE `tatu_eventos`
  MODIFY `id_tatu_eventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tatu_eventos_categorias`
--
ALTER TABLE `tatu_eventos_categorias`
  MODIFY `id_tatu_eventos_categorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tatu_galeria`
--
ALTER TABLE `tatu_galeria`
  MODIFY `id_tatu_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `tatu_galeria_categoria`
--
ALTER TABLE `tatu_galeria_categoria`
  MODIFY `id_tatu_galeria_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `tipousuarioid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_publicidad`
--
ALTER TABLE `tipo_publicidad`
  MODIFY `id_tipo_publicidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario_asociado`
--
ALTER TABLE `usuario_asociado`
  MODIFY `id_usuario_asociado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias_especificas`
--
ALTER TABLE `categorias_especificas`
  ADD CONSTRAINT `fk_categorias_especificas_categorias_general1` FOREIGN KEY (`categorias_general_id_categoria_producto`) REFERENCES `categorias_general` (`id_categoria_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_pais1` FOREIGN KEY (`pais_Paisid`) REFERENCES `pais` (`Paisid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias_especificas1` FOREIGN KEY (`id_categorias_especificas`) REFERENCES `categorias_especificas` (`id_categorias_especificas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_categorias_general1` FOREIGN KEY (`id_categoria_producto`) REFERENCES `categorias_general` (`id_categoria_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`Paisid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_productos_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_pais` FOREIGN KEY (`pais_Paisid`) REFERENCES `pais` (`Paisid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_tipousuario1` FOREIGN KEY (`tipousuario_tipousuarioid`) REFERENCES `tipousuario` (`tipousuarioid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
