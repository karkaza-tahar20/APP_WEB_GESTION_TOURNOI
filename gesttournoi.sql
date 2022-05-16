-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 30 déc. 2019 à 20:39
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gesttournoi`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

DROP TABLE IF EXISTS `administrateurs`;
CREATE TABLE IF NOT EXISTS `administrateurs` (
  `id_administrateur` int(20) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id_administrateur`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id_administrateur`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'taha', 'karkaza');

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

DROP TABLE IF EXISTS `equipes`;
CREATE TABLE IF NOT EXISTS `equipes` (
  `id_equipe` int(20) NOT NULL AUTO_INCREMENT,
  `nom_equipe` varchar(30) NOT NULL,
  `ville_equipe` varchar(30) NOT NULL,
  `titres_equipe` varchar(30) NOT NULL,
  `id_groupe` varchar(30) NOT NULL,
  `id_ligue` varchar(30) NOT NULL,
  `notes` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id_equipe`),
  KEY `id_ligue` (`id_ligue`),
  KEY `id_groupe` (`id_groupe`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id_equipe`, `nom_equipe`, `ville_equipe`, `titres_equipe`, `id_groupe`, `id_ligue`, `notes`, `image`) VALUES
(1, 'Athletic Bilbao', 'Bilbao', '2 Coupes', '1', 'ligue 1', '0 Points', 'img/equip1.png'),
(2, 'Betis Seville', 'Seville', '2 Coupes', '1', 'ligue 1', '0 Points', 'img/equip3.png'),
(3, 'Eibar', 'Eibar', '0 Coupes', '1', 'ligue 2', '3 points', 'img/equip6.png'),
(4, 'Espanyol Barcelone', 'Barcelone', '1 Coupes', '1', 'ligue 2', '0 Points', 'img/equip7.png'),
(5, 'Grenade', 'Grenade Espanyol', '0 coupes', '2', 'ligue 2', '0 Points', 'img/equip12.png'),
(6, 'Levante', 'Valence', '1 Coupes', '2', 'ligue 2', '3 Points', 'img/equip14.png'),
(7, 'Majorque', 'Maillorque', '1 Coupes', '2', 'ligue 2', '3 Points', 'img/equip15.png'),
(8, 'Osasuna', 'Pampelune', '3 Coupes', '2', 'ligue 2', '0 Points', 'img/equip16.png'),
(9, 'Real Sociedad', 'Saint-SÃ©bastien', '4 Coupes', '3', 'ligue 1', '3 Points', 'img/equip18.png'),
(10, 'Villareal', 'CastellÃ³n', '3 Coupes', '3', 'ligue 1', '0 Points', 'img/equip20.png'),
(11, 'Leganes', 'LeganÃ©s', '1 Coupes', '3', 'ligue 2', '0 Points', 'img/equip13.png'),
(12, 'Atletico Madride', 'Madrid', '5 Coupes', '3', 'ligue 1', '3 points', 'img/equip2.png'),
(13, 'Real madrid', 'Madrid', '20 coupes', '3', 'ligue 1', '12 points', 'img/equip17.png');

-- --------------------------------------------------------

--
-- Structure de la table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `id_groupe` int(10) NOT NULL AUTO_INCREMENT,
  `nom_groupe` varchar(30) NOT NULL,
  `equipe1` varchar(30) NOT NULL,
  `equipe2` varchar(30) NOT NULL,
  `equipe3` varchar(30) NOT NULL,
  `equipe4` varchar(30) NOT NULL,
  PRIMARY KEY (`id_groupe`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupes`
--

INSERT INTO `groupes` (`id_groupe`, `nom_groupe`, `equipe1`, `equipe2`, `equipe3`, `equipe4`) VALUES
(1, 'Groupe A', 'Athletic Bilbao', 'Betis Seville', 'Eibar', 'Espanyol Barcelone'),
(2, 'Groupe B', 'Grenade', 'Levante', 'Majorque', 'Osassuna'),
(3, 'Groupe C', 'Real Sociedad', 'Villareal', 'Leganes', 'Atletico Madrid');

-- --------------------------------------------------------

--
-- Structure de la table `ligues`
--

DROP TABLE IF EXISTS `ligues`;
CREATE TABLE IF NOT EXISTS `ligues` (
  `id_ligue` varchar(30) NOT NULL,
  `nom_ligue` varchar(30) NOT NULL,
  PRIMARY KEY (`id_ligue`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ligues`
--

INSERT INTO `ligues` (`id_ligue`, `nom_ligue`) VALUES
('ligue 1', 'Espagne'),
('ligue 2', 'Espagne');

-- --------------------------------------------------------

--
-- Structure de la table `matche`
--

DROP TABLE IF EXISTS `matche`;
CREATE TABLE IF NOT EXISTS `matche` (
  `id_match` int(20) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `heure` varchar(30) NOT NULL,
  `id_equipe` int(20) NOT NULL,
  `image` varchar(30) NOT NULL,
  `id_terain` int(20) NOT NULL,
  PRIMARY KEY (`id_match`),
  KEY `id_equipe` (`id_equipe`),
  KEY `id_terain` (`id_terain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

DROP TABLE IF EXISTS `matchs`;
CREATE TABLE IF NOT EXISTS `matchs` (
  `id_match` int(11) NOT NULL AUTO_INCREMENT,
  `equipe1` varchar(50) DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `equipe2` varchar(50) DEFAULT NULL,
  `image2` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `heure` varchar(30) NOT NULL,
  `nom_terain` varchar(30) NOT NULL,
  KEY `id_match` (`id_match`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matchs`
--

INSERT INTO `matchs` (`id_match`, `equipe1`, `image1`, `equipe2`, `image2`, `date`, `heure`, `nom_terain`) VALUES
(6, 'Athletico Bilbao', 'img/equip1.png', 'Eibar', 'img/equip6.png', '10-1-2020', '20:45', 'Santiago Bernabeu'),
(7, 'Betis Seville ', 'img/equip3.png', 'Espanyol Barcelone', 'img/equip7.png', '10-2-2020', '19:45', 'Sao Paolo'),
(8, 'Grenade', 'img/equip12.png', 'Majorque', 'img/equip15.png', '11-1-2020', '20:45', 'Metalla'),
(9, 'Levante', 'img/equip14.png', 'Osasuna', 'img/equip16.png', '12-1-2020', '19:45', 'Camp Nou'),
(10, 'Villareal ', 'img/equip13.png', 'Atletico Mdrid', 'img/equip2.png', '11-2-2020', '20:45', 'Santiago Bernabuo'),
(11, 'Real Sociedad', 'img/equip18.png', 'Leganes', 'img/equip13.png', '12-2-2020', '19:45', 'San Siro'),
(13, 'valencia', 'img/equip4.png', 'Villareal', 'img/equip9.png', '10-1-2020', '20:45', 'Camp Nou'),
(14, 'Real Madrid', 'img/equip17.png', 'Fcb Barcelon', 'img/equip8.png', '2-1-2020', '19:45', 'Camp Nou');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `email` varchar(50) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mobile` int(20) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`email`, `nom`, `prenom`, `mobile`, `message`) VALUES
('taha00krz@gmail.com', 'tahar', 'karkaza', 645676476, 'bonjour ');

-- --------------------------------------------------------

--
-- Structure de la table `terains`
--

DROP TABLE IF EXISTS `terains`;
CREATE TABLE IF NOT EXISTS `terains` (
  `id_terain` int(10) NOT NULL AUTO_INCREMENT,
  `nom_terain` varchar(30) NOT NULL,
  `ville_terain` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `surface` varchar(30) NOT NULL,
  `capacite` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id_terain`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `terains`
--

INSERT INTO `terains` (`id_terain`, `nom_terain`, `ville_terain`, `adresse`, `surface`, `capacite`, `image`) VALUES
(2, 'San Siro', 'Italy', '14 RUE A', '120 Metres', '500 000 Places', 'img/SanSiro.png'),
(3, 'Metalla', 'Espagne', '14 Rue C', '120 Metres', '500 000 Places', 'img/Mastala.png'),
(4, 'Sao Paolo', 'Espagne', '15 RUE Tripacan', '120 Metres', '800 000 Places', 'img/terain1.jpg'),
(5, 'Metropolitano', 'Espagne', '16 RUE Pontera', '120 Metres', '800 000 Places', 'img/terain4.jpg'),
(7, 'Camp Nou', 'Bercelona', '11 RUE Bernakito', '120 Metres', '900 000 Places', 'img/terain6.jpg');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `matche`
--
ALTER TABLE `matche`
  ADD CONSTRAINT `matche_ibfk_1` FOREIGN KEY (`id_terain`) REFERENCES `terains` (`id_terain`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matche_ibfk_2` FOREIGN KEY (`id_equipe`) REFERENCES `equipes` (`id_equipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
