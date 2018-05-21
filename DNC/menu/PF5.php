<html>
    <head>
    	<?php 	
    			include "../lib/php/head.php";
    	?>
    	<link href="../lib/css/PF1.css" rel="stylesheet" type="text/css" />
    	
    </head>


    <body>
        <div id="container">
        	<?php 
        		
        		include "../lib/php/top.php";
        		$profil = $_SESSION['log_profil'];
        		switch ($profil) {
        		    case "SP":
        		        include '../01_sp/01_sp_nav.php';
        		        break;
        		    case "CTA":
        		        include '../02_cta/02_cta_nav.php';
        		        break;
        		    case "SF":
        		        include '../03_sf/03_sf_nav.php';
        		        break;
        		}
        	?>

        	<div id="content">
        		<?php 
        		include "PF5 content.php";
        		?>
        	</div>

        
        	<?php 
        		
        		include "../lib/php/footer.php";
        	?>
        </div>
    </body>

</html>