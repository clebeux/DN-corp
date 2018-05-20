<?php

include "connectAD.php";

//recuperation des variables
$login = $_GET['login'];
$mdp = $_GET['pswd'];

//reinitialise le compteur
$cpt = 0;

//requete SQL
$sql = "SELECT * FROM caserne";
//executeSQL($requete);
$results = tableSQL($sql);

//pour chaque ligne du tableau $resultats
foreach ($results as $ligne) {
	//on extrait chaque valeur de la ligne courante
	$numero = $ligne[0];
	$rows_caserne_login = $ligne[0];
	$rows_caserne_mdp = $ligne[1];
	
	//verification du login et mdp de l'utilisateur sur la db
	if ($login == $rows_caserne_id){
		if ($mdp == $rows_caserne_nom){
			echo "<META http-equiv='refresh' content='0; URL=.php'>";
			break;
		}
	}
	//on affiche la ligne courante
}
//redirection vers l'index
echo "<META http-equiv='refresh' content='0; URL=index.php'>";


deconnexion()
//mode procedural
//mysqli_close($connexion);

?>