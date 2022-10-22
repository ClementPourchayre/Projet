-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 15 Avril 2022 à 13:34
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `farmbot`
--
CREATE DATABASE IF NOT EXISTS `farmbot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `farmbot`;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE IF NOT EXISTS `capteur` (
  `idcapteur` int(11) NOT NULL AUTO_INCREMENT,
  `capteur_nom` varchar(25) NOT NULL,
  `capteur_ref` varchar(25) NOT NULL,
  `capteur_valeur` float NOT NULL,
  PRIMARY KEY (`idcapteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `capteur`
--

INSERT INTO `capteur` (`idcapteur`, `capteur_nom`, `capteur_ref`, `capteur_valeur`) VALUES
(1, 'humidité', 'YL-69', 0),
(2, 'Camera', 'TENG-END-31UB', 0);

-- --------------------------------------------------------

--
-- Structure de la table `legume`
--

CREATE TABLE IF NOT EXISTS `legume` (
  `idlegume` int(11) NOT NULL AUTO_INCREMENT,
  `legume_nom` varchar(50) NOT NULL,
  `legume_race` varchar(50) NOT NULL,
  `legume_humidite` float NOT NULL,
  `legume_taille` float NOT NULL,
  `legume_espace` float NOT NULL,
  PRIMARY KEY (`idlegume`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `legume`
--

INSERT INTO `legume` (`idlegume`, `legume_nom`, `legume_race`, `legume_humidite`, `legume_taille`, `legume_espace`) VALUES
(1, 'Salade', 'Feuille de chêne', 70, 15, 20.5),
(2, 'Radis', 'Géant rouge', 65, 3, 5);

-- --------------------------------------------------------

--
-- Structure de la table `moteur`
--

CREATE TABLE IF NOT EXISTS `moteur` (
  `idmoteur` int(11) NOT NULL AUTO_INCREMENT,
  `moteur_nom` varchar(50) NOT NULL,
  `moteur_ref` varchar(50) NOT NULL,
  PRIMARY KEY (`idmoteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `moteur`
--

INSERT INTO `moteur` (`idmoteur`, `moteur_nom`, `moteur_ref`) VALUES
(1, 'STEPPERONLINE nema17', '17HS19-20045 1');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`) VALUES
(1, 'clem', 'clem'),
(2, 'lol', '07123e1f482356c415f684407a3b8723e10b2cbbc0b8fcd6282c49d37c9c1abc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
