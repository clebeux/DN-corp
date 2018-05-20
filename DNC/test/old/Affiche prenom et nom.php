<?php 
	// Avec un matricule
	// Affiche le nom et le prenom
	include 'connectAD.php';
	$matricule = "10";
	$sql = "SELECT SP_PRENOM, SP_NOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
	afficheRequete_debug($sql);

?>