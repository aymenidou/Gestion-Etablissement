-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 24, 2021 at 11:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etablissement_scolaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(160) NOT NULL,
  `contrat` varchar(50) NOT NULL,
  `salaire` varchar(50) NOT NULL,
  `date_embauche` date NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `avatar` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cin` (`cin`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `cin`, `nom`, `prenom`, `genre`, `date_naissance`, `adresse`, `contrat`, `salaire`, `date_embauche`, `telephone`, `avatar`) VALUES
(1, 'BH609975', 'admin', 'admin', 'm', '1998-05-25', 'jamila 7 rue 7 n 44 CD CASA', 'CDI', '5000', '2020-05-10', '0679769547', 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(5, 'B101010', 'aymen', 'idou', 'm', '1998-05-25', 'jamila 7 rue 7 CD CASA', 'CDI', '4000', '2010-10-10', '0630201050', 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(6, 'CH505050', 'Alpha', 'Stuff', 'm', '2001-02-25', 'California USA', 'CDI', '9000', '2021-02-08', '0636060333', 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light');

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adresse`
--

INSERT INTO `adresse` (`id`, `adresse`) VALUES
(1, '89, Av. Allal Ben Abdellah'),
(2, '145 Avenue Hassan II, Grand Casablanca'),
(3, '25 Rue 6 Zone Industrielle'),
(4, '8 rue al Okhouane beauséjour, Grand Casablanca'),
(5, 'Rue de Barcelone, Z.I. Ain Sbaa'),
(6, 'Bd Okba Ibn Nafea N°23 App 4 Hay Mohammedi Ain Sbâa'),
(7, '31, complexe ind. Azzahra'),
(8, 'Indusparc - M8 Chemin Tertiaire, 1015 - Sidi-Moumen'),
(9, '433, bd Mohammed V'),
(10, '83, Zone Industrielle'),
(11, 'lot. Banam la Gracieuse, n°65 q.i. Ain Sebaa, Grand Casablanca'),
(12, '69, Rue Abou Al Alaâ Zahar'),
(13, '625, Bd Med V'),
(14, 'Route BO 50, Sidi Maârouf Ouled Haddo'),
(15, '56, Avenue Mers Sultan'),
(16, '57, rue al khouzame cité Raha - Beauséjour'),
(17, 'Résidence Marwa 6éme étage N°3, Ave.2Mars'),
(18, '5, Lahfaya n°3, Bouskoura'),
(19, '934, bd El Fida Prolonge, Grand Casablanca'),
(20, 'hay El Oulfa, rue 78 n°2, grp.P'),
(21, 'n°6/8, hay el oulfa, Grand Casablanca'),
(22, 'Lotiss. Lina, lot. 145 Sidi Maarouf'),
(23, '30, boulevard Moulay Youssef'),
(24, 'rue Ahmed El Mejatti -ex Alpes, Maarif, Grand Casablanca'),
(25, '975, bd El Fida, Grand Casablanca'),
(26, 'place Nicolas Paquet, espace paquet ang. rue Pierr, Grand Casablanca'),
(27, '588, bd Modibo Keita'),
(28, 'Bd. la Resistance, resid. Med. Amine imm. Otman'),
(29, 'bd. Bir Anzarane ang. rue ElGharb, imm. Inssaf app'),
(30, '1, rue de verdi Belvédère'),
(31, 'bd. Mohamed V, resid. ElHamd'),
(32, '151, bd Moukaouama - ex Resistance'),
(33, 'Resid. AlMoustakbal, gh 24 imm. 206 appt. n°4 sid'),
(34, '44, Rue Abou Ishak El Ouajjaj Mâarif'),
(35, '102, avenue C (hay Mohammadi), Grand Casablanca'),
(36, '322, bd Mohammed VI'),
(37, 'rue des Oudayas ang. El Vitalis la Vilette, 20320 Quartier: Hay Mohammadi'),
(38, 'bd Moukaouama - ex Resistance, resid. Casa 1, Grand Casablanca'),
(39, '100, Boulevard Abdellah Ben Yacine'),
(40, 'Route Anassi - Sidi Moumen El bernoussi 20400, Casablanca - Maroc'),
(41, 'avenue Bouchaib Makdad Lahrizi, hay El Houda, Grand Casablanca'),
(42, '16, rue Ali Abderazak'),
(43, '504, bd Abdelkrim ElKhatabi'),
(44, 'cite Chabab, bloc 14 imm.B 1°et. appt.3 Ain Sebaa'),
(45, '387, bd El Fida'),
(46, '104, rue Argana'),
(47, 'Km 11, Route 111  Sidi Bernoussi'),
(48, '625, Bvd Mohammed V 4ème étage'),
(49, 'Rte 1029 quartier administratif, Sidi Maarouf'),
(50, 'zone industrielle Sud Ouest, lot n° 254');

-- --------------------------------------------------------

--
-- Table structure for table `authentification`
--

DROP TABLE IF EXISTS `authentification`;
CREATE TABLE IF NOT EXISTS `authentification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `cne` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cne` (`cne`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentification`
--

INSERT INTO `authentification` (`id`, `username`, `password`, `type`, `cne`) VALUES
(1, 'admin@school.ma', 'admin', 'admin', 'BH609975'),
(2, 'B12345@school.ma', 'B12345', 'professeur', 'B12345'),
(3, 'B101010@school.ma', 'B101010', 'admin', 'B101010'),
(4, 'CH505050@school.ma', 'CH505050', 'admin', 'CH505050'),
(6, 'BL990990@school.ma', 'BL990990', 'professeur', 'BL990990'),
(7, 'LH102010@school.ma', 'LH102010', 'professeur', 'LH102010'),
(8, 'LH202020@school.ma', 'LH202020', 'professeur', 'LH202020'),
(9, 'R120120120@school.ma', 'R120120120', 'etudiant', 'R120120120'),
(10, 'LK164975@school.ma', 'LK164975', 'professeur', 'LK164975'),
(11, 'B1111@school.ma', 'B1111', 'professeur', 'B1111'),
(12, 'B2222@school.ma', 'B2222', 'professeur', 'B2222'),
(14, 'B3333@school.ma', 'B3333', 'professeur', 'B3333'),
(15, 'B4444@school.ma', 'B4444', 'professeur', 'B4444'),
(16, 'B5555@school.ma', 'B5555', 'professeur', 'B5555'),
(17, 'B6666@school.ma', 'B6666', 'professeur', 'B6666'),
(18, 'B7777@school.ma', 'B7777', 'professeur', 'B7777'),
(19, 'B8888@school.ma', 'B8888', 'professeur', 'B8888'),
(20, 'B9999@school.ma', 'B9999', 'professeur', 'B9999'),
(21, 'B0000@school.ma', 'B0000', 'professeur', 'B0000'),
(22, 'L1212@school.ma', 'L1212', 'professeur', 'L1212');

-- --------------------------------------------------------

--
-- Table structure for table `coeficient`
--

DROP TABLE IF EXISTS `coeficient`;
CREATE TABLE IF NOT EXISTS `coeficient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filiere` int(11) NOT NULL,
  `matiere` int(11) NOT NULL,
  `coef` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `filiere` (`filiere`),
  KEY `matiere` (`matiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emetteur` varchar(50) NOT NULL,
  `recepteur` varchar(50) NOT NULL,
  `date_envoi` date NOT NULL,
  `heure_envoi` time NOT NULL,
  `sujet` varchar(50) DEFAULT NULL,
  `message` varchar(400) NOT NULL,
  `priorite` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emetteur` (`emetteur`),
  KEY `recepteur` (`recepteur`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `emetteur`, `recepteur`, `date_envoi`, `heure_envoi`, `sujet`, `message`, `priorite`) VALUES
(11, 'B12345@school.ma', 'admin@school.ma', '2021-02-23', '15:00:54', 'suuujeeett', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(160) NOT NULL,
  `date_inscription` date NOT NULL,
  `cne` varchar(50) NOT NULL,
  `niveau_scolaire` int(11) NOT NULL,
  `groupe` int(11) NOT NULL,
  `avatar` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `niveau_scolaire` (`niveau_scolaire`),
  KEY `groupe` (`groupe`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `genre`, `date_naissance`, `adresse`, `date_inscription`, `cne`, `niveau_scolaire`, `groupe`, `avatar`) VALUES
(3, 'a1', 'a1', 'm', '1999-10-10', 'Rabat ', '2021-02-01', 'R1111', 3, 4, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light');

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filiere`
--

INSERT INTO `filiere` (`id`, `nom`, `description`) VALUES
(1, 'SMA', 'Science Math A'),
(2, 'SMB', 'Science Math B'),
(3, 'SVT', 'Science de vie et terre'),
(4, 'PC', 'Science de Physique et Chimie'),
(5, 'SM', 'Science Math'),
(6, 'SX', 'Science Experimentale'),
(7, 'TC', 'Tronc Commun'),
(8, 'test', 't'),
(9, 't', 't');

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `filiere` int(11) NOT NULL,
  `salle` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_filiere` (`filiere`),
  KEY `id_salle` (`salle`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`, `filiere`, `salle`) VALUES
(4, 'A', 1, 1),
(5, 'B', 2, 3),
(6, 'C', 4, 11),
(7, 'D', 2, 5),
(8, 'E', 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`, `description`) VALUES
(1, 'Math', ''),
(2, 'PC', ''),
(3, 'SVT', ''),
(4, 'Philo', ''),
(5, 'Anglais', ''),
(6, 'Educ Islamique', ''),
(7, 'FR', ''),
(8, 'AR', ''),
(9, 'HG', ''),
(10, 'Sport', ''),
(11, 'm', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`, `description`) VALUES
(1, 'TC', ''),
(2, '1er BAC', ''),
(3, '2eme BAC', '');

-- --------------------------------------------------------

--
-- Table structure for table `nom`
--

DROP TABLE IF EXISTS `nom`;
CREATE TABLE IF NOT EXISTS `nom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nom`
--

INSERT INTO `nom` (`id`, `nom`) VALUES
(1, 'El Maleh'),
(2, 'Skali'),
(3, 'Ayouch'),
(4, 'Lmrabet'),
(5, 'Jouiti'),
(6, 'Bahéchar'),
(7, 'Sabbag'),
(8, 'Chaoui'),
(9, 'Taïa'),
(10, 'Al-Mokhtar'),
(11, 'Kabbal'),
(12, 'Mejjati'),
(13, 'Menebhi'),
(14, 'Al-Harradi'),
(15, 'Kilito'),
(16, 'Ghallab'),
(17, 'Lalami'),
(18, 'Saqqat'),
(19, 'Elalamy'),
(20, 'Al-Madini'),
(21, 'Benzakour'),
(22, 'Choukri'),
(23, 'Berrada'),
(24, 'Joumari'),
(25, 'El-Hababi'),
(26, 'Daoud'),
(27, 'El Meliani'),
(28, 'Hajji'),
(29, 'Mansouri'),
(30, 'N’Ait'),
(31, 'Toulali'),
(32, 'Abouzeid'),
(33, 'Bennis'),
(34, 'Fadel'),
(35, 'Harrak'),
(36, 'Chatt'),
(37, 'Oulehri'),
(38, 'Chafik'),
(39, 'Hachim'),
(40, 'Bennouna'),
(41, 'Ibn Mohammed'),
(42, 'Akalay'),
(43, 'Sabila'),
(44, 'Bourequat'),
(45, 'El-Ouadie'),
(46, 'Al-Jabri'),
(47, 'Khatibi'),
(48, 'Bendahan'),
(49, 'Qamari'),
(50, 'El Hachmi'),
(51, 'Zrika'),
(52, 'Abécassis'),
(53, 'Ben Haddou'),
(54, 'Bennani'),
(55, 'Lahlou'),
(56, 'Benmansour'),
(57, 'Zniber'),
(58, 'Ibrahim'),
(59, 'El-Moustaoui'),
(60, 'El Hajjam'),
(61, 'Belghiti'),
(62, 'Benali'),
(63, 'Benchemsi'),
(64, 'Baka'),
(65, 'Tazi'),
(66, 'El Moudden'),
(67, 'Chraïbi'),
(68, 'Hajuji'),
(69, 'Ben Barka'),
(70, 'Rabi'),
(71, 'El Ouazzani'),
(72, 'Oufkir'),
(73, 'Al-Wazzani'),
(74, 'El Khayat'),
(75, 'El Haloui'),
(76, 'Ben Hamed'),
(77, 'Siqli'),
(78, 'Ksikes'),
(79, 'Sahimi'),
(80, 'Lahbibi'),
(81, 'Serhane'),
(82, 'Raihani'),
(83, 'Yassine'),
(84, 'Lahbabi'),
(85, 'Ben Bouchta'),
(86, 'Batma'),
(87, 'Jouahri'),
(88, 'Lamrani'),
(89, 'Assaraf'),
(90, 'Tawil'),
(91, 'Al-Ansari'),
(92, 'Seddiki'),
(93, 'Bikri'),
(94, 'Akhrif'),
(95, 'Zafrani'),
(96, 'Zafzaf'),
(97, 'Lemsih'),
(98, 'Barbery'),
(99, 'Haddani'),
(100, 'Laroui'),
(101, 'Sefrioui'),
(102, 'Abdessalam'),
(103, 'Diouri'),
(104, 'Trabelsi'),
(105, 'Kaghat'),
(106, 'Ben Jelloun'),
(107, 'Rhissassi'),
(108, 'Benjelloun'),
(109, 'Binebine'),
(110, 'Guennoun'),
(111, 'Al-Ghumari'),
(112, 'Sinaceur'),
(113, 'Barakat'),
(114, 'Bouasria'),
(115, 'Boukous');

-- --------------------------------------------------------

--
-- Table structure for table `prenom`
--

DROP TABLE IF EXISTS `prenom`;
CREATE TABLE IF NOT EXISTS `prenom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prenom`
--

INSERT INTO `prenom` (`id`, `prenom`, `genre`) VALUES
(1, 'Jawad', 'm'),
(2, 'Dirar', 'm'),
(3, 'Brahim', 'm'),
(4, 'Bilal', 'm'),
(5, 'Zyad', 'm'),
(6, 'Abdellatif', 'm'),
(7, 'Rachid', 'm'),
(8, 'Zubair', 'm'),
(9, 'Marouane', 'm'),
(10, 'Zaky', 'm'),
(11, 'Zamen', 'm'),
(12, 'Abdeslam', 'm'),
(13, 'Elias', 'm'),
(14, 'Moustafa', 'm'),
(15, 'Fouad', 'm'),
(16, 'Waliedine', 'm'),
(17, 'Boutaje', 'm'),
(18, 'Mourad', 'm'),
(19, 'Mohammed', 'm'),
(20, 'Abdelkader', 'm'),
(21, 'Rifky', 'm'),
(22, 'Zakaria', 'm'),
(23, 'El Hassan', 'm'),
(24, 'Youssef', 'm'),
(25, 'Muwaffaq', 'm'),
(26, 'Mojiz', 'm'),
(27, 'Moulham', 'm'),
(28, 'Hayyan', 'm'),
(29, 'Fayaaz', 'm'),
(30, 'Arwarh', 'm'),
(31, 'Wasif', 'm'),
(32, 'Anwar', 'm'),
(33, 'Bushr', 'm'),
(34, 'Lubaid', 'm'),
(35, 'Tarik', 'm'),
(36, 'Ridouane', 'm'),
(37, 'Ahmed', 'm'),
(38, 'Amine', 'm'),
(39, 'Salah', 'm'),
(40, 'Ghali', 'm'),
(41, 'Jibran', 'm'),
(42, 'Awadah', 'm'),
(43, 'Tazim', 'm'),
(44, 'Zakwan', 'm'),
(45, 'Yassine', 'm'),
(46, 'Fayyad', 'm'),
(47, 'Adil', 'm'),
(48, 'Abdelaziz', 'm'),
(49, 'Ali', 'm'),
(50, 'Simohamed', 'm'),
(51, 'Zarif', 'm'),
(52, 'Hamas', 'm'),
(53, 'Rasil', 'm'),
(54, 'Hakem', 'm'),
(55, 'Noureddine', 'm'),
(56, 'Amaniyy', 'm'),
(57, 'Askari', 'm'),
(58, 'Waqqas', 'm'),
(59, 'Hamid', 'm'),
(60, 'Barkad', 'm'),
(61, 'Abdelmajid', 'm'),
(62, 'Ismail', 'm'),
(63, 'Younes', 'm'),
(64, 'Jabalah', 'm'),
(65, 'Abdelhak', 'm'),
(66, 'Khalid', 'm'),
(67, 'Quraishi', 'm'),
(68, 'Mujahid', 'm'),
(69, 'Aqil', 'm'),
(70, 'Lahcen', 'm'),
(71, 'Habeeba', 'f'),
(72, 'Mariam', 'f'),
(73, 'Rahida', 'f'),
(74, 'Hassiba', 'f'),
(75, 'Farizah', 'f'),
(76, 'Rochdiya', 'f'),
(77, 'Salma', 'f'),
(78, 'Ubaida', 'f'),
(79, 'Moufida', 'f'),
(80, 'Nawar', 'f'),
(81, 'Ayesha', 'f'),
(82, 'Hafida', 'f'),
(83, 'Nadia', 'f'),
(84, 'Atyaf', 'f'),
(85, 'Maryam', 'f'),
(86, 'Najiha', 'f'),
(87, 'Aisha', 'f'),
(88, 'Achoura', 'f'),
(89, 'Zidana', 'f'),
(90, 'Fadeelah', 'f'),
(91, 'Shayma', 'f'),
(92, 'Dua', 'f'),
(93, 'Nasra', 'f'),
(94, 'Shadin', 'f'),
(95, 'Ritwan', 'f'),
(96, 'Chahrazad', 'f'),
(97, 'Amurra', 'f'),
(98, 'Summayyah', 'f'),
(99, 'Rahma', 'f'),
(100, 'Futun', 'f'),
(101, 'Azhar', 'f'),
(102, 'Ghazal', 'f'),
(103, 'Rabia', 'f'),
(104, 'Imane', 'f'),
(105, 'Badriya', 'f'),
(106, 'Bassima', 'f'),
(107, 'Shukriya', 'f'),
(108, 'Amaya', 'f'),
(109, 'Hachmia', 'f'),
(110, 'Fatema', 'f'),
(111, 'Dunyana', 'f'),
(112, 'Najat', 'f'),
(113, 'Hiyam', 'f'),
(114, 'Chafika', 'f'),
(115, 'Racha', 'f'),
(116, 'Sabriye', 'f'),
(117, 'Mumina', 'f'),
(118, 'Fatiha', 'f'),
(119, 'Delilah', 'f'),
(120, 'Areebah', 'f'),
(121, 'Khadra', 'f'),
(122, 'Ghariba', 'f'),
(123, 'Nejlet', 'f'),
(124, 'Zuleika', 'f'),
(125, 'Buhjah', 'f'),
(126, 'Mina', 'f'),
(127, 'Khalila', 'f'),
(128, 'Abal', 'f'),
(129, 'Nahila', 'f'),
(130, 'Hakima', 'f'),
(131, 'Layanah', 'f'),
(132, 'Jawaher', 'f'),
(133, 'Nabila', 'f'),
(134, 'Ouarda', 'f'),
(135, 'Malika', 'f'),
(136, 'Ayat', 'f'),
(137, 'Laila', 'f'),
(138, 'Chaymae', 'f'),
(139, 'Kamar', 'f'),
(140, 'Aaliyah', 'f'),
(141, 'Michkat', 'f'),
(142, 'Rachida', 'f'),
(143, 'Jasmine', 'f'),
(144, 'Rabya', 'f'),
(145, 'Cherifa', 'f'),
(146, 'Tara', 'f'),
(147, 'Zinah', 'f'),
(148, 'Yasmine', 'f'),
(149, 'Batoul', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `contrat` varchar(50) NOT NULL,
  `salaire` varchar(50) NOT NULL,
  `date_embauche` date NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `matiere` int(11) NOT NULL,
  `avatar` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `CIN` (`cin`),
  KEY `matiere` (`matiere`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`id`, `cin`, `nom`, `prenom`, `genre`, `date_naissance`, `adresse`, `contrat`, `salaire`, `date_embauche`, `telephone`, `matiere`, `avatar`) VALUES
(6, 'B1111', 'Mohammed', 'med', 'm', '1960-01-01', 'Casa', 'CDI', '5000', '2021-02-23', '0606060606', 1, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(7, 'B2222', 'Fahd', 'Chouban', 'm', '1950-01-01', 'Rabat ', 'CDI', '7000', '2021-02-22', '0123456789', 2, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(8, 'B3333', 'Brahim', 'Elmaleh', 'm', '1960-01-01', 'Casa', 'CDI', '6000', '2021-02-23', '0321654987', 3, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(9, 'B4444', 'Moustafa', 'Menebhi', 'm', '1980-01-01', 'Rabat ', 'CDI', '8000', '2021-02-23', '02581474736', 4, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(10, 'B5555', 'Jawad', 'Berrada', 'm', '1970-01-01', 'Casa', 'CDI', '6000', '2021-02-23', '0326598147', 5, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(11, 'B6666', 'Maryam', 'jouhari', 'f', '1990-10-10', 'Casa', 'CDI', '5000', '2021-02-23', '0316497852', 6, 'https://avataaars.io/?avatarStyle=Circle'),
(12, 'B7777', 'Fatiha', 'Choukri', 'f', '1980-10-10', 'Rabat ', 'CDI', '6500', '2021-02-23', '0321654987', 7, 'https://avataaars.io/?avatarStyle=Circle'),
(13, 'B8888', 'Najat', 'Lahlou', 'f', '1970-12-20', 'Rabat ', 'CDI', '7800', '2021-02-23', '0659874123', 8, 'https://avataaars.io/?avatarStyle=Circle'),
(14, 'B9999', 'Imane', 'Benchemsi', 'f', '1990-10-10', 'Casa', 'CDI', '5000', '2021-02-23', '0326598741', 9, 'https://avataaars.io/?avatarStyle=Circle'),
(15, 'B0000', 'Tarik', 'El Hajjam', 'm', '1970-01-01', 'Rabat ', 'CDI', '6500', '2021-02-23', '03265987411', 10, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light'),
(16, 'L1212', 'test', 'test', 'm', '2021-02-24', 'Sidi Moumen CASA', 'CDI', '6000', '2021-02-24', '010101', 5, 'https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`id`, `nom`, `description`) VALUES
(1, '1', ''),
(3, '2', ''),
(4, '3', ''),
(5, '4', ''),
(6, '5', ''),
(7, '6', ''),
(8, '7', ''),
(9, '8', ''),
(10, '9', ''),
(11, '10', ''),
(12, '11', ''),
(13, '12', ''),
(14, '13', ''),
(15, '14', ''),
(16, '15', ''),
(17, '16', ''),
(18, '17', ''),
(19, '18', ''),
(20, '19', ''),
(21, '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prof` int(11) NOT NULL,
  `groupe` int(11) NOT NULL,
  `jour` varchar(100) NOT NULL,
  `heure_d` time NOT NULL,
  `heure_f` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coeficient`
--
ALTER TABLE `coeficient`
  ADD CONSTRAINT `coeficient_ibfk_1` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`id`),
  ADD CONSTRAINT `coeficient_ibfk_2` FOREIGN KEY (`matiere`) REFERENCES `matiere` (`id`);

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`emetteur`) REFERENCES `authentification` (`username`),
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`recepteur`) REFERENCES `authentification` (`username`);

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`niveau_scolaire`) REFERENCES `niveau` (`id`),
  ADD CONSTRAINT `etudiants_ibfk_2` FOREIGN KEY (`groupe`) REFERENCES `groupe` (`id`);

--
-- Constraints for table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `id_filiere` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`id`),
  ADD CONSTRAINT `id_salle` FOREIGN KEY (`salle`) REFERENCES `salle` (`id`);

--
-- Constraints for table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `professeur_ibfk_1` FOREIGN KEY (`matiere`) REFERENCES `matiere` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
