
			<div class="reserver">
				<h2 align="center">TARIF À PARTIR DE 20 EUROS</h2><br/>
				<h3>Réserver votre chambre</h3>
				<hr>
				<form action="paiement.php" method="POST" id="form_reservation">
					<input type="hidden" name="button_click" id="button_click" />
					<p>Date d'arrivée  <input class="date_arrivee" name="date_arrivee" type="text" size=15px value="aaaa-mm-dd" pattern="\d{4}-(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3[0-1])" title="aaaa-mm-dd" required/></p>  
					<p>Date de départ <input class="date_depart" name="date_depart" type="text" size=15px value="aaaa-mm-dd" pattern="\d{4}-(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3[0-1])" title="aaaa-mm-dd" required/></p>
					<p>Nombre personne
					<select name="nbrPersonne">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>

					</select> </p>
					<p>Chambre</p> 
					<select name="type">
						<option value="simple">Chambre Simple</option>
						<option value="double">Chambre Double</option>
						<option value="familiale">Chambre Familiale</option>
					</select> <br/><br/>
					<input class="button_verifier" name="verifier" type="button" value="Vérifier disponibilité" onclick="submitForm('verifier')"/>
					<br/><br/>
					<h3>Informations Personnelles</h3>
					<hr>
					<p>Nom<input class="nom" name="nom" type="text" size="4px" pattern="([A-Z]|[a-z])+" tittle="sans numero"required /></p>
					<p>Prénom <input class="prenom" name="prenom" type="text" size="4px" required/></p>
					<p>Homme <input type="radio" name="sexe" value="M"/>   Femme<input type="radio" name="sexe" value="F"/> </p>
					<p>Date de naisance <input class="date_naissance" size="4px" name="date_naissance" type="text" size=15px value="aaaa-mm-dd" pattern="\d{4}-(0[1-9]|1[0-2])-(0[1-9]|1[0-9]|2[0-9]|3[0-1])" title="aaaa-mm-dd" required/></p>
					<p>Adresse <input name="adresse" type="text" required/></p>
					<p>Nationalité <input class="nationalite" name="nationalite" type="text" required/></p>
					<p>Motif Hébergement<select name="motif">
						<option value="Tourisme">Tourisme</option>
						<option value="En mission">En mision</option>
						<option value="Autre">Autre</option>
					</select></p>
					<p>Numéro portable <input class="numero" name="numero" type="text" pattern="\d+" tittle="0556..." size=15px required/></p>
					<p>E-mail <input name="email" type="text" size=20px required/></p>
					

			<br>
			<br>
					<input class="button_reservation" name="reserver" type="submit" value="Réserver maintenant"/>
			
				</form>

			</div>

<script>
function submitForm(s){
	document.getElementById("button_click").value=s;
	document.getElementById("form_reservation").submit();
}
</script>
?>
	