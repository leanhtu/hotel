<html>
<head><title>Annuler</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	
	
	
	
</head>
<body>
<?php
	include "menu.php";
?>
	<div class="a1">
		<div class="a13">
			<h2>Conditions d'annulation</h2>
			<p>Tous les frais consécutifs seront dus à Hôtel Les Ziags.<br/>
Toute réservation du client qui a reçu une confirmation par les services de réservation de 
l’Hôtel du Lac par téléphone, télécopie ou internet, correspond à l’ouverture et au traitement 
du dossier du client.<br/>
Toute annulation doit nous être confirmée par écrit, email.<br/>
Annulation de 3 à 7 jours avant la date de séjour : pour 1 nuitée réservée, 30% du montant 
total de la réservation ; à partir de 2 nuitées réservées et au delà : pénalité d’une nuitée.
Annulation 2 jours avant la date de séjour : pour la ou toutes les nuitées réservées, le 
montant d’une nuitée sera du.<br/>
Annulation le jour de la date du séjour : pour la nuitée réservée, le montant total de la 
réservation sera du ; à partir de 2 nuitées réservées et au delà, pénalité de 2 nuitées.<br/>


					
			</p>
			<br/><br/>
			<form action"annuler.php" method="post">
			<h3>Email <input name="email" type="text" size="4px" required /></h3>
			<h3>ID reservation <input name="id_reservation" type="text" size="4px" required /></h3>
			<input name="annuler" type="submit" value="Annuler reservation"/>
		</form>
		</div>
	</div>
	<?php
	$C_email=isset($_POST["email"]) ? $_POST["email"] : null;
	$R_idReservation=isset($_POST["id_reservation"]) ? $_POST["id_reservation"] : null;
	try{
		if(isset($C_email) && isset($R_idReservation)){
		$dbh = new PDO('mysql:host=localhost;dbname=esiag_hotel', 'root', '');
		$annuler_reservation='CALL annuler_reservation(:C_email, :id_reservation)';
		$stmt = $dbh->prepare($annuler_reservation);
		$stmt->bindParam(":C_email", $C_email);
		$stmt->bindParam(":id_reservation", $R_idReservation);
		$annuler=$stmt->execute();
		if($annuler===true){
echo "<script>alert('Annuler succes')</script>";}
else echo "<script>alert('Annuler failed')</script>";
}
}
		catch(PDOEXception $e){
	print "Error!: " . $e->getMessage() . "<br/>";
	}

	?>
	
</body>
</html>