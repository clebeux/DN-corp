<?php

include "generateurtexte.php";
include "connectAD.php";

function mot_aleatoire () {
	$garcon = fopen('garcon.txt', 'r');
	$fille= fopen('fille.txt', 'r');
    
    if ($garcon)
    {
    	/*Tant que l'on est pas à la fin du fichier*/
    	for  ( $i=0;$i<10;$i++)
    	{
    		/*On lit la ligne courante*/
    		$requette="INSERT INTO POMPIER(SP_PRENOM) VALUES('Test')";
    		executeSQL($requette);
    		echo $requette;
    		/*$buffer = fgets($garcon);
    		$requette="INSERT INTO POMPIER(SP_PRENOM) VALUES('"."test"."')";
    		executeSQL($requette);
    		echo $requette;
    		$buffer = fgets($fille);
    		$requette="INSERT INTO POMPIER(SP_PRENOM) VALUES('".$buffer."')";
    		executeSQL($requette);*/
    		//$requette = insert
    		/*INSERT */
    	}
    	/*On ferme le fichier*/
    	fclose($garcon);
    	fclose($fille);
    }
    
    
}



//generateur de texte aléatoire
function lipsum ($nb_parag) {

	$nb_mot_parag = rand(70,100);

	$texte ="";
	for ($i=0; $i<$nb_parag; $i++) {
		$texte .= "<p>\n\n";
        for ($j=1; $j < $nb_mot_parag; $j++) {
        	$texte .= mot_aleatoire()." ";
        }
    	$texte .="</p>\n\n";
    }

	return ($texte);
}





?>
