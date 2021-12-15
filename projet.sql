-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Janvier 2020 à 08:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE IF NOT EXISTS `abonnement` (
  `ida` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `dateD` date NOT NULL,
  `dateF` date NOT NULL,
  PRIMARY KEY (`ida`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abonnement`
--

INSERT INTO `abonnement` (`ida`, `nom`, `prenom`, `age`, `dateD`, `dateF`) VALUES
(111, 'chakroun', 'sa', 19, '2019-12-16', '2020-01-16'),
(888, 'Bel', 'wael', 20, '2019-12-19', '2020-01-19'),
(1485, 'Ahmed', 'Azz', 20, '2019-12-12', '2019-12-13');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idC` int(20) NOT NULL AUTO_INCREMENT,
  `nomC` char(20) NOT NULL,
  `Famille` char(20) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idC`, `nomC`, `Famille`) VALUES
(1, 'bcaa', 'bcaa'),
(12, 'accessoires', 'acc'),
(66, 'vÃ©tements', 'vÃ©tements'),
(77, 'protÃ©ine', 'protÃ©ine'),
(99, 'accesoire', 'accesoire');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `age`, `num`, `email`, `mdp`) VALUES
(1485, 'nizar', 'moh', 25, 54324889, 'nizar.mahmoudi@esprit.tn', '111'),
(9696, 'Bouhaha', 'Mohamed', 24, 25507439, 'bouhaha.muhamed@gmail.com', 'walid123'),
(12345, 'mafia', 'abdo', 22, 89652341, 'abdomafia@gmail.com', 'mafiamafia'),
(124312, 'Ahmed', 'ouertani', 32, 96756443, 'ahmed@gmail.com', '123456789'),
(565656, 'chakroun', 'chaima', 20, 97979797, 'chaima.chakroun@esprit.tn', '18071999');

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `nomprenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `specialite` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `salaire` int(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `cin` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2147483647 ;

--
-- Contenu de la table `coach`
--

INSERT INTO `coach` (`nomprenom`, `email`, `age`, `specialite`, `experience`, `salaire`, `date`, `image`, `cin`) VALUES
('Mouine Chabaani', 'seifeddine.bensalah@gmail.com', 45, 'Musculation', '70', 12, '2019-11-13', 'mouine.jpg', 12345678),
('Abd El Raouf', 'seifeddine.bensalah@gmail.com', 6, 'fitness', '2', 2, '2019-11-08', 'raouf.jpg', 50251889),
('Faouzi Benzarti', 'seifeddine.bensalah@gmail.com', 12, 'Dance', '90', 90, '2019-11-06', 'faouzi.jpg', 123456789),
('Ayman Ben Mohamed', 'seifeddine.bensalah@gmail.com', 0, '', '40', 40, '2019-11-08', 'ayman.jpg', 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idcom` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `etatcom` varchar(255) NOT NULL,
  `datecom` date NOT NULL,
  `prixcom` int(11) NOT NULL,
  `idlivreur` int(11) NOT NULL,
  `lieucom` varchar(255) NOT NULL,
  PRIMARY KEY (`idcom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12454 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`idcom`, `id`, `etatcom`, `datecom`, `prixcom`, `idlivreur`, `lieucom`) VALUES
(321, 1141, 'Valide', '2019-12-04', 140, 1, 'byzerte'),
(12453, 11141, 'Valide', '2019-12-03', 142, 44471, 'Byzerte');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply_id` int(11) DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `reply_id`, `post_id`, `timestamp`, `name`, `message`) VALUES
(1, NULL, 999, '2019-12-10 23:58:29', 'test', 'test'),
(2, NULL, 445, '2019-12-11 00:08:41', 'test', 'test'),
(3, 2, 445, '2019-12-11 00:11:16', 'nizar', '5465'),
(4, NULL, 445, '2019-12-11 00:11:22', 'sdf', 'dsfsdfsdf'),
(5, NULL, 1, '2019-12-12 15:40:53', 'test', 'teeeeeeest'),
(6, NULL, 1, '2019-12-12 15:41:30', 'hhhh', 'bbb');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `nombremin` int(255) NOT NULL,
  `nombremax` int(255) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(255) NOT NULL,
  `idcoach` int(255) NOT NULL,
  `idsalle` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123457 ;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `nom`, `categorie`, `nombremin`, `nombremax`, `date`, `heure`, `idcoach`, `idsalle`, `image`) VALUES
(4, 'Ahmed', 'Dance Orientale', 2, 3, '2019-11-07', '10', 12345678, 12345678, 'cours1.jpg'),
(10, 'Ahmed1', 'spinning', 6, 3, '2019-11-14', '12', 123456, 123456, 'cours2.jpg'),
(112, 'Ahmed2', 'dance', 2, 2, '2019-11-13', '12', 0, 0, 'zumba.jfif'),
(4556, 'SI SEIF', 'dance', 2, 2, '2019-10-31', '12', 12345678, 2, 'dance1.jpg'),
(9965, 'Ahmed', 'musculation', 1, 4, '2019-11-14', '20', 3, 5, 'dance2.jpg'),
(123456, 'Ahmed', 'fitness', 1, 1, '2019-11-06', '12', 3, 3, 'spinning.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `tell` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `salaire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=741742 ;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nom`, `tell`, `adresse`, `salaire`) VALUES
(18, 'Seif', 20149637, 'Sokra', 1500),
(36, 'Adem', 55414596, 'Mourouj', 700),
(3, 'Youssef', 20147852, 'Hay tahrir', 250),
(96, 'Nadia', 54125874, 'Menzah', 300);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `idpanier` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `nomp` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`idpanier`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8780 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`idpanier`, `image`, `nomp`, `prix`) VALUES
(8779, 'images%20(3).jpg', 'shaker', 30);

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `cin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12345679 ;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`cin`, `nom`, `prenom`, `poste`) VALUES
(123456, 'Ahmed', 'azez', 'aaaa'),
(1234567, 'Ahmed', 'azez', 'aaaa'),
(2323456, 'Ahmed', 'azez', 'aaaa'),
(12345678, 'Ahmed', 'azez', 'aaaa');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `idP` int(20) NOT NULL AUTO_INCREMENT,
  `nomP` char(20) NOT NULL,
  `quantiteP` int(20) NOT NULL,
  `description` char(20) NOT NULL,
  `prix` int(20) NOT NULL,
  `image` blob NOT NULL,
  `idC` int(20) NOT NULL,
  PRIMARY KEY (`idP`),
  KEY `idC` (`idC`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12345679 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`idP`, `nomP`, `quantiteP`, `description`, `prix`, `image`, `idC`) VALUES
(233, 'pull', 40, 'vetements', 60, 0x74c3a96cc3a96368617267656d656e74202832292e6a7067, 66),
(8779, 'shaker', 80, 'shaker proteine', 30, 0x696d61676573202833292e6a7067, 99),
(12345678, 'gants', 4, 'Tres bonne qualitÃ©', 10, 0x74c3a96cc3a96368617267656d656e74202837292e6a7067, 99);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_salle` varchar(255) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`num`, `categorie`, `coach`, `description`, `image_salle`) VALUES
(0, 'Musculation', 'Aymenaaa', 'diponisble pour tout les ages', 'salle1.jpg'),
(7, 'fitnesse', 'Nadia', 'Seulement pour les femme', 'salle2.jpg'),
(4, 'kick boxing', 'Adem', '', 'salle3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
