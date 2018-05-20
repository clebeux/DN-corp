<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<?php 	
			include "test_head.php";	
	?>
	<link href="../css/2pf3.css" rel="stylesheet" type="text/css" />
</head>

	<body>
	<div id="container">
	<?php include 'head.php'; ?>
	<?php include 'footer.php'; ?>
    	<div id="content">
    	<div class="forma">
			<fieldset>
				<strong>
					<?php
		
					
					$sql = "SELECT FORMATION.FOR_ID, FOR_LIBELLE, FOR_DTE_DEBUT, FOR_DTE_FIN, FOR_SALLE, FOR_ADRESSE, FOR_CP, FOR_VILLE  FROM FORMATION, INSCRIRE
					WHERE FORMATION.FOR_ID=INSCRIRE.FOR_ID AND SP_MATRICULE=".$matricule;
					
					$results = tableSQL($sql);
						foreach($results as $ligne) {
							$id= $ligne[0];
							$libelle = $ligne[1];
							$dtedebut = $ligne[2];
							$dtefin = $ligne[3];
							$salle = $ligne[4];
							$adresse = $ligne[5];
							$cp = $ligne[6];
							$ville = $ligne[7];

					}
					
					echo ($id." ".$libelle." du ".$dtedebut." au ".$dtefin."<br/>");
					echo ("Salle  ".$salle." ".$adresse."<br/>".$cp." ".$ville);
					
					
					?>
				</strong>
			</fieldset><br/><br/><br/>
		</div>
    	</div>
	</div>
	
	

</body>
</html>