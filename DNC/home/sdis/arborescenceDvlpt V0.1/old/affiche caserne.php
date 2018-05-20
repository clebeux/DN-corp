<?php 
	include 'connectAD.php';
	$matricule = "10";
	$sql = "SELECT CIS_NOM 
			FROM CASERNE 
			WHERE CIS_ID = (
				SELECT CIS_ID
				FROM POMPIER
				WHERE SP_MATRICULE = $matricule
				
			)";
	afficheRequete_debug($sql);

?>