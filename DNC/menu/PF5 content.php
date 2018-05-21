<menu id='menu'>
	<menu class='top'>inscription aux formations</menu>
	<menu class='titre'>
	<?php 
    	session_start();
    	include "../lib/php/connectAD.php";
    	$matricule = $_SESSION['sp_matricule'];
    	$sql = "SELECT SP_PRENOM, SP_NOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
    	afficheRequete($sql);
	?>
	</menu>
		<input id="inscrire" name = "formation" type="radio" /><label for='inscrire'>Inscrire</label><br />
		<input id="supprimer" name = "formation"  type="radio" /><label for='supprimer'>Supprimer l&#39;inscription</label><br />
		<br />
		<span>Formation:&nbsp;</span><select></select><br />
		<br />
		<input name="submit" type="submit" />
		<input name="Annuler" type="button" value="Annuler"/><br />
		
		

</menu>