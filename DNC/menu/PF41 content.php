
        	<?php
        	   include '../lib/php/connectAD.php';
        	   
        	   echo "<menu id='menu'>
                        <menu class='top'>LISTE DES PERSONNELS</menu>
                        <menu class='content'>
                        <div class='left'>";
// Affiche Caserne
                $sql = "select CIS_ID, CIS_NOM from CASERNE";
                echo "CIS: ";
                afficheListe_SQL($sql, "CIS_ID","CIS_NOM");
                echo    "</div>
                         <div class='right border-left'>
                                <input type='button' value='Ajouter'>
                                <input type='button' value='Quitter'>
                         </div>
                         </menu>
                      </menu>";
        	
                /*
                $sql = "SELECT SP_NOM, SP_PRENOM FROM POMPIER WHERE CIS_ID = '$CIS_ID'";
                afficheRequete_debug($sql);*/
            ?>
            
