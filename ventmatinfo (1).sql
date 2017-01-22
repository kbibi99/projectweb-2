-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 22 Janvier 2017 à 17:16
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ventmatinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounttypes`
--

CREATE TABLE `accounttypes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `accounttypes`
--

INSERT INTO `accounttypes` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie_id` float NOT NULL,
  `image` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'commerciaux');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `smtpserver` varchar(255) NOT NULL,
  `smtpuser` varchar(255) NOT NULL,
  `smtppass` varchar(255) NOT NULL,
  `smtpport` varchar(10) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `infos`
--

INSERT INTO `infos` (`id`, `name`, `adress`, `smtpserver`, `smtpuser`, `smtppass`, `smtpport`, `tel`) VALUES
(1, 'Tera soft', 'tunisia', 'smtp.gmail.com', 'kbibi99@gmail.com', 'ghazerty2299056624721635K', '25', '25882553');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `secondName` varchar(45) DEFAULT NULL,
  `accounttype_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstName`, `secondName`, `accounttype_id`) VALUES
(1, 'admin', 'admin', 'khalil.bibi@enis.tn', 'khalil ', 'bibi', 1),
(2, 'kbibi', 'ghazerty', 'kbibi99', 'khalil', 'khalil', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accounttypes`
--
ALTER TABLE `accounttypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lib_account_UNIQUE` (`name`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `idAccount_type_idx` (`accounttype_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `accounttypes`
--
ALTER TABLE `accounttypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
