-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 mai 2018 à 21:43
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`idNews`, `idUser`, `nameNews`, `dateNews`, `contentNews`, `categoryNews`) VALUES
(18, 24, 'f', '2018-05-10 14:37:27', 'f', 4),
(13, 1, 'aze', '2018-05-10 14:27:03', 'aze', 3),
(14, 1, 'zer', '2018-05-10 14:27:07', 'sdf', 1),
(15, 19, 'qsd', '2018-05-10 14:27:37', 'dsg', 4),
(16, 19, 'qce', '2018-05-10 14:27:41', 'qd', 3),
(20, 18, 'qsd', '2018-05-10 16:16:04', 'qsd', 4),
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

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
(24, 'f', '$2y$10$axKWSelsaPB1S48p6nj6Wundxbca3UucpOU6CJRXN1yODZ1kcUgha', '2018-05-10 14:27:57', 'f', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
