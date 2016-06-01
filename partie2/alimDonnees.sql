-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 10 Avril 2016 à 00:10
-- Version du serveur :  5.7.10
-- Version de PHP :  5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `esiag_hotel`
--

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`CHB_idChambre`, `CHB_numero`, `CHB_etage`, `CHB_type`, `CHB_doucheWC`, `CHB_cote`, `CHB_superficie`, `CHB_tarifHT`, `CHB_statut`) VALUES
(1, 11, '1', 'simple', 'commun', 'A86', 25.06, 20, 'occupee'),
(2, 12, '1', 'simple', 'commun', 'A86', 25.03, 20, 'occupee'),
(3, 13, '1', 'double', 'privee', NULL, 38, 35, 'occupee'),
(4, 14, '1', 'double', 'privee', NULL, 38, 35, 'occupee'),
(5, 15, '1', 'double', 'privee', 'cour', 38, 40, 'occupee'),
(6, 16, '1', 'familiale', 'privee', 'cour', 43, 80, 'occupee'),
(7, 21, '2', 'simple', 'privee', NULL, 25, 25, 'occupee'),
(8, 22, '2', 'simple', 'privee', NULL, 25, 25, 'occupee'),
(9, 23, '2', 'double', 'privee', NULL, 38, 35, 'occupee'),
(10, 24, '2', 'double', 'privee', NULL, 38, 35, 'occupee'),
(11, 25, '2', 'double', 'privee', NULL, 43, 35, 'occupee'),
(12, 26, '2', 'familiale', 'privee', NULL, 43, 70, 'occupee');


-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 10 Avril 2016 à 00:11
-- Version du serveur :  5.7.10
-- Version de PHP :  5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Mai 2016 à 22:30
-- Version du serveur :  5.7.10
-- Version de PHP :  5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `esiag_hotel`
--

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`C_idClient`, `C_nom`, `C_prenom`, `C_sexe`, `C_dateDeNaissance`, `C_nationalite`, `C_adresse`, `C_telephonePortable`, `C_email`) VALUES
(1, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '36 rue Campo Formio', '0782445566', 'leanhtu_2210@yahoo.com.vn'),
(2, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '36 rue Campo Formio', '0782445566', 'leanhtu_2210@yahoo.com.vn'),
(3, 'BUI', 'Phuong Thao', 'M', '1995-03-05', 'Vienamienne', '36 rue Campo Formio', '0695936696', 'phuongthaofontaine@yahoo.fr'),
(4, 'PHAN', 'Phuoc Hung', 'M', '1995-08-24', 'Vienamienne', 'Paris', '0632562528', 'hung@.fr'),
(5, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '36 rue Campo Formio', '0782445566', 'leanhtu_2210@yahoo.com.vn'),
(6, 'BUI', 'Phuong Thao', 'F', '1995-03-05', 'Vienamienne', '36 rue Campo Formio', '0695936696', 'phuongthaofontaine@yahoo.fr'),
(7, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '0782453366', '0782445566', 'leanhtu_2210@yahoo.com.vn'),
(8, 'BUI', 'Phuong Thao', 'F', '1995-03-05', 'Vienamienne', '36 rue Campo Formio', '0695936696', 'phuongthaofontaine@yahoo.fr'),
(9, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '36 rue Campo Formio', '0632562528', 'leanhtu_2210@yahoo.com.vn'),
(10, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '0782453366', '0782445566', 'leanhtu_2210@yahoo.com.vn'),
(11, 'ambre', 'aa', 'M', '1997-05-06', 'Francaise', 'Creteil', '0785223656', 'ambre@gmail.com'),
(12, 'LE', 'Anh Tu', 'M', '1995-10-22', 'Vienamienne', '36 rue campo', '0782453366', 'leanhtu_2210@yahoo.com.vn'),
(13, 'Agour', 'AA', 'M', '1995-02-26', 'Francaise', 'Paris', '062354521', 'agour@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 16 Mai 2016 à 22:31
-- Version du serveur :  5.7.10
-- Version de PHP :  5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `esiag_hotel`
--

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`R_idReservation`, `C_email`, `R_idChambre`, `R_dateArrivee`, `R_dateDepart`, `R_nbrePersonne`, `R_motif`, `R_statut`) VALUES
(1, 'leanhtu_2210@yahoo.com.vn', 1, '2016-06-01', '2016-06-05', 1, 'Tourisme', 'A'),
(2, 'leanhtu_2210@yahoo.com.vn', 1, '2016-06-01', '2016-06-05', 1, 'Tourisme', 'A'),
(3, 'phuongthaofontaine@yahoo.fr', 2, '2016-06-01', '2016-06-05', 1, 'Tourisme', 'N'),
(4, 'hung@.fr', 7, '2016-06-01', '2016-06-05', 1, 'Tourisme', 'N'),
(5, 'leanhtu_2210@yahoo.com.vn', 1, '2016-06-12', '2016-06-15', 1, 'Tourisme', 'N'),
(6, 'phuongthaofontaine@yahoo.fr', 2, '2016-06-12', '2016-06-14', 1, 'Tourisme', 'N'),
(7, 'leanhtu_2210@yahoo.com.vn', 8, '2016-06-01', '2016-06-05', 1, 'Tourisme', 'N'),
(8, 'phuongthaofontaine@yahoo.fr', 7, '2016-06-12', '2016-06-16', 2, 'Tourisme', 'N'),
(9, 'leanhtu_2210@yahoo.com.vn', 3, '2016-06-01', '2016-06-05', 3, 'Tourisme', 'N'),
(10, 'leanhtu_2210@yahoo.com.vn', 6, '2016-06-12', '2016-06-14', 4, 'Tourisme', 'N'),
(11, 'leanhtu_2210@yahoo.com.vn', 6, '2016-06-01', '2016-06-05', 3, 'Tourisme', 'N'),
(12, 'leanhtu_2210@yahoo.com.vn', 12, '2016-06-01', '2016-06-05', 3, 'Tourisme', 'N'),
(13, 'leanhtu_2210@yahoo.com.vn', 1, '2016-07-05', '2016-07-08', 1, 'Tourisme', 'N'),
(14, 'Duong@yahoo.com', 4, '2016-06-05', '2016-06-08', 1, 'Tourisme', 'N'),
(15, 'leanhtu_2210@yahoo.com.vn', 3, '2016-06-18', '2016-06-20', 1, 'Tourisme', 'N'),
(16, 'leanhtu_2210@yahoo.com.vn', 3, '2016-06-18', '2016-06-20', 1, 'Tourisme', 'N'),
(17, 'leanhtu_2210@yahoo.com.vn', 1, '2016-08-03', '2016-08-06', 1, 'Tourisme', 'N'),
(18, 'leanhtu_2210@yahoo.com.vn', 6, '2016-06-18', '2016-06-20', 4, 'Tourisme', 'N'),
(19, 'leanhtu_2210@yahoo.com.vn', 1, '2016-06-01', '2016-06-05', 1, 'Tourisme', 'N'),
(20, 'leanhtu@gmail.com', 3, '2016-07-02', '2016-07-05', 3, 'En mission', 'N'),
(21, 'leanhtu_2210@yahoo.com.vn', 4, '2016-06-20', '2016-06-22', 2, 'En mission', 'N'),
(22, 'leanhtu_2210@yahoo.com.vn', 3, '2016-07-08', '2016-07-10', 1, 'En mission', 'N'),
(23, 'agour@gmail.com', 3, '2016-06-12', '2016-06-15', 2, 'En mission', 'N');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
