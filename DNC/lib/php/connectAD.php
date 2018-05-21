<?php
	include "AccesDonnees.php";
	
$ip=explode(".",$_SERVER['SERVER_ADDR']);
		//echo $ip[0];
	
	
	switch ($ip[0]) {
	
		case 127 :
			//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "sdis";
			$port="3306";
			break;
			
		case 10 :
			//hostinger
			$host = "127.0.0.1";
			$user = "sdis";
			$password = "scaleway29";
			$dbname = "sdis";
			$port="3306";
			break;
			
		case 212 :
			//free
			$host="localhost";
			$user = "************";
			$password = "*********";
			$dbname = "*********";
			$port="3306";
			break;
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}
	
	//echo "$host - $port - $dbname - $user - $password <br />";
	
	$connexion = connexion($host,$port,$dbname,$user,$password);
	
	//if ($connexion) {
		//echo "Connexion reussie $host:$port<br />";
		//echo "Base $dbname selectionnee... <br />";
		//echo "Mode acces : $modeacces<br />";
	//}
	
	//deconnexion();
?>

