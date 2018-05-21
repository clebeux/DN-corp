<?php
    session_start();
    header('Content-type: text/html; charset=iso-8859-1');
    include "../lib/php/connectAD.php";
    $matricule = $_SESSION['sp_matricule'];
    
    $sql = "SELECT * FROM POMPIER WHERE SP_MATRICULE = $matricule";
    $results = tableSQL($sql);
    foreach ($results as $row) {
        $nom = $row['SP_NOM'];
        $prenom = $row['SP_PRENOM'];
        $date_naissance = $row['SP_DTE_NAISSANCE'];
        $tel_fixe = $row['SP_TEL_FIXE'];
        $tel_portable = $row['SP_TEL_PORTABLE'];
        $statut = $row['SP_STATUT'];
        $date_promo = $row['DATE_PROMOTION'];
        $grad_id = $row['GRA_ID'];
        $recepteur_alerte = $row['SP_TEL_PORTABLE'];
        
    }


    echo   '<menu id = "menu">
        	<menu class = "top">Personnels</menu>
        	<menu class = "content">';
    echo "
            	<label>Matricule:</label>
            	<input value=$matricule>
            	<span>Nom:</span>
            	<input value=$nom>
            	<span>Prénom:</span>
            	<input value=$prenom>
            	<span>Date de naissance:</span>
            	<input value=$date_naissance>
            	<span>Statut:</span>
            	<input value=$statut>
            	<span>Grade:</span>
            	<input value=$grad_id>
                <span>Date d'obtention:</span>
                <input value=$date_promo>
            	<span>Récepteur d'alerte:</span>
                <input value=$recepteur_alerte>
            	<span>Téléphone fixe:</span>
            	<input value=$tel_fixe>
            	<span>Téléphone portable:</span>
            	<input value=$tel_portable>
        	</menu>
        	
        </menu>";
?>