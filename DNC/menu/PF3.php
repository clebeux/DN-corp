<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>SDIS 29</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="../css/pf3.css" rel="stylesheet" type="text/css" />
</head>

	<body>
	<div id="container">
	<?php include 'head.php'; ?>
		<div id="content">
    		<div class="formaannu">
    			<h2>FORMATION ANNUELLE</h2>
    			<img alt="" src="../images/casque.png"/>
    		</div>
		</div>
		<div class="nom"> 
			<h3>
				<?php
				include 'connectAD.php';
				$matricule = "10";
				$sql = "SELECT SP_NOM, SP_PRENOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
				afficheRequete($sql);
				?>
				</h3><br/>
		</div>
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
			</fieldset>
			<!-- 
			
			J'ai mis àa en commentaire
			<br/><br/><br/>
			 -->
		</div>
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>