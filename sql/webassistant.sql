-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 jan. 2021 à 21:56
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webassistant`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

CREATE TABLE `appointment` (
  `Id_Appointment` int(11) NOT NULL,
  `startMeeting` datetime NOT NULL,
  `endMeeting` datetime DEFAULT NULL,
  `Patient_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`Id_Appointment`, `startMeeting`, `endMeeting`, `Patient_Id`) VALUES
(2, '2021-01-20 12:18:01', '2021-01-20 13:18:01', 11);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210118225017', '2021-01-18 23:50:32', 1679),
('DoctrineMigrations\\Version20210118232958', '2021-01-19 00:30:14', 283),
('DoctrineMigrations\\Version20210119144500', '2021-01-19 15:45:41', 1313),
('DoctrineMigrations\\Version20210119181054', '2021-01-19 19:11:41', 2434);

-- --------------------------------------------------------

--
-- Structure de la table `healthprofessional`
--

CREATE TABLE `healthprofessional` (
  `Id_Professional` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `cellPhone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `healthprofessional`
--

INSERT INTO `healthprofessional` (`Id_Professional`, `lastName`, `firstName`, `address`, `postCode`, `city`, `cellPhone`) VALUES
(3, 'toto', 'test', '47 boulevard du test', '12000', 'rodez', '0638');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_Patient` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `Professional_Id` int(11) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `mail_address` varchar(255) NOT NULL,
  `number_of_children` smallint(6) DEFAULT NULL,
  `occupation_education` varchar(255) DEFAULT NULL,
  `social_security_number` int(11) NOT NULL,
  `disease` varchar(255) DEFAULT NULL,
  `psycology` varchar(255) DEFAULT NULL,
  `medical_treatment` varchar(255) DEFAULT NULL,
  `long_lasting_treatment` varchar(255) DEFAULT NULL,
  `punctual_processing` varchar(255) DEFAULT NULL,
  `other_medical_history` varchar(255) DEFAULT NULL,
  `sprain` varchar(255) DEFAULT NULL,
  `fracture` varchar(255) DEFAULT NULL,
  `dislocation` varchar(255) DEFAULT NULL,
  `car_accident` varchar(255) DEFAULT NULL,
  `accident_on_the_public_road` varchar(255) DEFAULT NULL,
  `fall` varchar(255) DEFAULT NULL,
  `other_trauma_history` varchar(255) DEFAULT NULL,
  `orthopaedic` varchar(255) DEFAULT NULL,
  `head_churigie` varchar(255) DEFAULT NULL,
  `chest_churigie` varchar(255) DEFAULT NULL,
  `churigia_of_abdomen` varchar(255) DEFAULT NULL,
  `gynecological_churigie` varchar(255) DEFAULT NULL,
  `orl` varchar(255) DEFAULT NULL,
  `death` varchar(255) DEFAULT NULL,
  `childbirth` varchar(255) DEFAULT NULL,
  `other_family_history` varchar(255) DEFAULT NULL,
  `landline_phone` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `general_remarks` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `leisure` varchar(255) DEFAULT NULL,
  `mutual` varchar(255) DEFAULT NULL,
  `sent_by` varchar(255) DEFAULT NULL,
  `manual_preference` varchar(255) DEFAULT NULL,
  `notes_on_history` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id_Patient`, `last_name`, `first_name`, `gender`, `birth_date`, `city`, `phoneNumber`, `Professional_Id`, `address`, `post_code`, `mail_address`, `number_of_children`, `occupation_education`, `social_security_number`, `disease`, `psycology`, `medical_treatment`, `long_lasting_treatment`, `punctual_processing`, `other_medical_history`, `sprain`, `fracture`, `dislocation`, `car_accident`, `accident_on_the_public_road`, `fall`, `other_trauma_history`, `orthopaedic`, `head_churigie`, `chest_churigie`, `churigia_of_abdomen`, `gynecological_churigie`, `orl`, `death`, `childbirth`, `other_family_history`, `landline_phone`, `address_2`, `general_remarks`, `marital_status`, `leisure`, `mutual`, `sent_by`, `manual_preference`, `notes_on_history`) VALUES
(11, 'test', 'test', 'Women', '2016-01-01', 'sd', '06', 3, 'sdc', 'qsd', '25', NULL, NULL, 548, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qsd', 'no-specify', NULL, NULL, NULL, 'right-handed', 'qsd');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `brochure_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Id_Appointment`),
  ADD KEY `patientId` (`Patient_Id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `healthprofessional`
--
ALTER TABLE `healthprofessional`
  ADD PRIMARY KEY (`Id_Professional`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_Patient`),
  ADD KEY `professionalId` (`Professional_Id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Id_Appointment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `healthprofessional`
--
ALTER TABLE `healthprofessional`
  MODIFY `Id_Professional` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_Patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `FK_FE38F844B150B50B` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`id_Patient`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `FK_1ADAD7EB10F66A3F` FOREIGN KEY (`Professional_Id`) REFERENCES `healthprofessional` (`Id_Professional`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
