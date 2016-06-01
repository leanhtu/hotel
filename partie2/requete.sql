1) 
SELECT C_nom, C_prenom
FROM reservation r, client c
WHERE r.C_email=c.C_email
AND R_statut = 'annuler'
AND (R_dateArrivee LIKE '2016-01-%'
OR R_dateArrivee LIKE '2016-02-%'
OR R_dateArrivee LIKE '2016-03-%'
OR R_dateArrivee LIKE '2016-04-%')


2)
CREATE VIEW client2016
AS SELECT C_nom, C_prenom, SUM(DATEDIFF(R_dateDepart,R_dateArrivee)) 
AS nbrejour
FROM reservation r, client c
WHERE r.C_email = c.C_email
AND R_dateArrivee LIKE '2016%'

SELECT C_nom,C_prenom, MAX(nbrejour)
FROM client2016
3)
CREATE VIEW client2015
AS SELECT C_nom, C_prenom, SUM(DATEDIFF(R_dateDepart,R_dateArrivee)) 
AS nbrejour
FROM reservation r, client c
WHERE r.C_email = c.C_email
AND R_dateArrivee LIKE '2015%'

SELECT C_nom,C_prenom, nbrejour
FROM client2015
WHERE nbrejour>3

4.
SELECT count(CHB_idChambre)
FROM reservation
WHERE 
DATEDIFF(CURDATE(), R_dateArrivee)>0 AND (DATEDIFF(R_dateDepart, CURDATE()) OR DATEDIFF(CURDATE(), R_dateArrivee))=0
5.
SELECT SUM(CHB_tarifHT*1.2*DATEDIFF(R_dateDepart,R_dateArrivee)) AS CA
FROM reservation , chambre 
WHERE CHB_idChambre=R_idChambre
AND R_dateArrivee LIKE '2016-01%' AND R_statut = "deja_paye"
6.
SELECT COUNT(R_idReservation)/12*31 AS TauxDoccupations
FROM reservation
WHERE R_dateArrivee LIKE '2016-01%' AND R_dateDepart LIKE '2016-01%' AND R_statut LIKE 'deja_paye'
