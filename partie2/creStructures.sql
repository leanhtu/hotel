

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `chambre` (
  `CHB_idChambre` int(10) UNSIGNED NOT NULL,
  `CHB_numero` int(11) NOT NULL,
  `CHB_etage` enum('1','2') NOT NULL,
  `CHB_type` enum('simple','double','familiale') NOT NULL,
  `CHB_doucheWC` enum('privee','commun') NOT NULL,
  `CHB_cote` enum('cour','A86') DEFAULT NULL,
  `CHB_superficie` float NOT NULL,
  `CHB_tarifHT` float NOT NULL,
  `CHB_statut` enum('occupee','libre') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`CHB_idChambre`);

 table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `CHB_idChambre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE `client` (
  `C_idClient` int(10) UNSIGNED NOT NULL,
  `C_nom` varchar(32) DEFAULT NULL,
  `C_prenom` varchar(32) NOT NULL,
  `C_sexe` enum('M','F') NOT NULL,
  `C_dateDeNaissance` date NOT NULL,
  `C_nationalite` varchar(20) NOT NULL,
  `C_adresse` varchar(50) NOT NULL,
  `C_telephonePortable` varchar(15) NOT NULL,
  `C_email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `client`
  ADD PRIMARY KEY (`C_idClient`);


ALTER TABLE `client`
  MODIFY `C_idClient` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;




SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `reservation` (
  `R_idReservation` int(11) NOT NULL,
  `C_email` varchar(50) NOT NULL,
  `R_idChambre` int(11) NOT NULL,
  `R_dateArrivee` date NOT NULL,
  `R_dateDepart` date NOT NULL,
  `R_nbrePersonne` int(3) NOT NULL,
  `R_motif` enum('Tourisme','En mission','Autre') NOT NULL,
  `R_statut` enum('N','A') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `reservation`
  ADD PRIMARY KEY (`R_idReservation`);


ALTER TABLE `reservation`
  MODIFY `R_idReservation` int(11) NOT NULL AUTO_INCREMENT;
