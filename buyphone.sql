-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 août 2026 à 14:12
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `buyphone`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoires`
--

CREATE TABLE `accessoires` (
  `id_a` int(11) NOT NULL,
  `nom_a` varchar(100) NOT NULL,
  `descreption_a` varchar(255) NOT NULL,
  `prix_a` decimal(10,0) NOT NULL,
  `image_a` varchar(255) DEFAULT NULL,
  `promo_a` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `accessoires`
--

INSERT INTO `accessoires` (`id_a`, `nom_a`, `descreption_a`, `prix_a`, `image_a`, `promo_a`) VALUES
(1, 'Casque Filaire KIDS JBL', 'Profitez d une experience optimale grace a casque Filiare KIDS JR 310 Bleu/Rose,doté de Autonomie à 32ohm .', 109, 'images/c1.webp', 'true'),
(2, 'JBL G04', 'Enceinte JBL G04 Pink combine efficacité et élégance avec ,pour une reference 4 GO', 179, 'images/j1.webp', 'false'),
(3, 'Ring light', 'La lumiere LED reglable sur 9 niveaux offre trois tonalite -chaude ,naturelle et froide - pour un rendu toujours parfait.', 200, 'images/h1.webp', 'false'),
(4, 'kit bluetooth', 'charge sans fil , double micro batterie , 4 heures.', 59, 'images/c3.webp', 'true'),
(5, 'JBL T770 NC NOIR', 'doté de des fonctionnaltés pratiques telles que autonomie à 70 h,impedence à 32ohms,Temps de charge à 2h', 369, 'images/c2.webp', 'false'),
(6, 'Montre Connectée COLMI P81', 'Écran: 1.9\" IPS - RAM: 640Ko - ROM: 64Mo - Appel Bluetooth et notifications - Batterie: 300mAh - Autonomie: 3 - 5 jours ', 199, 'images/m1.jpg', 'false'),
(7, 'Montre Connectée KSIX IP68  ', 'Écran : 1,83\" TFT - Capacité : 300 mAh - Autonomie : Jusquà 7 jours -Da Fit / KSIX Plus - Compatibilité : Android 9.0 et supérieur, iOS 9.0 et supérieur.', 99, 'images/m2.jpg', 'false');

-- --------------------------------------------------------

--
-- Structure de la table `bon_plans`
--

CREATE TABLE `bon_plans` (
  `id_b` int(11) NOT NULL,
  `image_b` varchar(255) DEFAULT NULL,
  `disponible` int(11) DEFAULT NULL,
  `nom_b` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `bon_plans`
--

INSERT INTO `bon_plans` (`id_b`, `image_b`, `disponible`, `nom_b`) VALUES
(11, 'images/b1.png', 1, 'b1'),
(22, 'images/b2.png', 0, 'b2'),
(33, 'images/b3.png', 1, 'b3');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `num` int(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `nom_art` varchar(30) DEFAULT NULL,
  `poste` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`nom`, `prenom`, `num`, `email`, `ville`, `adresse`, `nom_art`, `poste`) VALUES
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('nesrine', 'abid', 24665452, 'nesrineabid@gmail.com', 'monastir', 'jemmal', '1', '5020'),
('', '', 0, '', '', '', '22', ''),
('nesrine', 'abid', 24444444, 'erezr@dkeflez.com', 'dfsfds', '', '1', '2222'),
('scs', 'sds', 55555555, 'dfvs@xsdz.com', 'qsdsdq', 'plllll', '', '2222'),
('kkk', 'jj', 44444444, 'nlll@kk.com', 'hjjjjjj', 'jjjjj', '', '1111'),
('sqdsqd', 'sqdsq', 44444444, 'sdsqdsq@ks.com', 'qsdsq', 'dsqdqs3333333333333333333', '11', '3333');

-- --------------------------------------------------------

--
-- Structure de la table `telephone`
--

CREATE TABLE `telephone` (
  `id_t` int(11) NOT NULL,
  `nom_t` varchar(100) NOT NULL,
  `description_t` varchar(255) NOT NULL,
  `prix_t` decimal(10,0) NOT NULL,
  `image_t` varchar(255) DEFAULT NULL,
  `promo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `telephone`
--

INSERT INTO `telephone` (`id_t`, `nom_t`, `description_t`, `prix_t`, `image_t`, `promo`) VALUES
(11, 'iPhone 17 Pro Max 512Go Orange - APPLE', 'Écran 6.9\" - Mémoire RAM: 12 Go - Stockage: 512 Go - Appareil Photo Arrière: Grand-angle Fusion 48 MP f/1.78, 24 mm - Batterie: Li-Ion 4823 mAh .  ', 7900, 'images/i17_pro_o.jpg', 'false'),
(22, 'Phone 16 128Go Noir - APPLE', '6,1\" OLED - Mémoire RAM: 8Go - Stockage: 128Go - Appareil photo Arrière: Fusion 48 MP f/1,6, 26 mm + 12 MP, f/2,2, 13 mm \'', 3900, 'images/i16_n.jpg', 'false'),
(33, 'IPhone 16 Pro 128Go - APPLE', 'Écran 6,3\" -Mémoire RAM: 8Go - Stockage: 128Go - Appareil photo Arrière: Trio Fusion 48 MP f/1,8, 24 mm + 12 MP, f/2,8, 120 mm + 48 MP f/2,2, 13 mm  \'', 5700, 'images/i16_pro_m.jpg', 'false'),
(44, 'iPhone 14 128Go Rouge - APPLE', 'Écran 6,1\"  - Mémoire RAM: 6 Go - Stockage: 128 Go - Appareil photo Arrière: Double caméra 12 MégaPixels f/1.5, 26mm (large) + 12 MégaPixels f/2.4', 2900, 'images/i14_r.jpg', 'true'),
(55, 'IPhone 14 128Go Bleu - APPLE', 'Écran 6,1\" - Mémoire RAM: 6 Go - Stockage: 128Go - Appareil photo Arrière: DualPixels: 12 MégaPixels  f/1.5, 26mm (large), 1/1.7 , 1.9µm, PDAF double pixel + 12 MégaPixels f/2.4,', 2900, 'images/i14_w.jpg', 'true'),
(66, 'IPhone 15 128Go Rose - APPLE ', 'Écran 6,1\" - Mémoire RAM: 6 Go - Stockage: 128Go - Appareil photo Arrière: DualPixels: 48 MP, f/1,6, 26 mm + 12 MP, f/2,4, \'', 3500, 'images/i15_r.jpg', 'false'),
(77, 'IPhone 15 128Go Bleu - APPLE', 'Écran 6,1\"  Mémoire RAM: 6 Go - Stockage: 128Go - Appareil photo Arrière: DualPixels: 48 MP, f/1,6, 26 mm + 12 MP, f/2,4, 13 mm\'', 3500, 'images/i15_b.jpg', 'false'),
(88, 'IPhone 15 128Go Noir - APPLE', ' Écran 6,1\"  - Mémoire RAM: 6 Go - Stockage: 128Go - Appareil photo Arrière: DualPixels: 48 MP, f/1,6, 26 mm + 12 MP, f/2,4\'', 3500, 'images/i15_n.jpg', 'false'),
(99, 'IPhone 16 128Go Rose - APPLE', 'Écran 6,1 -Processeur: Apple A18 (3 nm) Hexa-core - GPU Apple graphiques 5 cœurs - Mémoire RAM: 8Go - Stockage: 128Go - Appareil photo Arrière: Fusion 48 MP f/1,6, 26 mm + 12 MP  ', 4900, 'images/i16_r.jpg', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `cin` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
