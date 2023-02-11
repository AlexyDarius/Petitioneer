-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 11 fév. 2023 à 04:47
-- Version du serveur :  10.3.37-MariaDB-log-cll-lve
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `furiehul_petition`
--

-- --------------------------------------------------------

--
-- Structure de la table `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `commentaire` text DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `token` varchar(255) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `users2`
--

INSERT INTO `users2` (`id`, `nom`, `prenom`, `email`, `ville`, `age`, `commentaire`, `verified`, `token`, `date`) VALUES
(9, 'roman', 'alexy', 'alexy.roman@live.fr', 'Toulouse', 22, '', 1, 'a1ef3045444ffab2033c2ad9229d2f796621a1257d824c1a33305bad3994ade5fa88ace3398543d7f027405387531b6504ae', '2023-02-10 18:27:21'),
(2, 'n1', 'p1', 'mail1@gmail.com', 'Toulouse', 20, NULL, 1, NULL, NULL),
(3, 'n2', 'p2', 'mail2@gmail.com', 'Toulouse', 28, NULL, 1, NULL, NULL),
(5, 'n3', 'p3', 'mail3@gmail.com', 'Toulouse', 38, NULL, 1, NULL, '2023-02-10 05:00:00'),
(6, 'n4', 'p4', 'mail4@gmail.com', 'Paris', 22, NULL, 1, NULL, '2023-02-10 14:07:00'),
(7, 'n5', 'p5', 'mail5@gmail.com', 'Paris', 62, NULL, 1, NULL, '2023-02-10 14:08:37'),
(8, 'n6', 'p6', 'mail6@gmail.com', 'Toulouse', 60, NULL, 1, NULL, '2023-02-10 14:11:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
