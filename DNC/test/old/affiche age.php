<?php 
	include 'connectAD.php';
	$matricule = "10";
	$sql = "SELECT SP_DTE_NAISSANCE 
			FROM POMPIER
			WHERE SP_MATRICULE = $matricule";
	$today = date("Y-m-d");
	$date = champSQL($sql);
	$age = $today - $date;
	echo $age;

?>