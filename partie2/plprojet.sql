Q7:
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `annuler_reservation`(IN `email` VARCHAR(30), IN `idReservation` INT(2))
BEGIN 
UPDATE reservation SET R_statut='A' WHERE email=email AND R_idReservation=idReservation;
END$$
DELIMITER ;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `reservation`(IN `email` VARCHAR(30), IN `idChambre` INT(3), IN `dateArrivee` DATE, IN `dateDepart` DATE, IN `nbrePersonne` INT(2), IN `motif` VARCHAR(20))
BEGIN
DECLARE duree INT;
SET duree= DATEDIFF(dateDepart, dateArrivee);
IF (duree<7 AND DATEDIFF(dateArrivee, CURDATE())<182) THEN
INSERT INTO reservation(C_email, R_idChambre, R_dateArrivee, R_dateDepart, R_nbrePersonne, R_statut, R_motif) VALUES (email, idChambre, dateArrivee, dateDepart, nbrePersonne, 'N', motif);
END IF;
END$$
DELIMITER ;
