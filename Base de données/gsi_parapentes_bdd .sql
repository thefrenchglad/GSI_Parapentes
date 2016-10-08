-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 08 Octobre 2016 à 15:14
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsi_parapentes_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `numPersonne` int(11) DEFAULT NULL,
  `numService` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `controletechnique`
--

CREATE TABLE `controletechnique` (
  `numControleTechnique` int(10) UNSIGNED NOT NULL,
  `dateControle` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `estcompose`
--

CREATE TABLE `estcompose` (
  `numPiece` int(11) DEFAULT NULL,
  `numParapente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `numControleTechnique` int(11) DEFAULT NULL,
  `numPiece` int(11) DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `numFournisseur` int(11) NOT NULL,
  `nom` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `numPilote` int(11) NOT NULL,
  `numParapente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `numModele` int(11) NOT NULL,
  `nom` char(30) NOT NULL,
  `nbPlaces` int(11) NOT NULL,
  `numFournisseur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parapente`
--

CREATE TABLE `parapente` (
  `numParapente` int(11) NOT NULL,
  `numModele` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `parcours`
--

CREATE TABLE `parcours` (
  `numParcours` int(11) NOT NULL,
  `nbHeures` int(11) NOT NULL,
  `numSiteDepart` int(11) NOT NULL,
  `numSiteArrivee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE `passager` (
  `numPassager` int(11) NOT NULL,
  `nomPassager` varchar(30) NOT NULL,
  `prenomPassager` varchar(30) NOT NULL,
  `poidsPassager` int(11) NOT NULL,
  `dateNaissancePassager` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `numPiece` int(10) UNSIGNED NOT NULL,
  `nomPiece` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pilote`
--

CREATE TABLE `pilote` (
  `numLicence` int(11) NOT NULL,
  `numPilote` int(11) DEFAULT NULL,
  `niveau` int(10) UNSIGNED NOT NULL,
  `nomPilote` varchar(30) NOT NULL,
  `prenomPilote` varchar(30) NOT NULL,
  `dateNaissancePilote` date NOT NULL,
  `poidsPilote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `piloterpar`
--

CREATE TABLE `piloterpar` (
  `numLicence` int(11) DEFAULT NULL,
  `numParapente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `prix` int(11) NOT NULL,
  `casque` tinyint(1) NOT NULL,
  `numPilote` int(11) NOT NULL,
  `numPassager` int(11) NOT NULL,
  `numVol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

CREATE TABLE `salarie` (
  `numSalarie` int(11) NOT NULL,
  `salaire` int(11) DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  `dateNaissanceSalarie` int(11) NOT NULL,
  `nomSalarie` varchar(30) NOT NULL,
  `prenomSalarie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `numService` int(10) UNSIGNED NOT NULL,
  `intitule` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `numSite` int(11) NOT NULL,
  `nom` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `numVol` int(11) NOT NULL,
  `dateVol` date NOT NULL,
  `heureDepart` int(11) NOT NULL,
  `numParcours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD UNIQUE KEY `numPersonne` (`numPersonne`),
  ADD KEY `fk_piloterPar_numService` (`numService`);

--
-- Index pour la table `controletechnique`
--
ALTER TABLE `controletechnique`
  ADD PRIMARY KEY (`numControleTechnique`);

--
-- Index pour la table `estcompose`
--
ALTER TABLE `estcompose`
  ADD UNIQUE KEY `numPiece` (`numPiece`),
  ADD KEY `fk_estCompose_numParapente` (`numParapente`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD KEY `fk_etat_numControle` (`numControleTechnique`),
  ADD KEY `fk_etat_numPiece` (`numPiece`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`numFournisseur`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`numPilote`,`numParapente`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`numModele`),
  ADD KEY `modele_fk` (`numFournisseur`);

--
-- Index pour la table `parapente`
--
ALTER TABLE `parapente`
  ADD PRIMARY KEY (`numParapente`),
  ADD KEY `parapente_heritage` (`numModele`);

--
-- Index pour la table `parcours`
--
ALTER TABLE `parcours`
  ADD PRIMARY KEY (`numParcours`),
  ADD KEY `parcours_fk1` (`numSiteDepart`),
  ADD KEY `parcours_fk2` (`numSiteArrivee`);

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
  ADD PRIMARY KEY (`numPassager`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`numPiece`);

--
-- Index pour la table `pilote`
--
ALTER TABLE `pilote`
  ADD PRIMARY KEY (`numLicence`),
  ADD KEY `fk_pilote` (`numPilote`);

--
-- Index pour la table `piloterpar`
--
ALTER TABLE `piloterpar`
  ADD KEY `fk_piloterPar_numLicence` (`numLicence`),
  ADD KEY `fk_piloterPar_numParapente` (`numParapente`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numPilote`,`numPassager`,`numVol`),
  ADD KEY `reservation_fk2` (`numPassager`),
  ADD KEY `reservation_fk3` (`numVol`);

--
-- Index pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD PRIMARY KEY (`numSalarie`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`numService`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`numSite`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`numVol`),
  ADD KEY `vol_fk` (`numParcours`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `controletechnique`
--
ALTER TABLE `controletechnique`
  MODIFY `numControleTechnique` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `numPiece` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `numService` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
