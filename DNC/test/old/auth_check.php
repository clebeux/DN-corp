<?php

$ip=explode(".",$_SERVER['SERVER_ADDR']);

switch ($ip[0]) {
	
	case 127 :
		//local
		$host = "51.15.201.67";
		$user = "sdis";
		$password = "Iroise29";
		$dbname = "test";
		$port="22";
		$encryption_key="";
		break;
		
		
	default :
		exit ("Serveur non reconnu...");
		break;
}

$port='3306';

//mode objet
$connexion = new mysqli("$host", "$user", "$password", "$dbname", $port);

//mode procedural
//$connexion = mysqli_connect("$host", "$user", "$password", "$dbname", $port);

if ($connexion->connect_error) {
	die('Erreur de connexion (' . $connexion->connect_errno . ') '. $connexion->connect_error);
} else {
	echo "Connexion reussie<br />";
	echo "Base $dbname selectionnee... <br />";
}

//mode objet
$connexion->close();

//mode procedural
//mysqli_close($connexion);

?>