-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Novembre 2018 à 13:19
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rental_agency_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `idAgence` int(11) NOT NULL,
  `nomAgence` text NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `rue` varchar(255) NOT NULL,
  `numRue` int(11) NOT NULL,
  `codePostal` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`idAgence`, `nomAgence`, `latitude`, `longitude`, `rue`, `numRue`, `codePostal`, `ville`) VALUES
(1, 'ChezToi', 43.4965, 1.38175, 'rue de l\'escapade', 5, '31120', 'Roquettes'),
(2, 'ChezMoi', 43.4651, 1.31768, 'Boulevard de Peyramond', 71, '31600', 'Muret');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `idConsult` int(11) NOT NULL,
  `fk_idUser` int(11) NOT NULL,
  `fk_idVehicule` int(11) NOT NULL,
  `dateConsult` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `idLocation` int(11) NOT NULL,
  `fk_idUser` int(11) NOT NULL,
  `fk_idVehicule` int(11) NOT NULL,
  `dateDeb` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `montant` float NOT NULL,
  `typePaiement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`idLocation`, `fk_idUser`, `fk_idVehicule`, `dateDeb`, `dateFin`, `montant`, `typePaiement`) VALUES
(1, 1, 1, '2018-11-05 14:00:00', '2018-11-05 16:00:00', 3, 'CB'),
(2, 2, 2, '2018-11-11 09:00:00', '2018-11-11 10:00:00', 2.5, 'CHEQUE');

-- --------------------------------------------------------

--
-- Structure de la table `typevehicule`
--

CREATE TABLE `typevehicule` (
  `idTypeVehi` int(11) NOT NULL,
  `nom` text NOT NULL,
  `classification` text NOT NULL,
  `prixHeure` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `typevehicule`
--

INSERT INTO `typevehicule` (`idTypeVehi`, `nom`, `classification`, `prixHeure`) VALUES
(1, 'Trottinette', '', 1.5),
(2, 'vélo électrique', '', 2.5);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mail` varchar(255) CHARACTER SET latin1 NOT NULL,
  `telephone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `mail`, `telephone`, `password`, `isAdmin`) VALUES
(1, 'Lopez', 'Jaques', 'jaques.lopez@mail.com', '0561232313', 'test', 0),
(2, 'doo', 'deule', 'deule.doo@mail.com', '0561232313', 'test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idVehicule` int(11) NOT NULL,
  `nom` text NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1',
  `fk_idTypeVehi` int(11) NOT NULL,
  `fk_idAgence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`idVehicule`, `nom`, `statut`, `fk_idTypeVehi`, `fk_idAgence`) VALUES
(1, 'xd2364', 1, 1, 1),
(2, 'vv4298', 1, 2, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`idAgence`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`idConsult`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idLocation`);

--
-- Index pour la table `typevehicule`
--
ALTER TABLE `typevehicule`
  ADD PRIMARY KEY (`idTypeVehi`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idVehicule`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `idAgence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `idConsult` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `idLocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `typevehicule`
--
ALTER TABLE `typevehicule`
  MODIFY `idTypeVehi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idVehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
