-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 14 oct. 2020 à 15:44
-- Version du serveur :  5.7.26
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `minishop`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `img`) VALUES
(1, 'jambon', 'tres bonne qualité', 10, 'https://loremflickr.com/g/350/260/product'),
(2, 'bonbon', 'tres sucre', 20, 'https://loremflickr.com/g/350/260/product'),
(3, 'pain', 'bonne farine', 34, 'https://loremflickr.com/g/350/260/product'),
(4, 'cornichon', 'tres croquant', 12, 'https://loremflickr.com/g/350/260/product'),
(5, 'lait', 'de vache', 45, 'https://loremflickr.com/g/350/260/product'),
(6, 'fromage', 'pour sandwitch', 46, 'https://loremflickr.com/g/350/260/product'),
(7, 'beurre', 'breton', 9, 'https://loremflickr.com/g/350/260/product'),
(8, 'mayo', 'de dijon', 14, 'https://loremflickr.com/g/350/260/product'),
(9, 'moutarde', 'de dijon', 11, 'https://loremflickr.com/g/350/260/product');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

