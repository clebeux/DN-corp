<?php 
    include "connectAD.php";

    $nom_fichier = 'nom.txt';
    $prenom_fichier = 'fille.txt';
    $date_fichier = 'date.txt';
    $table_nom = file($nom_fichier);
    $table_prenom = file($prenom_fichier);
    $table_date = file($date_fichier);
    
    echo "fonction remplir pompier <br>";

    for($i=0;$i<100;$i++) { // Parcoure chaque ligne de fichier
    	echo "boucle for  <br>";
    	$date_maj= $table_date[$i];
    	$tel_fix = '0'.rand(298000000,298999999);
    	$tel_portable = '0'.rand(600000000,799999999);
    	$ID_Caserne = $i/5+1;
    	$bip = rand(100,999);
    	$sql="INSERT INTO POMPIER VALUES($i,'SAP1',$ID_Caserne ,'$table_nom[$i]','$table_prenom[$i]','$table_date[$i]', $tel_fix, $tel_portable, $bip, 'V',$date_maj, $date_maj,$date_maj)";
    	echo $sql;
    	executeSQL($sql);
    	
    	// Table login
    	$sql="INSERT INTO LOGIN VALUES('$table_nom[$i]',$i, 'Password','$table_nom[$i]', '$table_prenom[$i]','SP')";
    	echo $sql;
    	executeSQL($sql);
    	
    }
    
    
    
    
    
    
    
    
    
	//$requette="INSERT INTO POMPIER(SP_MATRICULE,GRA_ID,CIS_ID,SP_NOM,SP_PRENOM,SP_DTE_NAISSANCE,SP_TEL_FIXE,SP_TEL_PORTABLE,SP_BIP,SP_STATUT,SP_DTE_MAJ,DATE_PROMOTION,DATE_AFFECTATION VALUES('1','2','Nom','Prenom','2018-01-01','0','0','M','2018-01-01','2018-01-01','2018-01-01')";
    
?>