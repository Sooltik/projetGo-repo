-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 03 juin 2022 à 15:18
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'modo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `role`) VALUES
(1, 'utilisateur1', 'utilisateur1@gmail.com', 'e38ad214943daad1d64c102faec29de4afe9da3d', 'gggggg', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `writer` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'post.png',
  `date` datetime NOT NULL,
  `posted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `writer`, `image`, `date`, `posted`) VALUES
(1, 'Projet collectit 1', 'Nos remerciements s\'adressent outes les ipes qui ont contribu la prration et l\'essai sur le terrain de ce guide, tout particuliment au Kenya: Tom Mboya, Veronica Moraa, Christian Odhiambo, et Zilpah Ouma (projet SHEWAS). En Tanzanie: Mahalia Adamu, Adelina Chang\'a, Peter Chuwa, Hashim Ibrahim, Vedasto Jalves, Mustapha Mbughu, Asha Msengwa, Stephen Mwendi et Samuel Shaaban (WAMMA). En hiopie: Seble Beyene et Tsegaye Haile (GIBB/SEURECA et WSSA). Inde: Anlia Kumary, Kochu Rani Mathew, Lalachan, Lissy Paul, B. Manoharan, C. K. Nagesh, K. N. Nisha, K. Suresh Babu, Harish Kumar (KWA, unitsocio-nomiques), et Vijayalakshmi Ammal (consultant indndant). Afghanistan: Abdul Qayeum Karim, Hayatullah Niaz, Abdul Hai Sahar et Shireen Sultan (projet BBC-AED) et Anne-Marie Wangel.\r\n\r\nNous tenons lement emercier tous ceux qui ont apporteur soutien financier et moral aux ipes sur le terrain: Nancy George (ARUNET), David Adriance, Bud Crandall, Iskandar, Richard Odero, B.E.N. Okumu, Josiah Omotto et Beat Rohr (CARE Kenya), et Shoa Asfaha (CARE R-U); Catherine Johnson, Julie Jarman, Saad Makwali, Brian Mathew, Mzee Pullinga, Ian Westbury, et Saada Westbury (WaterAid R-U. et Tanzanie); Neil Chadder (GIBB/SEURECA, hiopie); Jens Bjerre (DANIDA, Inde) et Balachandra Kurup (Kerala Water Authority, Unitsocio-nomiques, Inde), Gordon Adam et John Butt (projet BBC-AED, R-U. et Pakistan); Victoria Ware et Marion Kelly (ODA, PHD).\r\n\r\nLa prration de ce manuel a lement facilitpar: Pete Kolsky, Sandy Cairncross, Simon Cousens et Sharon Huttly (LSH & TM); John Pinfold (WaterAid, Ouganda); Elena Hurtado (consultante, Guatemala); Nancy Balfour et John Muturi (Programme de salubritnvironnemental, AMREF, Kenya) pour les commentaires au stade prminaire, et par: Sarah Murray Bradley (consultante, R-U.), John Gaskin (Sir Alexander Gibb & Partners Ltd., R-U.), Gillian Hundt (LSH & TM), Eva Kaltenthaler (Hallam University, R-U.), Harish Kumar et l\'ipe de l\'de Kerala citplus haut (Kerala Water Authority, unitsocio-nomiques, Inde), Rose Lidonde (PNUD-Banque mondiale, RWSGEA, Kenya), Jane Moore (Consultante, R-U.), Yusaf Samiullah (ODA, ingine), Darren Saywell (GARNET, R-U.), Shirazuddin Siddiqui, Shireen Sultan, Abdul Qayeum Karim et Hayatullah Niaz (projet BBC-AED, Pakistan) et Simon Trace (WaterAid, R-U.) pour la relecture par les pairs. La plupart de leurs id ont incorpor dans la version finale du manuscrit. Nous leur sommes reconnaissants ous pour leurs suggestions et les id qui seront adopt lors de la diffusion de ce guide.', 'utilisateur1@gmail.com', 'projet1.png', '2022-06-01 10:52:13', 1),
(3, 'Projet collectif 2', 'Le Guide des procres d\'luation sanitaire (GPES) a concomme un compagnon de terrain de Actions Speak: the study of hygiene behaviour in mater and sanitation projects (Boot and Cairncross, 1993), ouvrage de rrence prr l\'intention des chefs de projet et des dsionnaires. Le GPES, pour sa part, traite essentiellement des probls pratiques rencontrsur le terrain en mati d\'approvisionnement d\'eau et d\'assainissement, et prnte les projets d\'cation sanitaire qui permettront au personnel sur le terrain d\'borer et de riser ses propres programmes d\'luation des pratiques d\'hygi.\r\n\r\nCe guide est le fruit d\'un processus de consultations auprde nombreux membres du personnel prnts sur le terrain en Afrique de l\'Est (rons rurales du Kenya, Tanzanie, rons urbaines d\'hiopie). Chaque processus de consultation a comportne de d\'luation d\'hygi con et menpar le personnel du projet avec l\'assistance de chercheurs possnt une expence en anthropologie, en dloppement communautaire et en santublique sur le plan de la coordination, de la formation et de la supervision. Les connaissances pratiques qui se dgent de ces des correspondent aux besoins et aux prcupations des principaux utilisateurs vis Avant d\'e examint finalitar un comite pairs, le GPES a mis \'essai sur le terrain, en Inde et en Afghanistan.\r\n\r\nLe GPES met l\'accent sur les diffnts moyens de recueillir, d\'dier et d\'interprr des informations qualitatives. Dans le prolongement des guides et des manuels destinournir un soutien technique/modologique aux professionnels de la santvoir par exemple Simpson-Herbert, 1983; Scrimshaw et Hurtado, 1987), le Guide des PES se donne pour ambition d\'offrir des compnces en recherche qualitative aux professionnels n\'ayant aucune formation en sciences sociales. En revanche, il ne s\'adresse pas aux spalistes en recherche quantitative qui souhaitent utiliser l\'analyse statistique. Les informations qualitatives et les informations quantitatives sont recueillies, analys et interpres diffmment, mais cela ne signifie pas qu\'elles ne peuvent pas e recueillies et analys parallment afin de permettre une meilleure comprnsion des questions di.\r\n\r\nLa qualites informations recueillies est essentielle \'luation systtique des pratiques d\'hygi. Le fait que les questionnaires reprntent le seul instrument utilisour la collecte de donn soul un certain nombre d\'interrogations quant a qualites donn recueillies par ce moyen (voir Gill, 1993 pour une analyse condens. Le probl est encore plus aigu lorsqu\'il s\'agit de rechercher des informations socioculturelles. Il n\'en est pas moins vrai que les informations qualitatives recueillies dans le but de concevoir de bons questionnaires sur des sujets d\'enqu spfiques, peuvent amorer l\'efficacite ces questionnaires. Le prnt guide a risomme une solution pratique aux limitations qu\'entra intablement le recours ne seule mode ou un seul instrument de collecte de donn, en particulier lorsqu\'on s\'intsse aux aspects socioculturels du comportement humain, lesquels se prnt plutal es mesures quantifiables.\r\n\r\nl\'instar des ouvrages d publisur ce th de l\'luation des pratiques d\'hygi, le GPES die les solutions de substitution \'enqu par questionnaire en examinant les divers outils utilispour la systtisation de la collecte d\'informations essentiellement qualitatives. Il ne s\'agit pas pour nous de vous dissuader d\'utiliser les questionnaires. De nombreux projets les utilisent encore et continueront de les utiliser pour la prise de dsions. Nous prnisons simplement le recours es informations qualitatives fiables pour composer vos questionnaires, et \'autres outils pour les complr. Nous recommandons lement la triangulation des sources et des modes comme le meilleur moyen d\'obtenir des informations dill sur les questions di.', 'utilisateur1@gmail.com', 'projet2 (2).jpg', '2022-06-01 11:20:21', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
