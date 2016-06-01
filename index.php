<html>
<head><title>Accueil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
<?php
include "menu.php";

?>



	<div class="a1">
		
		<div class="a5">
<h1>HISTOIRE</h1>
	
	<li><i>Année de construction:1985.</i></li>
	<li><i>Superficie: 722m2.</i></li>
	<li><i>Distinctions: 1995 première étoile. 2005 deuxième étoile.</i></li>

<p>
Le plus petit 2 étoiles de Créteil, L’hotel Les Ziags est depuis plus de 
10 ans une cachette secrète. Avec la quintessence du charme et du glamour 
à la française. L’Hotel est niché au cœur de la rive gauche, au milieu 
des richesses culturelles, de l’âme bohème et de la haute couture de St 
Germain-des-Près. Dernière demeure d’Oscar Wilde et le cœur de la société 
parisienne dans les années 90, il a été rénové par le célèbre architecte 
d’intérieur Jacques Garcia. Il est la maison du célèbre restaurant étoilé 
Michelin « Le Restaurant » et du très chic « Le Bar ».<p>
		</div>
<?php
include "reserver.php";
?>
<?php
if(isset($_GET['errorPeriode'])){
	echo "<script>alert('aaaaaa');</script>";
	
}
if(isset($_GET['errorChambreFull'])){
	echo "<script>alert('chambre full');</script>";
}
if(isset($_GET['errorChambre'])){
	echo "<script>alert('chambre vide');</script>";
	
}
if(isset($_GET['errorJoursExcede'])){
	echo "<script>alert('la réservation ne peut excéder une semaine pour une réservation effectuée par le client
lui-même.');</script>";
	
}
if(isset($_GET['errorMoisExcede'])){
	echo "<script>alert('Une réservation n’est possible que jusque 6 mois à l’avance.');</script>";
	
}
if(isset($_GET['errorJourError'])){
	echo "<script>alert('Une réservation n’est possible que au passée.');</script>";
	
}


?>


</div>	
</body>
</html>