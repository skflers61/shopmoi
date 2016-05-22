-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Mai 2016 à 16:50
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shopmoi`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `Nom`) VALUES
(1, 'T-shirts'),
(2, 'Polos'),
(3, 'Jeans'),
(4, 'Chemises'),
(5, 'Vestes'),
(6, 'Pulls & Gilets'),
(7, 'Pantalons'),
(8, 'Shorts'),
(9, 'Sous-vêtements'),
(10, 'Shorts'),
(11, 'sport'),
(12, 'Maillots de bain & Peignoirs'),
(13, 'Manteaux'),
(14, 'Costumes & Cravates'),
(15, 'Pyjamas');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'adem', 'adem', 'skflers61@gmail.com', 'skflers61@gmail.com', 1, 'hlpfgdcxieoss84kwk4wk80s0oc0skk', 'KkCl8aPs42yToXZAmSaX93p9C4eOTRHDPFhZWWnbCQRXhXKGoZunxQJboko4RHjwySRJFHYY1IqIQqI+g8RRNw==', '2015-02-26 12:18:58', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LogoAdresse` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Slogan` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `marque`
--

INSERT INTO `marque` (`id`, `Nom`, `LogoAdresse`, `Slogan`) VALUES
(1, 'Urban Classics', 'bundles/smsite/images/marques/urban_classics.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `modele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qte_en_stock` int(11) NOT NULL,
  `nb_vente` int(11) NOT NULL,
  `couleur` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marque_id` int(11) NOT NULL,
  `familleProduit` int(11) NOT NULL,
  `descriptionEntier` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E618D5BB4827B9B2` (`marque_id`),
  KEY `IDX_E618D5BBBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `description`, `prix`, `modele`, `qte_en_stock`, `nb_vente`, `couleur`, `marque_id`, `familleProduit`, `descriptionEntier`, `categorie_id`) VALUES
(1, 'Sweat Parka', 59.99, 'Felpa jogging', 56, 999, 'gris', 1, 1, 'Sweatshirt "Sweat Parka" de la marque Urban Classics de couleur gris.', 6),
(3, 'Sweat Parka', 59.99, 'Felpa jogging', 40, 152, 'noir', 1, 1, 'Sweatshirt "Sweat Parka" de la marque Urban Classics de couleur noir', 6),
(4, 'Winter Knit Zip Hoodie', 59.99, 'Maglieria', 230, 1100, 'gris', 1, 2, '', 6),
(7, 'Hooded Checked Flannel', 39.99, 'Camicia in flanella', 500, 1600, 'rouge', 1, 3, 'Est-ce que vous êtes fatigués des chemises habituelles en style lumberjack? Voilà la version Urban Classics "Hooded Checked Flannel", la chemise en flanelle aux carreaux rouges et noirs avec capuche et manches de couleur noir. Chemise  100% coton avec capuche et manches 63% coton, 37% polyester.', 6),
(8, 'Stripe Jersey Hoodie', 19.99, 'Maglia a maniche lunghe', 34, 1000, 'gris', 1, 4, '', 6);

-- --------------------------------------------------------

--
-- Structure de la table `produitimages`
--

DROP TABLE IF EXISTS `produitimages`;
CREATE TABLE IF NOT EXISTS `produitimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produit_id` int(11) NOT NULL,
  `adresse` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `resolution` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nomImage` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EE697BA1F347EFB` (`produit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produitimages`
--

INSERT INTO `produitimages` (`id`, `produit_id`, `adresse`, `resolution`, `alt`, `nomImage`) VALUES
(1, 1, 'bundles/smsite/images/article1/av_231x383.jpg', '231x383', 'Sweat Parka', 'av_231x383'),
(2, 3, 'bundles/smsite/images/article2/av_231x383.jpg', '231x383', 'Sweat Parka', 'av_231x383'),
(3, 4, 'bundles/smsite/images/article3/av_231x383.jpg', '231x383', 'Winter Knit Zip Hoodie', 'av_231x383'),
(4, 7, 'bundles/smsite/images/article4/av_231x383.jpg', '231x383', 'Hooded Checked Flannel', 'av_231x383'),
(9, 1, 'bundles/smsite/images/article1/av_350x500.jpg', '350x500', 'Sweat Parka', 'av_350x500'),
(10, 1, 'bundles/smsite/images/article1/av_75x75.jpg', '75x75', 'Sweat Parka', 'av_75x75'),
(11, 1, 'bundles/smsite/images/article1/ar_75x75.jpg', '75x75', 'Sweat Parka', 'ar_75x75'),
(12, 1, 'bundles/smsite/images/article1/bas_75x75.jpg', '75x75', 'Sweat Parka', 'bas_75x75'),
(14, 1, 'bundles/smsite/images/article1/cote_75x75.jpg', '75x75', 'Sweat Parka', 'cote_75x75'),
(15, 1, 'bundles/smsite/images/article1/cote2_75x75.jpg', '75x75', 'Sweat Parka', 'cote2_75x75'),
(16, 1, 'bundles/smsite/images/article1/profil_75x75.jpg', '75x75', 'Sweat Parka', 'profil_75x75'),
(17, 1, 'bundles/smsite/images/article1/profil2_75x75.jpg', '75x75', 'Sweat Parka', 'profil2_75x75'),
(18, 1, 'bundles/smsite/images/article1/profilar_75x75.jpg', '75x75', 'Sweat Parka', 'profilar_75x75'),
(19, 1, 'bundles/smsite/images/article1/zoom_75x75.jpg', '75x75', 'Sweat Parka', 'zoom_75x75'),
(20, 1, 'bundles/smsite/images/article1/av_G.jpg', '1400x1400', 'Sweat Parka', 'av_1400x1400'),
(21, 1, 'bundles/smsite/images/article1/ar_G.jpg', '1400x1400', 'Sweat Parka', 'ar_1400x1400'),
(22, 1, 'bundles/smsite/images/article1/cote_G.jpg', '1400x1400', 'Sweat Parka', 'cote_1400x1400'),
(23, 1, 'bundles/smsite/images/article1/profil_G.jpg', '1500x1500', 'Sweat Parka', 'profil_1500x1500'),
(24, 1, 'bundles/smsite/images/article1/cote2_G.jpg', '1400x1400', 'Sweat Parka', 'cote2_1400x1400'),
(37, 1, 'bundles/smsite/images/article1/profil2_G.jpg', '1500x1500', 'Sweat Parka', 'profil2_1500x1500'),
(38, 1, 'bundles/smsite/images/article1/profilar_G.jpg', '1500x1500', 'Sweat Parka', 'profilar_1500x1500'),
(39, 1, 'bundles/smsite/images/article1/zoom_G.jpg', '1200x1200', 'Sweat Parka', 'zoom_1200x1200'),
(40, 1, 'bundles/smsite/images/article1/bas_G.jpg', '1200x1200', 'Sweat Parka', 'bas_1200x1200'),
(41, 3, 'bundles/smsite/images/article2/ar_75x75.jpg', '75x75', 'Sweat Parka', 'ar_75x75'),
(42, 3, 'bundles/smsite/images/article2/av_75x75.jpg', '75x75', 'Sweat Parka', 'av_75x75'),
(43, 3, 'bundles/smsite/images/article2/bas_75x75.jpg', '75x75', 'Sweat Parka', 'bas_75x75'),
(44, 3, 'bundles/smsite/images/article2/cote_75x75.jpg', '75x75', 'Sweat Parka', 'cote_75x75'),
(45, 3, 'bundles/smsite/images/article2/cote2_75x75.jpg', '75x75', 'Sweat Parka', 'cote2_75x75'),
(46, 3, 'bundles/smsite/images/article2/profil_75x75.jpg', '75x75', 'Sweat Parka', 'profil_75x75'),
(47, 3, 'bundles/smsite/images/article2/profil2_75x75.jpg', '75x75', 'Sweat Parka', 'profil2_75x75'),
(48, 3, 'bundles/smsite/images/article2/profil3_75x75.jpg', '75x75', 'Sweat Parka', 'profil3_75x75'),
(49, 3, 'bundles/smsite/images/article2/profilar_75x75.jpg', '75x75', 'Sweat Parka', 'profilar_75x75'),
(50, 3, 'bundles/smsite/images/article2/zoom_75x75.jpg', '75x75', 'Sweat Parka', 'zoom_75x75'),
(51, 3, 'bundles/smsite/images/article2/av_G.jpg', '1400x1400', 'Sweat Parka', 'av_1400x1400'),
(52, 3, 'bundles/smsite/images/article2/ar_G.jpg', '1400x1400', 'Sweat Parka', 'ar_1400x1400'),
(53, 3, 'bundles/smsite/images/article2/bas_G.jpg', '1200x1200', 'Sweat Parka', 'bas_1200x1200'),
(54, 3, 'bundles/smsite/images/article2/cote_G.jpg', '1400x1400', 'Sweat Parka', 'cote_1400x1400'),
(55, 3, 'bundles/smsite/images/article2/cote2_G.jpg', '1400x1400', 'Sweat Parka', 'cote2_1400x1400'),
(56, 3, 'bundles/smsite/images/article2/profil_G.jpg', '1500x1500', 'Sweat Parka', 'profil_1500x1500'),
(57, 3, 'bundles/smsite/images/article2/profil2_G.jpg', '1500x1500', 'Sweat Parka', 'profil2_1500x1500'),
(58, 3, 'bundles/smsite/images/article2/profil3_G.jpg', '1500x1500', 'Sweat Parka', 'profil3_1500x1500'),
(59, 3, 'bundles/smsite/images/article2/profilar_G.jpg', '1500x1500', 'Sweat Parka', 'profilar_1500x1500'),
(60, 3, 'bundles/smsite/images/article2/zoom_G.jpg', '1200x1200', 'Sweat Parka', 'zoom_1200x1200'),
(61, 3, 'bundles/smsite/images/article2/av_100x100.jpg', '100x100', 'Sweat Parka', 'av_100x100'),
(62, 1, 'bundles/smsite/images/article1/av_100x100.jpg', '100x100', 'Sweat Parka', 'av_100x100'),
(63, 4, 'bundles/smsite/images/article3/av_100x100.jpg', '100x100', 'Winter Knit Zip Hoodie', 'av_100x100'),
(64, 7, 'bundles/smsite/images/article4/av_100x100.jpg', '100x100', 'Hooded Checked Flannel', 'av_100x100'),
(65, 8, 'bundles/smsite/images/article5/av_100x100.jpg', '100x100', 'Stripe Jersey Hoodie', 'av_100x100'),
(71, 4, 'bundles/smsite/images/article3/av_75x75.jpg', '75x75', 'Winter Knit Zip Hoodie', 'av_75x75'),
(72, 4, 'bundles/smsite/images/article3/ar_75x75.jpg', '75x75', 'Winter Knit Zip Hoodie', 'ar_75x75'),
(73, 4, 'bundles/smsite/images/article3/profil_75x75.jpg', '75x75', 'Winter Knit Zip Hoodie', 'profil_75x75'),
(74, 4, 'bundles/smsite/images/article3/zoom_75x75.jpg', '75x75', 'Winter Knit Zip Hoodie', 'zoom_75x75'),
(75, 4, 'bundles/smsite/images/article3/profilar_75x75.jpg', '75x75', 'Winter Knit Zip Hoodie', 'profilar_75x75'),
(76, 4, 'bundles/smsite/images/article3/av_G.jpg', '1200x1200', 'Winter Knit Zip Hoodie', 'av_G'),
(77, 4, 'bundles/smsite/images/article3/ar_G.jpg', '1200x1200', 'Winter Knit Zip Hoodie', 'ar_G'),
(78, 4, 'bundles/smsite/images/article3/profil_G.jpg', '1500x1500', 'Winter Knit Zip Hoodie', 'profil_G'),
(79, 4, 'bundles/smsite/images/article3/zoom_G.jpg', '1141x1141', 'Winter Knit Zip Hoodie', 'zoom_G'),
(80, 4, 'bundles/smsite/images/article3/profilar_G.jpg', '1500x1500', 'Winter Knit Zip Hoodie', 'profilar_G'),
(81, 8, 'bundles/smsite/images/article5/av_G.jpg', '1200x1200', 'Stripe Jersey Hoodie', 'av_1200x1200'),
(82, 8, 'bundles/smsite/images/article5/av_75x75.jpg', '75x75', 'Stripe Jersey Hoodie', 'av_75x75'),
(83, 8, 'bundles/smsite/images/article5/av2_75x75.jpg', '75x75', 'Stripe Jersey Hoodie', 'av2_75x75'),
(84, 8, 'bundles/smsite/images/article5/profil_75x75.jpg', '75x75', 'Stripe Jersey Hoodie', 'profil_75x75'),
(85, 8, 'bundles/smsite/images/article5/profilar_75x75.jpg', '75x75', 'Stripe Jersey Hoodie', 'profilar_75x75'),
(86, 8, 'bundles/smsite/images/article5/zoom_75x75.jpg', '75x75', 'Stripe Jersey Hoodie', 'zoom_75x75'),
(87, 8, 'bundles/smsite/images/article5/av2_231x383.jpg', '231x383', 'Stripe Jersey Hoodie', 'av2_231x383'),
(88, 8, 'bundles/smsite/images/article5/av2_G.jpg', '1200x1200', 'Stripe Jersey Hoodie', 'av2_1200x1200'),
(89, 8, 'bundles/smsite/images/article5/zoom_G.jpg', '1200x1200', 'Stripe Jersey Hoodie', 'zoom_1200x1200'),
(90, 8, 'bundles/smsite/images/article5/profil_G.jpg', '1500x1500', 'Stripe Jersey Hoodie', 'profil_1500x1500'),
(91, 8, 'bundles/smsite/images/article5/profilar_G.jpg', '1500x1500', 'Stripe Jersey Hoodie', 'profilar_1500x1500'),
(92, 7, 'bundles/smsite/images/article4/av_75x75.jpg', '75x75', 'Hooded Checked Flannel', 'av_75x75'),
(93, 7, 'bundles/smsite/images/article4/ar_75x75.jpg', '75x75', 'Hooded Checked Flannel', 'ar_75x75'),
(94, 7, 'bundles/smsite/images/article4/profil_75x75.jpg', '75x75', 'Hooded Checked Flannel', 'profil_75x75'),
(95, 7, 'bundles/smsite/images/article4/profilar_75x75.jpg', '75x75', 'Hooded Checked Flannel', 'profilar_75x75'),
(96, 7, 'bundles/smsite/images/article4/zoom_75x75.jpg', '75x75', 'Hooded Checked Flannel', 'zoom_75x75'),
(97, 7, 'bundles/smsite/images/article4/zoom_G.jpg', '1000x1000', 'Hooded Checked Flannel', 'zoom_G'),
(98, 7, 'bundles/smsite/images/article4/ar_G.jpg', '1200x1200', 'Hooded Checked Flannel', 'ar_G'),
(99, 7, 'bundles/smsite/images/article4/av_G.jpg', '1200x1200', 'Hooded Checked Flannel', 'av_G'),
(100, 7, 'bundles/smsite/images/article4/profil_G.jpg', '1500x1500', 'Hooded Checked Flannel', 'profil_G'),
(101, 7, 'bundles/smsite/images/article4/profilar_G.jpg', '1500x1500', 'Hooded Checked Flannel', 'profilar_G');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_E618D5BB4827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `FK_E618D5BBBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `produitimages`
--
ALTER TABLE `produitimages`
  ADD CONSTRAINT `FK_EE697BA1F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
