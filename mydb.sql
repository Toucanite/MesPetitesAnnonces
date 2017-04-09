-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 09 Avril 2017 à 22:08
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_ad`
--

CREATE TABLE IF NOT EXISTS `tbl_ad` (
  `Id_Ad` int(11) NOT NULL AUTO_INCREMENT,
  `Txt_Title` varchar(100) NOT NULL,
  `Txt_Description` varchar(1000) NOT NULL,
  `Nb_Price` int(11) NOT NULL,
  `Cd_Ccy` char(3) NOT NULL,
  `Dttm_Creation` datetime NOT NULL,
  `Dttm_Validation` datetime DEFAULT NULL,
  `Dttm_Rejection` datetime DEFAULT NULL,
  `Id_User` int(11) NOT NULL,
  PRIMARY KEY (`Id_Ad`),
  KEY `fk_Tbl_Ad_Tbl_User1_idx` (`Id_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `tbl_ad`
--

INSERT INTO `tbl_ad` (`Id_Ad`, `Txt_Title`, `Txt_Description`, `Nb_Price`, `Cd_Ccy`, `Dttm_Creation`, `Dttm_Validation`, `Dttm_Rejection`, `Id_User`) VALUES
(4, 'renault Cliio', 'Voiture en bon Ã©tat', 4000, 'CHF', '2017-04-09 20:56:43', NULL, NULL, 2),
(5, 'Mapemonde', 'TrÃ¨s rare, collection limitÃ©e', 130, 'CHF', '2017-04-09 21:04:46', NULL, NULL, 2),
(6, 'Collection Tintin', 'Toutes les BD tintin, collection complÃ¨te en bon Ã©tat', 40, 'CHF', '2017-04-09 21:17:54', NULL, NULL, 3),
(7, 'Tmax presque neuf', 'presque neuf, pas de rayures', 3000, 'EUR', '2017-04-09 21:19:03', NULL, NULL, 3),
(8, 'Jordans royal blue - taille 42', 'Jamais portÃ©e (pas Ã  ma taille)', 120, 'CHF', '2017-04-09 21:27:42', NULL, NULL, 4),
(9, 'Monopoly', 'Jeux de sociÃ©tÃ© peu utilisÃ©, version classique', 30, 'CHF', '2017-04-09 21:29:41', NULL, NULL, 2),
(10, 'Tondeuse Ã  gazon', 'Tondeuse a gazon Husqvarna, Ã  servi mais fonctionne trÃ¨s bien\r\nModÃ¨le de 2007', 680, 'CHF', '2017-04-09 21:34:13', NULL, NULL, 4),
(11, 'Boucle d''oreille Svarowski', 'Boucle d''oreille, vraie, elle sont en parfaite Ã©tat', 150, 'CHF', '2017-04-09 21:36:45', NULL, NULL, 4),
(12, 'PS3', 'une playstaion 3 qui fonctionne', 200, 'CHF', '2017-04-09 21:39:29', NULL, NULL, 3),
(13, 'Fear and Loathing in Las Vegas', 'DVD englais, il y a les sous-titres en francais \r\nLe DVD est en parfait Ã©tat', 20, 'CHF', '2017-04-09 21:41:42', NULL, NULL, 3),
(14, 'Un enfant pas cher', 'je l''ai trouvÃ© dans la rue, je le vend pour 300 fr\r\nil est trÃ¨s sage', 300, 'CHF', '2017-04-09 21:44:04', NULL, NULL, 3),
(15, 'Barque de peche', 'Petite barque Ã  moteur trÃ¨s bien pour la pÃªche', 200, 'CHF', '2017-04-09 21:52:17', NULL, NULL, 3),
(16, 'Un chat', 'Un chat noir, je crois qu''il est possÃ©dÃ© par un dÃ©mon\r\nAchetez le vite s''il vous plait', 1, 'CHF', '2017-04-09 21:58:13', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_ad-cat`
--

CREATE TABLE IF NOT EXISTS `tbl_ad-cat` (
  `Tbl_Ad_Id_Ad` int(11) NOT NULL,
  `Tbl_Category_id_Category` int(11) NOT NULL,
  PRIMARY KEY (`Tbl_Ad_Id_Ad`,`Tbl_Category_id_Category`),
  KEY `fk_Tbl_Ad-Cat_Tbl_Ad1_idx` (`Tbl_Ad_Id_Ad`),
  KEY `fk_Tbl_Ad-Cat_Tbl_Category1_idx` (`Tbl_Category_id_Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_ad-cat`
--

INSERT INTO `tbl_ad-cat` (`Tbl_Ad_Id_Ad`, `Tbl_Category_id_Category`) VALUES
(4, 3),
(5, 2),
(6, 17),
(7, 20),
(8, 29),
(9, 15),
(10, 18),
(11, 6),
(12, 14),
(13, 9),
(14, 5),
(15, 22),
(16, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id_Category` int(11) NOT NULL,
  `Nm_Category` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_category`
--

INSERT INTO `tbl_category` (`id_Category`, `Nm_Category`) VALUES
(1, 'Animaux'),
(2, 'Art - Antiquités'),
(3, 'Automobiles'),
(4, 'Beauté - Bien-être'),
(5, 'Bébé - Puériculture'),
(6, 'Bijouterie - Horlogerie'),
(7, 'Billets - Bons'),
(8, 'Camping'),
(9, 'Cinéma - DVD'),
(10, 'Collections'),
(11, 'Divers'),
(12, 'Emploi'),
(13, 'Immobilier'),
(14, 'Informatique'),
(15, 'Jeux - Jouets'),
(16, 'Jeux vidéo'),
(17, 'Livres - BD - Revues'),
(18, 'Maison - Jardin - Bricolage'),
(19, 'Modélisme'),
(20, 'Motos - Scooters'),
(21, 'Musique - Instruments'),
(22, 'Nautisme'),
(23, 'Photo - Caméras'),
(24, 'PME Artisans Agriculteurs'),
(25, 'Sport - Loisirs'),
(26, 'Téléphonie'),
(27, 'TV - Son - Home cinema'),
(28, 'Vacances - Voyages'),
(29, 'Vêtements'),
(30, 'Vins - Gastronomie');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_permission`
--

CREATE TABLE IF NOT EXISTS `tbl_permission` (
  `Id_Role` int(11) NOT NULL,
  `Cd_Permission` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Role`,`Cd_Permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `Id_Role` int(11) NOT NULL AUTO_INCREMENT,
  `Nm_Role` varchar(45) NOT NULL,
  PRIMARY KEY (`Id_Role`),
  UNIQUE KEY `Nm_Role_UNIQUE` (`Nm_Role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tbl_role`
--

INSERT INTO `tbl_role` (`Id_Role`, `Nm_Role`) VALUES
(1, 'Admistrateur'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Nm_First` varchar(100) NOT NULL,
  `Nm_Last` varchar(100) NOT NULL,
  `Txt_Password_Hash` varchar(50) NOT NULL,
  `Txt_Password_Salt` varchar(50) NOT NULL,
  `Nm_Place` varchar(100) DEFAULT NULL,
  `Cd_Country` varchar(2) DEFAULT NULL,
  `Tbl_Usercol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tbl_user`
--

INSERT INTO `tbl_user` (`Id_User`, `Nm_First`, `Nm_Last`, `Txt_Password_Hash`, `Txt_Password_Salt`, `Nm_Place`, `Cd_Country`, `Tbl_Usercol`) VALUES
(1, '', 'luc', '5521843ccd34adca311d3a6d614c560897fc3e28', '58e01d6f68ff3', NULL, NULL, NULL),
(2, '', 'admin', '35702f0239548d7864139be0452698ed10a46502', '58ea834ec703c', NULL, NULL, NULL),
(3, '', 'adri', 'c8fd3d38e7888677195bbaf2e074d342fb94ac27', '58ea888dcf455', NULL, NULL, NULL),
(4, '', 'Link', '563d6098361ab1d2efd7b5730fa99fc997533ee2', '58ea89f673237', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user-role`
--

CREATE TABLE IF NOT EXISTS `tbl_user-role` (
  `Id_User` int(11) NOT NULL,
  `Id_Role` int(11) NOT NULL,
  `Dttm_Valid_From` datetime NOT NULL,
  `Dttm_Valid_To` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_User`,`Id_Role`),
  KEY `fk_Tbl_User-Role_Tbl_Role1_idx` (`Id_Role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_user-role`
--

INSERT INTO `tbl_user-role` (`Id_User`, `Id_Role`, `Dttm_Valid_From`, `Dttm_Valid_To`) VALUES
(2, 1, '2017-04-09 20:54:06', NULL),
(3, 2, '2017-04-09 21:16:29', NULL),
(4, 2, '2017-04-09 21:22:30', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tbl_ad`
--
ALTER TABLE `tbl_ad`
  ADD CONSTRAINT `fk_Tbl_Ad_Tbl_User1` FOREIGN KEY (`Id_User`) REFERENCES `tbl_user` (`Id_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tbl_ad-cat`
--
ALTER TABLE `tbl_ad-cat`
  ADD CONSTRAINT `fk_Tbl_Ad-Cat_Tbl_Ad1` FOREIGN KEY (`Tbl_Ad_Id_Ad`) REFERENCES `tbl_ad` (`Id_Ad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_Ad-Cat_Tbl_Category1` FOREIGN KEY (`Tbl_Category_id_Category`) REFERENCES `tbl_category` (`id_Category`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD CONSTRAINT `fk_Tbl_Permission_Tbl_Role1` FOREIGN KEY (`Id_Role`) REFERENCES `tbl_role` (`Id_Role`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tbl_user-role`
--
ALTER TABLE `tbl_user-role`
  ADD CONSTRAINT `fk_Tbl_User-Role_Tbl_Role1` FOREIGN KEY (`Id_Role`) REFERENCES `tbl_role` (`Id_Role`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Tbl_User-Role_Tbl_User1` FOREIGN KEY (`Id_User`) REFERENCES `tbl_user` (`Id_User`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
