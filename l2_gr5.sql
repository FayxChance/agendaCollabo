-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 19 Février 2019 à 01:22
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `l2_gr5`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idEvent` int(11) NOT NULL,
  `NomEvent` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `DebutEvent` datetime NOT NULL,
  `FinEvent` datetime NOT NULL,
  `Groupe` int(11) DEFAULT NULL,
  `Utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`idEvent`, `NomEvent`, `Description`, `DebutEvent`, `FinEvent`, `Groupe`, `Utilisateur`) VALUES
(1, 'Dentiste', 'Piqure', '2019-02-17 00:00:00', '2019-02-18 00:00:00', NULL, NULL),
(2, 'Yolo', 'Yolo', '2019-02-19 16:30:00', '2019-02-19 16:35:00', NULL, 1),
(4, 'Projet', 'Un oral', '2019-02-19 13:00:00', '2019-02-19 16:00:00', NULL, 1),
(5, 'Piqure', 'Dans le cul', '2019-02-19 16:00:00', '2019-02-19 17:00:00', NULL, 1),
(6, 'Vacance', '', '2019-02-22 17:30:00', '2019-02-24 18:30:00', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idGroupe` int(11) NOT NULL,
  `NomGroupe` varchar(20) NOT NULL,
  `Utilisateurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `groupe_utilisateurs`
--

CREATE TABLE `groupe_utilisateurs` (
  `idGroupe_Utilisateurs` int(11) NOT NULL,
  `idGroupe` int(11) NOT NULL,
  `idUtilisateurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Mdp` varchar(20) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Role` enum('admin','utilisateur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateurs`, `Pseudo`, `Mdp`, `Mail`, `Role`) VALUES
(1, 'root', 'root', 'root@root.com', 'utilisateur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `Utilisateur` (`Utilisateur`),
  ADD KEY `Groupe` (`Groupe`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`idGroupe`);

--
-- Index pour la table `groupe_utilisateurs`
--
ALTER TABLE `groupe_utilisateurs`
  ADD PRIMARY KEY (`idGroupe_Utilisateurs`),
  ADD KEY `idGroupe` (`idGroupe`),
  ADD KEY `idUtilisateurs` (`idUtilisateurs`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`idUtilisateurs`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `idGroupe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `groupe_utilisateurs`
--
ALTER TABLE `groupe_utilisateurs`
  MODIFY `idGroupe_Utilisateurs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `Event_ibfk_1` FOREIGN KEY (`Utilisateur`) REFERENCES `utilisateurs` (`idUtilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Event_ibfk_2` FOREIGN KEY (`Groupe`) REFERENCES `groupe` (`idGroupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupe_utilisateurs`
--
ALTER TABLE `groupe_utilisateurs`
  ADD CONSTRAINT `Groupe_Utilisateurs_ibfk_1` FOREIGN KEY (`idUtilisateurs`) REFERENCES `utilisateurs` (`idUtilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Groupe_Utilisateurs_ibfk_2` FOREIGN KEY (`idGroupe`) REFERENCES `groupe` (`idGroupe`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
