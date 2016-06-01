<html>
<head><title>Paiement</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
<?php
include "menu.php";

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
?>

	<div class="a1">
		
		<div class="a14">
			<h1>Paiement</h1>
			<hr size="2px" color="black">
			<br>
			<form action="paiement.php" method="post">
				<input type="hidden" name="email" value='<?php echo $C_email;?>' />
				<input type="hidden" name="type" value='<?php echo $CHB_type;?>' />
				<input type="hidden" name="date_arrivee" value='<?php echo $date_arrivee;?>' />
				<input type="hidden" name="date_depart" value='<?php echo $date_depart;?>' />
				<input type="hidden" name="nom" value='<?php echo $C_nom;?>' />
				<input type="hidden" name="prenom" value='<?php echo $C_prenom;?>' />
				<input type="hidden" name="sexe" value='<?php echo $C_sexe;?>' />
				<input type="hidden" name="date_naissance" value='<?php echo $C_dateDeNaissance;?>' />
				<input type="hidden" name="nationalite" value='<?php echo $C_nationalite;?>' />
				<input type="hidden" name="adresse" value='<?php echo $C_adresse;?>' />
				<input type="hidden" name="numero" value='<?php echo $C_telephonePortable;?>' />
				<input type="hidden" name="nbrPersonne" value='<?php echo $R_nbrePersonne;?>' />
				<input type="hidden" name="motif" value='<?php echo $R_motif;?>' />

<?php

try{
	$dbh = new PDO('mysql:host=localhost;dbname=esiag_hotel', 'root', '');
	$query_email = "SELECT C_email FROM client WHERE C_email=?";
	$stmt=$dbh->prepare($query_email);
	$stmt->bindParam(1, $C_email);
	$stmt->execute();
	$nombre_email=$stmt->rowCount();


$verifier_disponible= 
"SELECT CHB_idChambre FROM chambre WHERE CHB_type=:type AND CHB_idChambre NOT IN
(SELECT DISTINCT R_idChambre 
FROM reservation , chambre 
WHERE R_idChambre=CHB_idChambre AND R_statut='N'
AND CHB_type=:type
AND ((R_dateArrivee<=:date_AR AND R_dateDepart>=:date_AR) OR (R_dateArrivee>=:date_AR AND R_dateArrivee<=:date_DR)))";

$stmt=$dbh->prepare($verifier_disponible);
$stmt->bindParam(":type", $CHB_type);
$stmt->bindParam(":date_AR", $date_arrivee);
$stmt->bindParam(":date_DR", $date_depart);
$stmt->execute();
$result = $stmt->fetch();
$chambre= $result[0];

$verifier_periode=
"SELECT COUNT(*) FROM reservation WHERE C_email=:C_email AND MONTH(R_dateArrivee)=MONTH(:R_dateArrivee)";
$stmt->bindParam(":date_AR", $date_arrivee);
$stmt->bindParam(":C_email", $C_email);
$stmt->execute();
$result1 = $stmt->fetch();
$periode= $result1[0];


$nombre_chambre_libre=$stmt->rowCount();
$date_start= strtotime($date_arrivee);
$date_end= strtotime($date_depart);
$diff=$date_end-$date_start;
$jours=floor($diff/86400);
$t=time();
$diff_jours=$date_start-$t;
$mois_excede=floor($diff_jours/86400);

if($button_click=="verifier"){
	if($periode>1){
	header("location:index.php?errorPeriode");
}
	if($jours>7){
		header("location:index.php?errorJoursExcede");}
	else if($mois_excede>182){
		header("location:index.php?errorMoisExcede");}
	else if($jours<=7){
		if($nombre_chambre_libre>0){
	header("location:index.php?errorChambre");}
	else header("location:index.php?errorChambreFull");
	}
}

if($jours>7){
		header("location:index.php?errorJoursExcede");}
else if($jours<0){
		header("location:index.php?errorJoursError");}
else if($mois_excede>182){
		header("location:index.php?errorMoisExcede");

	}



$idReservation='SELECT max(R_idReservation) FROM reservation';
$stmt = $dbh->prepare($idReservation);
$stmt->execute();
$resultat=$stmt->fetch();
$id=$resultat[0]+1;


$chercher_tarif="SELECT CHB_tarifHT FROM chambre WHERE CHB_idChambre=?";
$stmt=$dbh->prepare($chercher_tarif);
$stmt->bindParam(1, $chambre);
$stmt->execute();
$resultt = $stmt->fetch();
$montant= $resultt[0]*$jours;
$total=$montant*119.6/100;




if( isset($_POST["numero_carte"])&& $nombre_chambre_libre>0){

if($nombre_email>0){
$sql = 'CALL reservation(:C_email, :idChambre , :date_AR, :date_DR, :nbrPersonne, :motif)';
$stm = $dbh->prepare($sql);
$stm->bindParam(":C_email", $C_email);
$stm->bindParam(":date_AR", $date_arrivee);
$stm->bindParam(":date_DR", $date_depart);
$stm->bindParam(":idChambre", $chambre);
$stm->bindParam(":nbrPersonne", $R_nbrePersonne);
$stm->bindParam(":motif", $R_motif);
$reservation_succes=$stm->execute();

if($reservation_succes===true){

echo "<script>alert('Paiement succes')</script>";}
else echo "<script>alert('Paiement failed')</script>";
}

else if ($nombre_email==0){
$insert_client ="INSERT INTO client (C_nom, C_prenom, C_sexe, C_dateDeNaissance, C_nationalite, C_adresse, C_telephonePortable, C_email) 
VALUES (:C_nom, :C_prenom, :C_sexe, :C_dateDeNaissance, :C_nationalite, :C_adresse, :C_telephonePortable, :C_email)";

$stmt=$dbh->prepare($insert_client);
$stmt->bindParam(":C_nom", $C_nom);
$stmt->bindParam(":C_prenom", $C_prenom);
$stmt->bindParam(":C_sexe", $C_sexe);
$stmt->bindParam(":C_dateDeNaissance", $C_dateDeNaissance);
$stmt->bindParam(":C_nationalite", $C_nationalite);
$stmt->bindParam(":C_adresse", $C_adresse);
$stmt->bindParam(":C_telephonePortable", $C_telephonePortable);
$stmt->bindParam(":C_email", $C_email);
$client_succes=$stmt->execute();

$sql = 'CALL reservation(:C_email, :idChambre , :date_AR, :date_DR, :nbrPersonne, :motif)';
$stm = $dbh->prepare($sql);
$stm->bindParam(":C_email", $C_email);
$stm->bindParam(":date_AR", $date_arrivee);
$stm->bindParam(":date_DR", $date_depart);
$stm->bindParam(":idChambre", $chambre);
$stm->bindParam(":nbrPersonne", $R_nbrePersonne);
$stm->bindParam(":motif", $R_motif);
$reservation_succes=$stm->execute();

if($client_succes===true && $reservation_succes===true){

echo "<script>alert('Paiement succes')</script>";}
else echo "<script>alert('Paiement failed')</script>";
}
}

}
catch(PDOEXception $e){
	print "Error!: " . $e->getMessage() . "<br/>";
}


?>

			
			<h2>Montant HT : <?php echo"$montant"?> euros</h2>
			<h2>TVA		   : 19.6%</h2>
			<h2>Total 	   : <?php echo"$total"?> euros</h2>
			<p><i class="	fa fa-cc-visa"></i> <input type="radio" name="rd"></input>   <i class="fa fa-cc-mastercard"></i><input type="radio" name="rd"></input>   <i class="fa fa-cc-paypal"></i> <input type="radio" name="rd"></input></p>
			<h2>Numéro de la carte </h2>
			<input type="text" size=40px name="numero_carte"></input><br/>
			<h2>Titulaire de la carte </h2>
			<input type="text" size=30px></input>
			<h2>Date d'expiration</h2>
			<select cols="20px"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
			</select><br/>
			<select cols="20px"><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option><option>2026</option><option>2027</option>
			</select>
			<h2>Cryptogramme</h2>
			<input type="text" size=20px></input><br/>
			<h3><?php echo "Vous utilisez votre ID de réservation pour annuler votre réservation: $id"?></h3>
			<br><br>
			<input class="button_paiement" name="paiement" type="submit" value="Paiement"/>
			</form>
		</div>
		
	</div>


</body>
</html>