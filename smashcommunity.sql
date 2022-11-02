-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 nov. 2022 à 21:29
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smashcommunity`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `id_question` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answers`
--

INSERT INTO `answers` (`id`, `id_auteur`, `pseudo_auteur`, `id_question`, `contenu`) VALUES
(1, 1, 'StoneGame', 1, 'Null mec'),
(2, 2, 'Coucou', 1, 'trop naze'),
(3, 3, 'Test', 1, 'Niquel tout ça');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `contenu` text NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `pseudo_auteur` varchar(255) NOT NULL,
  `date_publication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id`, `titre`, `description`, `contenu`, `id_auteur`, `pseudo_auteur`, `date_publication`) VALUES
(1, 'Penis', 'Penis', 'AHAHAH', 1, 'StoneGame', '30/10/2022'),
(2, 'Coucou Romain', 'Romain merci pour le css', 'ça va allez assez vite pour le css, recopie juste tout, après j&#039;adapte tout ce qu&#039;il faut et si tu me rend ça samedi soir, le site sera opérationnelle dimanche aprèm, mais vendredi soir c&#039;est le mieux', 3, 'Test', '02/11/2022');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `mdp`) VALUES
(1, 'StoneGame', 'Bernal', 'Pierre', '$2y$10$eoFpimS9MyN13G4pGopL5e5jgjPvcA85v2X.XLetb83w3XQtzMKo.'),
(2, 'Coucou', 'Pierre', 'Bernal', '$2y$10$vZepM1U7DNZlxOo3ropgjuzTpJT.24UeA2wiUepe4vWELdLWGHD5K'),
(3, 'Test', 'test', 'test', '$2y$10$HIxN.fo2xCYRagM7O7JbgO5PSoR6Y7Md4AZn.x26th87PgxtDmTyW');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
