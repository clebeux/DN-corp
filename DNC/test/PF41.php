<html>
    <head>
    </head>
    
    <body>
        <form action="PF41.php" method="get">
        	<?php 
        	   $CIS_ID = $_GET['afficheListe_SQL'];
        	
        	
                include "connectAD.php";
                // Affiche Caserne
                $sql= "select CIS_ID, CIS_NOM from CASERNE";
                echo "CIS: ";
                afficheListe_SQL($sql, "CIS_ID","CIS_NOM");
                
                
                $sql = "SELECT SP_NOM, SP_PRENOM FROM POMPIER WHERE CIS_ID = '$CIS_ID'";
                afficheRequete_debug($sql);
            ?>
        	<input type="submit">
        </form>
        
    
    </body>

</html>
        
