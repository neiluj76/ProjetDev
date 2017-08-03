-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Août 2017 à 14:46
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `getmeanswers`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` text NOT NULL,
  `nombrejeton` int(11) DEFAULT NULL,
  `dateconnexion` datetime DEFAULT NULL,
  `dateinscription` datetime DEFAULT NULL,
  `datenaissance` datetime DEFAULT NULL,
  `listeamis` text,
  `rang` varchar(25) DEFAULT NULL,
  `lieux` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `mdp`, `nom`, `prenom`, `nombrejeton`, `dateconnexion`, `dateinscription`, `datenaissance`, `listeamis`, `rang`, `lieux`) VALUES
(9, 'alexis', 'alexis', 'alexis', 'alexis', 42, '2017-07-25 00:00:00', '2017-07-24 05:12:00', '1994-12-31 00:00:00', NULL, NULL, 'France'),
(42, 'julien', 'julien', 'julien', 'julien', 42, '2017-07-25 00:00:00', '2017-07-24 05:12:00', '1994-12-31 00:00:00', NULL, NULL, 'France'),
(43, 'test', 'test123', 'testeur', 'test', 10, NULL, NULL, NULL, NULL, '0', 'France');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
