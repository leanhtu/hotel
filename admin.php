<html>
<head><title>Gestion</title></head>
<body>
	<form action="admin.php" method="post">
	<p>Nom client <input name="nom" type="text" size=20px/></p>
	<p>Prenom client <input name="prenom" type="text" size=20px/></p>
	<p>Date Arrivee <input name="dat_arrivee" type="text" size=20px/></p>
	<input class="button_reservation" name="reserver" type="submit" value="Réserver maintenant"/>
	</form>

<?php
$C_email=isset($_POST["email"]) ? $_POST["email"] : null;
$CHB_type=isset($_POST["type"]) ? $_POST["type"] : null;
$date_arrivee=isset($_POST["date_arrivee"]) ? $_POST["date_arrivee"] : null;
$date_depart=isset($_POST["date_depart"]) ? $_POST["date_depart"] : null;
$button_click=isset($_POST["button_click"]) ? $_POST["button_click"] : null;
$C_nom=isset($_POST["nom"]) ? $_POST["nom"] : null;
$C_prenom=isset($_POST["prenom"]) ? $_POST["prenom"]:null;
$C_sexe=isset($_POST["sexe"]) ? $_POST["sexe"] : null;
$C_dateDeNaissance=isset($_POST["date_naissance"]) ? $_POST["date_naissance"] : null;
$C_nationalite=isset($_POST["nationalite"]) ? $_POST["nationalite"] : null;
$C_adresse=isset($_POST["adresse"]) ? $_POST["adresse"] : null;
$C_telephonePortable=isset($_POST["numero"]) ? $_POST["numero"] : null;
$R_nbrePersonne=isset($_POST["nbrPersonne"]) ? $_POST["nbrPersonne"] : null;
$R_motif=isset($_POST["motif"]) ? $_POST["motif"] : null;
try{
	$dbh = new PDO('mysql:host=localhost;dbname=esiag_hotel', 'root', '');
	$recherche="SELECT C_nom, C_prenom FROM reservation , client 
WHERE C_email=C_email
AND R_statut = 'annuler'
AND (R_dateArrivee LIKE '2016-01-%'
OR R_dateArrivee LIKE '2016-02-%'
OR R_dateArrivee LIKE '2016-03-%'
OR R_dateArrivee LIKE '2016-04-%')";
$stmt=$dbh->prepare($recherche);
$stmt->execute();
$result = $stmt->fetch();
echo $result[0];
echo "table border='1'>
<tr>
	<td>nom</td>
	<td>prenom</td>
</tr>
 while($row = mysql_fetch_array($recherche)){
$nom=$row['C_nom'];
$nom=$row['C_prenom'];
<tr>
	<td><?php echo '$nom'?></td>
	<td><?php echo '$prenom'?></td>
</tr>
 }"
}
catch(PDOEXception $e){
	print "Error!: " . $e->getMessage() . "<br/>";
}

?>
</body>
</html>