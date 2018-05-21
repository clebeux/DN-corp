<menu id='menu'>
	<menu class='top'>inscription aux formations</menu>
	<menu class='titre'>
	<?php 
    	include "../lib/php/connectAD.php";
    	$matricule =   $_SESSION['sp_matricule'];
    	$gra_id    =   $_SESSION['gra_id'];
    	$sql = "SELECT SP_PRENOM, SP_NOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
    	afficheRequete($sql);
	?>
	</menu>
		<input id="inscrire" name = "formation" type="radio" /><label for='inscrire'>Inscrire</label><br />
		<input id="supprimer" name = "formation"  type="radio" /><label for='supprimer'>Supprimer l&#39;inscription</label><br />
		<br />
		<span>Formation:&nbsp;</span>
		<?php 
    		$sql = "SELECT FOR_ID  FROM FORMATION";
    		$champ_id = "FOR_ID";
    		$champ_nom = $champ_id;
    		afficheListe_SQL($sql,$champ_id,$champ_nom);
		?>
		<br /><br />
		<input name="submit" type="submit" />
		<button onclick="window.location.href='../03_sf/03_sf.php'">Annuler</button><br />
		
		

</menu>