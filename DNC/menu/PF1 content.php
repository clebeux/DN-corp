<div>
	<?php
	   session_start();
	   header('Content-type: text/html; charset=iso-8859-1'); 
	   include "../lib/php/connectAD.php";
	   $matricule = $_SESSION['sp_matricule'];
	?>
	<menu id = "menu">
	<menu class="top">personnels</menu>
	<menu class="titre">
	<?php
			$sql = "SELECT SP_PRENOM, SP_NOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
			afficheRequete($sql);
	?>
	</menu>
	<menu class="content">
		<div class="gauche">
			<span>Matricule: </span>
			<?php 
	
			 echo "$matricule <br/>";
			 
			 $sql = "SELECT CIS_NOM
			         FROM CASERNE
			         WHERE CIS_ID = (SELECT CIS_ID
				                    FROM POMPIER
				                    WHERE SP_MATRICULE = $matricule)";
			 afficheRequete($sql);
			 echo "<br/>";
			 $sql = "SELECT SP_DTE_NAISSANCE
			         FROM POMPIER
			         WHERE SP_MATRICULE = $matricule";
			 $age = date("Y-m-d") - champSQL($sql);
			 echo "$age ans";

			?>
			<fieldset>
			<?php 
				echo '<div class="gauche">';
					
    					$sql = "SELECT SP_STATUT
    					FROM POMPIER
    					WHERE SP_MATRICULE = $matricule ";
    					afficheRequete($sql);
    					

					
				echo '</div>';
				echo '<div class="droite">';
                        $sql = "SELECT GRA_LIBELLE
    					FROM GRADE
    					WHERE GRA_ID = (
    					SELECT GRA_ID
    					FROM POMPIER
    					WHERE SP_MATRICULE = $matricule
    					
    					)";
    	
    					afficheRequete($sql);
    					$sql = "SELECT DATE_AFFECTATION
			                     FROM POMPIER
			                     WHERE SP_MATRICULE = $matricule";
    					echo " ".champSQL($sql);
    			echo '</div>
                      </fieldset>';


			     echo "<br />Récepteur d'alerte: ";
			     $sql = "SELECT SP_TEL_PORTABLE
    					FROM POMPIER
    					WHERE SP_MATRICULE = $matricule ";
			      afficheRequete($sql);
		      ?>
		      <button><img alt="" src="">?</button>
		<br><button><img class="button_logo" alt="" src="../../images/notes.png">Formation</button>
		</div>
		<div class="droite border-left"><span>Fonctions occupées </span></div>
	</menu>
	</menu>

	
</div>