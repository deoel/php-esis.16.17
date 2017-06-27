-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 25 Juin 2017 à 12:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `attribution_fonctions`
--
CREATE DATABASE IF NOT EXISTS `attribution_fonctions` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `attribution_fonctions`;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `genre` char(1) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idfonction` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `nom_UNIQUE` (`nom`),
  UNIQUE KEY `tel_UNIQUE` (`tel`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_agent_fonction_idx` (`idfonction`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`id`, `nom`, `genre`, `tel`, `email`, `idfonction`) VALUES
(1, 'BITOTA MASANGU Patricia', 'F', '+24323037963', 'pat@gmail.com', 2),
(2, 'NGOY KYALUPATA Heritier', 'M', '+24323037852', 'heritier@gmail.com', 6),
(3, 'RAMAZANI NASSOR Lord', 'M', '+24323037741', 'lord@gmail.com', 5),
(4, 'BAMWEPELA MBAYO Maurice', 'M', '+24323037456', 'maurice@gmail.com', 3),
(5, 'FUMUNI BUTAKAR Germaine', 'F', '+24323037123', 'germaine@gmail.com', 3),
(6, 'LUMBU POMBO Stella', 'F', '+24323037159', 'stella@gmail.com', 6);

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE IF NOT EXISTS `fonction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `intitule_UNIQUE` (`intitule`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `fonction`
--

INSERT INTO `fonction` (`id`, `intitule`, `description`) VALUES
(1, 'RÃ©seaux informatiques', ' Mettre des ordinateurs et serveurs en rÃ©seau, Configurer des ordinateurs pour l''accÃ¨s Ã  un rÃ©seau.'),
(2, 'DÃ©veloppement et maintenance', 'DÃ©velopper/maintenir des sites web, des outils et des bases de donnÃ©es'),
(3, 'Maintenance des logiciels', 'Configurer un poste de travail, RÃ©soudre un dysfonctionnement de logiciels'),
(4, 'Maintenance du matÃ©riel', 'Remplacer et ajouter un ordinateur et ses composants, RemÃ©dier des pannes matÃ©rielles'),
(5, 'SÃ©curitÃ©', 'Appliquer les stratÃ©gies de sÃ©curitÃ© (piratage informatique, confidentialitÃ©), Appliquer les stratÃ©gies de protection physique des donnÃ©es'),
(6, 'Communication professionnelle', 'Donner des conseils aux utilisateurs, Orienter un client dans lâ€™acquisition de matÃ©riel, Collaborer en entreprise, Assurer un service Servicedesk/Helpline, Incidents / Gestion de problÃ¨mes (problem management) , ProcÃ©dures, instructions de travail');

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE IF NOT EXISTS `tache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `datedebut` datetime NOT NULL,
  `datefin` datetime NOT NULL,
  `idagent` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_tache_agent1_idx` (`idagent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `tache`
--

INSERT INTO `tache` (`id`, `description`, `datedebut`, `datefin`, `idagent`) VALUES
(1, 'Etablir un cahier des charges', '2017-06-25 00:00:00', '2017-06-29 00:00:00', 2),
(2, 'Etablir un prototype/maquette', '2017-06-28 00:00:00', '2017-07-03 00:00:00', 4),
(3, 'Concevoir la structure des bases de données', '2017-07-02 00:00:00', '2017-07-08 00:00:00', 1),
(4, 'Mettre en production un site statique', '2017-07-04 00:00:00', '2017-07-09 00:00:00', 3),
(5, 'Maintenir et mettre à jour la structure et le contenu d''un site', '2017-06-21 00:00:00', '2017-07-06 00:00:00', 2),
(6, 'Concevoir et programmer des applications bureautiques', '2017-06-02 00:00:00', '2017-06-27 00:00:00', 6),
(7, 'Concevoir et programmer des applications\r\nrobotiques', '2017-07-20 00:00:00', '2017-07-29 00:00:00', 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_agent_fonction` FOREIGN KEY (`idfonction`) REFERENCES `fonction` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `fk_tache_agent1` FOREIGN KEY (`idagent`) REFERENCES `agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
