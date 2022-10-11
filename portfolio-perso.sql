-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 oct. 2022 à 15:55
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
-- Base de données : `portfolio-perso`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `lien` text DEFAULT NULL,
  `niveau_maitrise` smallint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `nom`, `categorie`, `image`, `lien`, `niveau_maitrise`) VALUES
(1, 'HTML', 'langage', 'https://cdn3d.iconscout.com/3d/free/thumb/html-5728485-4781249.png', '#', 85),
(2, 'CSS', 'langage', '#', '#', 65),
(3, 'JS', 'langage', '#', '#', 60),
(4, 'C#', 'langage', 'https://cdn3d.iconscout.com/3d/free/thumb/c-6432339-5326395.png', '#', 70),
(5, 'JAVA', 'langage', '#', '#', 70),
(6, 'Python', 'langage', '#', '#', 85),
(7, 'Wordpress', 'CMS', '#', '#', 75),
(8, 'Shopify', 'CMS', '#', '#', 90),
(9, 'Wix', 'CMS', '#', '#', 100),
(10, 'SQL', 'serveur', '#', '#', 90),
(11, 'PHP', 'serveur', '#', '#', 75),
(12, 'NodeJS', 'serveur', '#', '#', 65);

-- --------------------------------------------------------

--
-- Structure de la table `projets_persos`
--

CREATE TABLE `projets_persos` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_real` date NOT NULL,
  `lien` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets_persos`
--

INSERT INTO `projets_persos` (`id`, `titre`, `description`, `date_real`, `lien`, `image`) VALUES
(1, 'Projet 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-10-04', '#', 'https://images-na.ssl-images-amazon.com/images/I/41g6jROgo0L.png'),
(2, 'Projet 2 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-09-02', '#', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj5WBUPLzPOBz8y7pLpQfTXhs0XGoI3mXP2w&usqp=CAU'),
(3, 'Projet 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2022-10-20', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFGawC4ToKE3wCtMfBzuBq4RI-x9m-Ir-Iww&usqp=CAU', '#');

-- --------------------------------------------------------

--
-- Structure de la table `projets_sco`
--

CREATE TABLE `projets_sco` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  `descriptio` text DEFAULT NULL,
  `date_real` date DEFAULT NULL,
  `quel_cours` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `lien` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projets_sco`
--

INSERT INTO `projets_sco` (`id`, `titre`, `descriptio`, `date_real`, `quel_cours`, `img`, `lien`) VALUES
(1, 'Projet Sco 1', 'Oui baguette', '2022-10-03', 'sds', 'https://picsum.photos/id/237/536/354', '#'),
(2, 'Projet sco 2', '#', '2022-10-10', '##', 'https://picsum.photos/id/237/536/354', '#'),
(3, 'Projet 3', 'Je baguette', '2022-10-05', 'ss', 'https://www.computerhope.com/jargon/r/random-dice.jpg', '#');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets_persos`
--
ALTER TABLE `projets_persos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projets_sco`
--
ALTER TABLE `projets_sco`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `projets_persos`
--
ALTER TABLE `projets_persos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `projets_sco`
--
ALTER TABLE `projets_sco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
