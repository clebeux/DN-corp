<?php
	include 'connectAD.php';
	$matricule = "10";
	$sql = "SELECT GRA_LIBELLE
	FROM GRADE
	WHERE GRA_ID = (
	SELECT GRA_ID
	FROM POMPIER
	WHERE SP_MATRICULE = $matricule
	
	)";
	afficheRequete_debug($sql);

?>