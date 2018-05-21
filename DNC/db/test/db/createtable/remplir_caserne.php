<?php 
    include "connectAD.php";

    $nom_fichier = 'ville.txt';
    $table_fichier = file($nom_fichier);
    

    for($i=0;$i<sizeof($table_fichier);$i++) { // Parcoure chaque ligne de fichier
    	$sql="INSERT INTO CASERNE  VALUES($i,'$table_fichier[$i]')";
    	executeSQL($sql);
    	
    }
    
    
    
    
    
    
    
    
    
	//$requette="INSERT INTO POMPIER(SP_MATRICULE,GRA_ID,CIS_ID,SP_NOM,SP_PRENOM,SP_DTE_NAISSANCE,SP_TEL_FIXE,SP_TEL_PORTABLE,SP_BIP,SP_STATUT,SP_DTE_MAJ,DATE_PROMOTION,DATE_AFFECTATION VALUES('1','2','Nom','Prenom','2018-01-01','0','0','M','2018-01-01','2018-01-01','2018-01-01')";
    
?>