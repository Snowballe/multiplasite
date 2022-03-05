-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 mars 2022 à 09:21
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `multipla`
--

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `id_texte` int(11) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `uploaded_photos` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `profile_picture`, `id_texte`, `created_at`, `updated_at`, `uploaded_photos`) VALUES
(1, 'Maël', 'poil', 1, '02/03/22', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
