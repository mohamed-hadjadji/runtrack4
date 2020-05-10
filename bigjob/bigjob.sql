-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 10 mai 2020 à 22:30
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
-- Base de données :  `bigjob`
--
CREATE DATABASE IF NOT EXISTS `bigjob` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bigjob`;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(3, 'Mohamed H debut', '2020-05-12 08:30:00', '2020-05-12 09:00:00'),
(4, 'Mohamed H fin', '2020-05-12 17:00:00', '2020-05-12 17:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `nom`, `prenom`, `password`, `rank`) VALUES
(35, 'jessica@laplateforme.io', 'Soriano', 'Jessica', '$2y$12$9eUTALzI5WoXUdwzrQU.ReM6FtX3EWjZlIGV7FKxlG/s9qu8SoTZ6', 'ModÃ©rateur'),
(30, 'roxan@laplateforme.io', 'RoumÃ©gas ', 'Roxan ', '$2y$12$di.tFFYVZemKqR.9r7eIcO8XanH9yHAQwbte2iRr2MgzPFIqOOava', 'Admin'),
(34, 'mohamed.hadjadji@laplateforme.io', 'HADJADJI', 'MOHAMED', '$2y$12$ysUsn24kbhL5sN9/8Q/9G.H7I.XpOzsU1T8rb8hPkCxQeBI2oEa7i', 'ElÃ¨ve'),
(36, 'gregory.fauvel@laplateforme.io', 'FAUVEL', 'GrÃ©gory', '$2y$12$cYQuxyiFrwZTrCx75WwS8eW6YlzL94UOBdOKzErOjuslZHg0/T63S', 'ElÃ¨ve'),
(37, 'admin@laplateforme.io', 'admin', 'admin', '$2y$12$graDbQH5zwn./gFrl2AgWuHVfGrvV1v91Y0EAfIWGFAYgAGh5FQ1S', 'Admin'),
(38, 'moderateur@laplateforme.io', 'moderateur', 'moderateur', '$2y$12$SabVm2eIfle4Jc240B8ILu8WPvlUjNm7H9XdvBa/uuv9iT9rNsqU6', 'ModÃ©rateur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
