

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="../lib/css/style.css" rel="stylesheet" type="text/css" />
        <title>html</title>
    </head>

    <body>
        <div id="container">
        	<div id="content">
                <menu id = "menu">
                <menu class="top">top</menu>
                <menu class="titre">titre</menu>
                    <menu class = "content">
                    	<?php 
                    	   echo '<div class = "gauche">gauche</div>
                    	         <div class = "droite">droite</div>';
                    	?>
                    	
                    </menu>
                </menu>
            </div>
         </div>
    </body>
</html>
