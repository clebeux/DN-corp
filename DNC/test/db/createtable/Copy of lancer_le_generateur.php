<?php 
	//include "generateurtexte.php";
    include "connectAD.php";

    $nomfichier = 'nom.txt';
    $tablonomfamille = file($nomfichier);
    //les prenoms garcon sont dans le fichier garcon.txt
    $nomfichier = 'garcon.txt';
    $tabloprenomgarcon = file($nomfichier);
    //les prenoms garcon sont dans le fichier garcon.txt
    $nomfichier = 'fille.txt';
    $tabloprenomfille = file($nomfichier);

    $datefichier = 'date.txt';
    $tablodate = file($datefichier);
   
    $gradefichier = 'grade.txt';
    $tablograde = file($gradefichier);
    
    $fonctionfichier = 'FonctionsSP.txt';
    $tablofonction = file($fonctionfichier);
    
    $casernefichier = 'caserne.txt';
    $tablocaserne= file($casernefichier);
    
    $fichier = 'FonctionsSP.txt';
    $tablosp = file($villefichier);
    
    $formationfichier = 'formationSP.txt';
    $tabloformation = file($formationfichier);
    
    
    $table_pompier="";
    
    $table_inscrire="insert into INSCRIRE(SP_MATRICULE,FOR_ID) values()";
    $table_valide="";
    $table_exercer="";
    
    for($i=0;$i<sizeof($tabloformation);$i++) {
    	$fonction = "";
    	$date_for_debut = "";
    	$date_for_fin = "";
    	$aleatoir = rand(0,3);
    	$mot = $tabloformation[$i];
    	$explode = explode ( ';' , $mot);
    	$premier_lettre =  $mot[0];
    	if ($premier_lettre =='*'){
    		$fonction = $explode(substr ($mot,1));
    		echo $fonction;
    	} else {
    		echo "else";
    		/*
    		 
    		$table_formation="insert into FORMATION($explode[0],$fonction[0],$explode[1],$date_for_debut,$date_for_fin);";
    		executeSQL($table_formation);*/
    	}
    	
    	
    }
    /*
    executeSQL($table_pompier);
    executeSQL($table_formation);
    executeSQL($table_inscrire);
    executeSQL($table_valide);
    executeSQL($table_exercer);
    */
    
    /* GRADE
    for($i=0;$i<sizeof($tablograde);$i++) {
        $sql="INSERT INTO GRADE(GRA_ID,GRA_LIBELLE) VALUES ($i,'$tablograde[$i]')";
        executeSQL($sql);
        
    }*/
    // tant que $i est inferieur au nombre d'éléments du tableau...
    
    /* Caserne
    for($i=0;$i<sizeof($tabloville);$i++) {
        $sql="INSERT INTO CASERNE( VALUES($i,'$tabloville[$i]')";
        executeSQL($sql);
        
    }
    */
 /* Fonction
    for($i=0;$i<sizeof($tablofonction);$i++) {
        $sql="INSERT INTO FONCTION(FCT_ID,FCT_LIBELLE) VALUES ('$i','$tablofonction[$i]')";
     executeSQL($sql);
     
     }*/
    
    /*
    for($i=0;$i<sizeof($tabloprenomfille);$i++) {
        $sql="INSERT INTO POMPIER(SP_MATRICULE,SP_PRENOM,SP_NOM,SP_DTE_NAISSANCE,DATE_AFFECTATION) VALUES ($i,'".$tabloprenomfille[$i]."','".$tablonomfamille[$i]."')";
        executeSQL($sql);
        
    }
    */
    
	//$requette="INSERT INTO POMPIER(SP_MATRICULE,GRA_ID,CIS_ID,SP_NOM,SP_PRENOM,SP_DTE_NAISSANCE,SP_TEL_FIXE,SP_TEL_PORTABLE,SP_BIP,SP_STATUT,SP_DTE_MAJ,DATE_PROMOTION,DATE_AFFECTATION VALUES('1','2','Nom','Prenom','2018-01-01','0','0','M','2018-01-01','2018-01-01','2018-01-01')";
    
?>