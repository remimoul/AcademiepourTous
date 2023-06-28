-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 juin 2023 à 19:08
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `academie`
--

-- --------------------------------------------------------

--
-- Structure de la table `courses`
--

CREATE TABLE `courses` (
  `idCourses` int(11) NOT NULL,
  `coursesCode` varchar(20) NOT NULL,
  `coursesTitle` varchar(100) NOT NULL,
  `coursesType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `courses`
--

INSERT INTO `courses` (`idCourses`, `coursesCode`, `coursesTitle`, `coursesType`) VALUES
(1, '1', 'Français', 'Soutien'),
(2, '2', 'Mathématique', 'Soutien'),
(3, '3', 'Aide aux devoirs', 'Soutien'),
(4, '4', 'Physique-Chimie', 'Soutien'),
(5, '5', 'Anglais', 'Soutien'),
(6, '6', 'Economie', 'Soutien');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `usersId` int(11) NOT NULL,
  `coursesId` int(11) NOT NULL,
  `reservationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `usersId`, `coursesId`, `reservationDate`) VALUES
(5, 15, 5, '2023-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `inscriptionDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`usersId`, `nom`, `prenom`, `mail`, `mobile`, `password`, `admin`, `inscriptionDate`) VALUES
(15, 'momo', 'momo', 'momo@gmail.com', '0645879865', '$2y$10$INyVKRLSLIl0Vej7od.DXO66KRqA80Ltx40dlNYV6Aido9xCwyVPi', 0, '2023-06-08 11:39:34'),
(16, 'Admin', 'Rémi', 'admin@gmail.com', '0645590008', '$2y$10$hdmOhknA0Tav7Gkvc7q7xub0ddCH1mPA/HZw2CrAjNW8b22wxFw6q', 1, '2023-06-08 11:40:37'),
(17, 'Jean', 'Jean', 'jean@gmail.com', '0645678766', '$2y$10$A4b8OJLkXGH6Yo4pinu29O1ANqkB8OPX7LaerHb35KQ4pa8U/5x4.', 0, '2023-06-28 11:46:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`idCourses`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coursesId` (`coursesId`),
  ADD KEY `usersId` (`usersId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `courses`
--
ALTER TABLE `courses`
  MODIFY `idCourses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`coursesId`) REFERENCES `courses` (`idCourses`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`usersId`) REFERENCES `users` (`usersId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
