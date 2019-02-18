-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 18 Février 2019 à 21:58
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
-- Structure de la table `Event`
--

CREATE TABLE `Event` (
  `idEvent` int(11) NOT NULL,
  `NomEvent` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `DebutEvent` datetime NOT NULL,
  `FinEvent` datetime NOT NULL,
  `Groupe` int(11) DEFAULT NULL,
  `Utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Event`
--

INSERT INTO `Event` (`idEvent`, `NomEvent`, `Description`, `DebutEvent`, `FinEvent`, `Groupe`, `Utilisateur`) VALUES
(1, 'Dentiste', 'Piqure', '2019-02-17 00:00:00', '2019-02-18 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Groupe`
--

CREATE TABLE `Groupe` (
  `idGroupe` int(11) NOT NULL,
  `NomGroupe` varchar(20) NOT NULL,
  `Utilisateurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Groupe_Utilisateurs`
--

CREATE TABLE `Groupe_Utilisateurs` (
  `idGroupe_Utilisateurs` int(11) NOT NULL,
  `idGroupe` int(11) NOT NULL,
  `idUtilisateurs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateurs`
--

CREATE TABLE `Utilisateurs` (
  `idUtilisateurs` int(11) NOT NULL,
  `Pseudo` varchar(20) NOT NULL,
  `Mdp` varchar(20) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Role` enum('admin','utilisateur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Utilisateurs`
--

INSERT INTO `Utilisateurs` (`idUtilisateurs`, `Pseudo`, `Mdp`, `Mail`, `Role`) VALUES
(1, 'root', 'root', 'root@root.com', 'utilisateur'),
(5, 'root1', 'root', 'root@root.com', 'utilisateur'),
(6, 'root12', 'root', 'root12@root.fr', 'utilisateur');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Event`
--
ALTER TABLE `Event`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `Utilisateur` (`Utilisateur`),
  ADD KEY `Groupe` (`Groupe`);

--
-- Index pour la table `Groupe`
--
ALTER TABLE `Groupe`
  ADD PRIMARY KEY (`idGroupe`);

--
-- Index pour la table `Groupe_Utilisateurs`
--
ALTER TABLE `Groupe_Utilisateurs`
  ADD PRIMARY KEY (`idGroupe_Utilisateurs`),
  ADD KEY `idGroupe` (`idGroupe`),
  ADD KEY `idUtilisateurs` (`idUtilisateurs`);

--
-- Index pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  ADD PRIMARY KEY (`idUtilisateurs`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Event`
--
ALTER TABLE `Event`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Groupe`
--
ALTER TABLE `Groupe`
  MODIFY `idGroupe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Groupe_Utilisateurs`
--
ALTER TABLE `Groupe_Utilisateurs`
  MODIFY `idGroupe_Utilisateurs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Utilisateurs`
--
ALTER TABLE `Utilisateurs`
  MODIFY `idUtilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Event`
--
ALTER TABLE `Event`
  ADD CONSTRAINT `Event_ibfk_1` FOREIGN KEY (`Utilisateur`) REFERENCES `Utilisateurs` (`idUtilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Event_ibfk_2` FOREIGN KEY (`Groupe`) REFERENCES `Groupe` (`idGroupe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Groupe_Utilisateurs`
--
ALTER TABLE `Groupe_Utilisateurs`
  ADD CONSTRAINT `Groupe_Utilisateurs_ibfk_1` FOREIGN KEY (`idUtilisateurs`) REFERENCES `Utilisateurs` (`idUtilisateurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Groupe_Utilisateurs_ibfk_2` FOREIGN KEY (`idGroupe`) REFERENCES `Groupe` (`idGroupe`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
