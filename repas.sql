-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 24 Février 2017 à 11:50
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cantine`
--

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE IF NOT EXISTS `repas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` date NOT NULL,
  `entree` varchar(255) NOT NULL,
  `legumes` varchar(255) NOT NULL,
  `viande` varchar(255) NOT NULL,
  `dessert` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `repas`
--

INSERT INTO `repas` (`id`, `jour`, `entree`, `legumes`, `viande`, `dessert`) VALUES
(2, '0000-00-00', '', '', '', ''),
(4, '2017-02-28', 'gergerger', 'gergergerg', 'egrgerger', 'gegrgerg'),
(5, '2017-03-02', 'brbergergg', 'regergerg', 'ergergerg', 'ergegergerg'),
(6, '2017-03-03', 'grregerg', 'ergerger', 'gergegreg', 'ergergerg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
