<div>
	<?php
		header('Content-type: text/html; charset=iso-8859-1'); 
		include "connectAD.php";
		$matricule = "10";
	?>
	<div class="pf1_head">
		<img class="logo" alt="" src="../../images/casque.png">
		<span>
		<?php
			$sql = "SELECT SP_PRENOM, SP_NOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
			afficheRequete($sql);
		?>
		</span>
	</div>
	<div class="pf1_partie_gauche">
		<span>Matricule: </span>
		<?php
		
			echo "<span>$matricule</span><br>";
			$sql = "SELECT CIS_NOM 
			FROM CASERNE 
			WHERE CIS_ID = (
				SELECT CIS_ID
				FROM POMPIER
				WHERE SP_MATRICULE = $matricule
				
			)";
			afficheRequete($sql);
			$sql = "SELECT SP_DTE_NAISSANCE 
			FROM POMPIER
			WHERE SP_MATRICULE = $matricule";
			$age = date("Y-m-d") - champSQL($sql);
			echo "<br />".$age." ans";
			echo "<fieldset>";
			$sql = "SELECT SP_STATUT 
					FROM POMPIER 
					WHERE SP_MATRICULE = $matricule ";
			afficheRequete($sql);

			$sql = "SELECT GRA_LIBELLE
					FROM GRADE
					WHERE GRA_ID = (
					SELECT GRA_ID
					FROM POMPIER
					WHERE SP_MATRICULE = $matricule
	
					)";
			echo "______";
			afficheRequete($sql);
			$sql = "SELECT SP_TEL_PORTABLE 
					FROM POMPIER
					WHERE SP_MATRICULE = $matricule ";
			echo "</fieldset>";
			echo "<br />Récepteur d'alerte: ";
			afficheRequete($sql);
		?>
		
			<span>SQL Volontaire Caporal Chef 12/11/2013</span>

		<button><img alt="" src="">tesrtgd</button>
		<br><button><img class="button_logo" alt="" src="../../images/notes.png">Formation</button>
	</div>
	
	<div class="pf1_partie_droite">
		<span>Fonctions occupées </span>
		<span>SQL </span>
	</div>
	
</div>