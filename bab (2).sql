-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 04:19 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bab`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `numtelephone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `datecontact` date NOT NULL,
  `reponse` varchar(255) DEFAULT NULL,
  `statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `sujet`, `contenu`, `nom`, `prenom`, `numtelephone`, `email`, `datecontact`, `reponse`, `statut`) VALUES
(6, 'titre', 'mal', 'mal', 'mal', 34, 'li@.fr', '2017-12-03', 'reponse', 'Traite');

-- --------------------------------------------------------

--
-- Table structure for table `idee`
--

CREATE TABLE `idee` (
  `id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `domaine` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_ajout` date DEFAULT NULL,
  `prix` int(20) DEFAULT NULL,
  `path_doc` varchar(255) DEFAULT NULL,
  `path_img` varchar(255) DEFAULT NULL,
  `etat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idee`
--

INSERT INTO `idee` (`id`, `user_id`, `titre`, `domaine`, `description`, `date_ajout`, `prix`, `path_doc`, `path_img`, `etat`) VALUES
(10, 2, 'firas', 'mouchoula', 'behia', NULL, 1, 'famma mochkel', 'famma mochkel', NULL),
(13, 2, 'asmor', 'hdsgf', 'gtgt', NULL, 587, 'famma mochkel', 'famma mochkel', NULL),
(14, 2, 'jkloiuyttjklmlkjhgf', 'ghjklmlkjhgfdfghjklmlkjhgfdss', 'klmlkjytreeghjklmlkjhgfdsq', '2018-01-30', 9867, NULL, NULL, NULL),
(16, 2, 'Malek', 'Is', 'lafta', NULL, 120, '', '', NULL),
(17, 2, 'Firas', 'Mehc ', 'Normal', NULL, 99999, '', '', NULL),
(18, 2, 'eniapl', 'ena', 'houaa', '2018-01-30', 9867, NULL, NULL, NULL),
(20, 2, 'dfdfdfdfdfdf', 'dfdfdfdf', 'fdfdfdf', '2018-01-19', 16, 'famma mochkel', 'famma mochkel', NULL),
(25, 2, 'Scanner', 'Medical', 'Radiologie', '2018-01-01', 409999, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(11) NOT NULL,
  `pseudo_membre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id_membre`, `pseudo_membre`) VALUES
(1, 'Rami'),
(2, 'Zied');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_dest` int(11) DEFAULT NULL,
  `message_membre` text NOT NULL,
  `temps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id_message`, `id_membre`, `id_dest`, `message_membre`, `temps`) VALUES
(1, 1, 7, 'Salut', '2017-12-31 22:31:47'),
(2, 1, 5, 'hello', '2017-12-31 22:31:36'),
(17, 5, 1, 'salut cv', '2018-01-01 01:29:27'),
(18, 5, 1, 'chaaml', '2018-01-01 01:32:36'),
(19, 5, 4, 'hu', '2018-01-01 01:49:08'),
(20, 4, 5, 'tuto', '2018-01-01 01:54:30'),
(21, 5, 4, 'winek', '2018-01-01 01:55:34'),
(22, 4, 5, 'w enti', '2018-01-01 01:57:07'),
(23, 7, 4, 'coucou', '2018-01-01 11:39:43'),
(24, 5, 4, 'hhhh', '2018-01-01 12:02:23'),
(28, 4, 5, 'ok ok', '2018-01-01 12:14:16'),
(29, 5, 4, 'je suis chayma', '2018-01-01 12:16:50'),
(80, 4, 1, 'bonjour', '2018-01-02 09:45:19'),
(81, 4, 7, 'test ajout avec id 7', '2018-01-02 09:57:31'),
(82, 4, 5, 'test', '2018-01-02 10:37:08'),
(83, 7, 4, 'Hello Admin', '2018-01-02 11:25:57'),
(84, 4, 7, '3Aslema re', '2018-01-02 11:26:09'),
(85, 5, 4, 'bonsoir Admin', '2018-01-06 23:51:10'),
(86, 4, 5, 'je suis admin', '2018-01-10 23:06:57'),
(87, 5, 4, 'je suis chaima', '2018-01-10 23:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `reclamationsidees`
--

CREATE TABLE `reclamationsidees` (
  `idreclamationsidees` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idreclamation` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `datereclamation` date NOT NULL,
  `statut` varchar(255) NOT NULL,
  `reponse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reclamationsidees`
--

INSERT INTO `reclamationsidees` (`idreclamationsidees`, `iduser`, `idreclamation`, `type`, `contenu`, `datereclamation`, `statut`, `reponse`) VALUES
(27, 7, 1, 'test3', 'message test', '2017-12-12', 'Encour', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `cin` varchar(255) NOT NULL,
  `datenaissance` date NOT NULL DEFAULT '0000-00-00',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numtelephone` int(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `dateajout` date NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `cin`, `datenaissance`, `username`, `password`, `email`, `numtelephone`, `adresse`, `dateajout`, `role`) VALUES
(1, 'ADMIN', 'selim.loued@esprit.tn', '123', '2017-12-13', 'Admin', '1236', '', 0, '', '0000-00-00', 'Admin'),
(2, 'chayma', 'chayma.mallat@esprit.tn', '123456', '2017-12-04', 'chayma', '123456', '', 0, '', '0000-00-00', 'Client'),
(3, 'rami', 'rami.elbekri@esprit.tn', 'rami12345', '2017-12-03', 'ali', '123', '', 0, '', '0000-00-00', 'Client'),
(4, 'Virtual BAB', 'bekri', '13228994', '2017-12-21', 'ADMIN', '1234', 'rami.elbekri@esprit.tn', 0, 'FDSFDSG', '2017-12-06', 'Admin'),
(5, 'chayma', 'chayma', '14', '2017-12-13', 'chayma', '1234', 'chayma@go.com', 0, 'GFDGF', '2017-12-07', 'Client'),
(6, 'mounir', '12345678', '2017-12-20', '0000-00-00', '0000', 'mounir@live.com', '98765432', 0, '', '2017-12-12', 'Client'),
(7, 're', 're', '12', '2017-11-28', 're', 're', 're@l.f', 344, 're', '2017-12-12', 'Client'),
(8, 'foulen', 'foulen', '1234', '2017-12-14', 'foulen', '1234', 'foulen@esprit.tn', 2222222, 'tunis', '2017-12-12', 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idee`
--
ALTER TABLE `idee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `reclamationsidees`
--
ALTER TABLE `reclamationsidees`
  ADD PRIMARY KEY (`idreclamationsidees`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `idee`
--
ALTER TABLE `idee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `reclamationsidees`
--
ALTER TABLE `reclamationsidees`
  MODIFY `idreclamationsidees` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reclamationsidees`
--
ALTER TABLE `reclamationsidees`
  ADD CONSTRAINT `reclamationsidees_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
