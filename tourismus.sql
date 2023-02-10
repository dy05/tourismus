-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour tourismus
CREATE DATABASE IF NOT EXISTS `tourismus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tourismus`;

-- Export de la structure de la table tourismus. articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` longtext,
  `description` longtext,
  `titre` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `content` longtext,
  `slug` longtext,
  `updated_at` datetime DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categories` varchar(50) DEFAULT NULL,
  `regions` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Export de données de la table tourismus.articles : ~5 rows (environ)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `contenu`, `description`, `titre`, `title`, `created_at`, `content`, `slug`, `updated_at`, `image`, `categories`, `regions`) VALUES
	(1, 'bienvenue 1', 'Welcome herer akhala sita', 'titre un', 'title one', NULL, NULL, 'contenu', NULL, 'lobe.png', NULL, NULL),
	(3, 'bienvenue 3', 'Welcome herer akhala sita', 'titre 3', 'title 5', NULL, NULL, 'haha-23-lola', NULL, NULL, NULL, NULL),
	(2, 'bienvenue 2', 'Welcome herer akhala sita', 'titre 1', 'title 1', NULL, NULL, 'haha-23-lola', NULL, NULL, NULL, NULL),
	(4, 'ddkdkdkd', 'dkdkdkdkdkdkd', 'dkdkdkd', 'djdjdjdjdjsjs', NULL, 'djdjdhjdjdjdjjd', 'ddjdjd-ddjdjd', NULL, NULL, NULL, NULL),
	(5, 'ahahahahahooo', 'ddkdkoaoaoaoaopapa apapapa a', 'ajajaqoq', 'akaqoqoqo', NULL, 'akakakqiiiqqqq', 'ahaha', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Export de la structure de la table tourismus. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table tourismus.categories : ~2 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `nom`) VALUES
	(1, 'mer'),
	(2, 'hotel');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Export de la structure de la table tourismus. regions
CREATE TABLE IF NOT EXISTS `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table tourismus.regions : ~2 rows (environ)
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` (`id`, `nom`) VALUES
	(1, 'littoral'),
	(2, 'centre');
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;

-- Export de la structure de la table tourismus. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL DEFAULT '0',
  `confirmemail` varchar(255) DEFAULT '0',
  `created_at` varchar(255) DEFAULT '0',
  `roles` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table tourismus.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
