-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 23 août 2018 à 16:18
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `entraidemvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `idChat` int(11) NOT NULL AUTO_INCREMENT,
  `dateChat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `textChat` text NOT NULL,
  `loginUser` text NOT NULL,
  PRIMARY KEY (`idChat`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`idChat`, `dateChat`, `textChat`, `loginUser`) VALUES
(88, '2018-08-23 13:38:52', 'a?', 'tom'),
(86, '2018-08-23 13:37:12', 'qsdf', 'a'),
(87, '2018-08-23 13:38:39', 'la', 'tom'),
(85, '2018-08-23 13:36:30', 're', 'a'),
(84, '2018-08-23 13:36:29', 're', 'a'),
(83, '2018-08-23 13:36:28', 'test', 'a'),
(82, '2018-08-23 13:35:21', 'noice!', 'a'),
(63, '2018-08-23 12:39:09', 'Why', 'tom'),
(64, '2018-08-23 12:39:21', 'Ca beug', 'tom'),
(65, '2018-08-23 12:39:32', 'Ah nan c\'est bon', 'tom'),
(66, '2018-08-23 12:39:52', 'cool', 'a'),
(67, '2018-08-23 12:40:20', 'Maintenant faut nettoyer le code :,(', 'a'),
(68, '2018-08-23 12:49:16', 'entré marche?', 'a'),
(69, '2018-08-23 12:49:21', 'yay', 'a'),
(70, '2018-08-23 12:51:40', 'ca recharge la page?', 'a'),
(71, '2018-08-23 12:51:44', 'yay', 'a'),
(72, '2018-08-23 12:52:22', 'a', 'a'),
(73, '2018-08-23 12:52:30', 'c\'est fluide maintenant', 'a'),
(78, '2018-08-23 13:27:48', 'encore?', 'a'),
(79, '2018-08-23 13:27:52', 'yes!', 'a'),
(80, '2018-08-23 13:32:30', 'good?', 'a'),
(81, '2018-08-23 13:35:17', 'sroll vers le bas good?', 'a'),
(89, '2018-08-23 14:27:03', 'test', 'tom'),
(90, '2018-08-23 14:28:59', 'a', 'tom'),
(91, '2018-08-23 14:32:44', 'f', 'tom'),
(92, '2018-08-23 14:34:59', 'd', 'tom'),
(93, '2018-08-23 14:42:45', 's', 'tom'),
(94, '2018-08-23 14:42:49', 'd', 'tom'),
(95, '2018-08-23 14:42:55', 'f', 'tom'),
(96, '2018-08-23 14:43:38', 'f', 'tom'),
(97, '2018-08-23 14:43:41', 'qsd', 'tom'),
(98, '2018-08-23 14:43:45', 'sdf', 'tom'),
(99, '2018-08-23 14:44:03', 'qds', 'tom'),
(100, '2018-08-23 14:47:21', 'khqsd', 'tom'),
(101, '2018-08-23 14:47:25', 'qsdf', 'tom'),
(102, '2018-08-23 14:47:40', 'hd', 'tom'),
(103, '2018-08-23 14:47:48', 'hhh', 'tom'),
(104, '2018-08-23 14:48:29', 'j', 'tom'),
(105, '2018-08-23 14:51:06', 'sdfsdf', 'tom'),
(106, '2018-08-23 14:51:11', 'q;skjdfh', 'tom'),
(107, '2018-08-23 14:51:16', 'kqsjdfh', 'tom'),
(108, '2018-08-23 14:55:27', 'test', 'tom'),
(109, '2018-08-23 15:01:19', 'kuqhsd', 'tom'),
(110, '2018-08-23 15:01:21', 'qsd', 'tom'),
(111, '2018-08-23 15:01:27', 'qsd', 'tom'),
(112, '2018-08-23 15:01:31', 'f', 'tom'),
(113, '2018-08-23 15:01:37', 'qsd', 'tom'),
(114, '2018-08-23 15:02:00', 'a', 'tom');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `nameNews` text NOT NULL,
  `dateNews` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contentNews` text NOT NULL,
  `categoryNews` int(11) NOT NULL,
  PRIMARY KEY (`idNews`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`idNews`, `idUser`, `nameNews`, `dateNews`, `contentNews`, `categoryNews`) VALUES
(18, 24, 'f', '2018-05-10 14:37:27', 'f', 4),
(13, 1, 'aze', '2018-05-10 14:27:03', 'aze', 3),
(14, 1, 'zer', '2018-05-10 14:27:07', 'sdf', 1),
(15, 19, 'qsd', '2018-05-10 14:27:37', 'dsg', 4),
(16, 19, 'qce', '2018-05-10 14:27:41', 'qd', 3),
(19, 24, 'sdfh ', '2018-05-10 14:37:38', 'cwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwccwgkhfhjdfsbhj;dfshjbdfsbhjdfsb;hjdsf;bhjcdbhjbhjwc', 4);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mail` text NOT NULL,
  `socialBackground` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `login`, `pass`, `dateCreation`, `mail`, `socialBackground`) VALUES
(1, 'tomrollet', '$2y$10$paMqimofHpEMrGcV4vvINO6JbMVjfkbxf01we770p2JTxMjquNuam', '2018-05-07 12:54:13', 'tomrollet@hotmail.fr', 1),
(20, 's', '$2y$10$4JKd1oPjbTFu2pSyrrZE2O50a3.GNwPjsHYl1R7f7aqEzheFjnfqG', '2018-05-07 13:33:10', 's', 1),
(21, 'g', '$2y$10$g0hZq5oitDVrFIbqz592jOz5TSrDzDAhJztyA6fzuc8y453welk6K', '2018-05-07 13:33:45', 'g', 1),
(19, 'z', '$2y$10$C28h0LzWal9q9BgRkHXhAOzbhHwHKEEtsBKP4Xyls3tlQyuoGy4vu', '2018-05-07 13:30:32', 'z', 1),
(18, 'a', '$2y$10$7i7AiaegkhOKuNN0HduiG.7YGQyVQfPlUq6dH4BbdVw7kIbPRK3MK', '2018-05-07 13:26:45', 'z', 3),
(17, 'azer', '$2y$10$FfyIaqDDgMSUjhQQt.QrCuE2Y47/2ZeIFSDYVR9gjBzYVj8TOv1OO', '2018-05-07 13:24:52', 'azer', 2),
(16, 'aze', '$2y$10$y2VIZdhoMXo1CarbpW.rPu8vndSI3H8rZC4EGVlSdJlWouMAybN4q', '2018-05-07 13:23:15', 'aze', 2),
(22, 'k', '$2y$10$ixy4lMWMRmKEJ3eGh0adTO9EOddJl/qmkoN27idy1B3ObFjss4Sl.', '2018-05-07 15:29:47', 'k', 1),
(23, 'tom', '$2y$10$nyqkHANuB3wHgC1BM3.szeDS/pVY0n6Sp8q/VzNBQPDDlkzDMtn7u', '2018-05-07 16:18:43', 'tom', 4),
(24, 'f', '$2y$10$axKWSelsaPB1S48p6nj6Wundxbca3UucpOU6CJRXN1yODZ1kcUgha', '2018-05-10 14:27:57', 'f', 2),
(25, 'zigg', '$2y$10$GI9V8OABoJaxF.ktuoiboetDvWDHEuTCZhg/3Ln9pq0gdwSV1AaBe', '2018-08-23 13:32:05', 'trollet@hotmail.fr', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
