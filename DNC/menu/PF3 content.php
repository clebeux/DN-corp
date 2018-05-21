<menu id="menu">
		<menu class="top">FORMATION ANNUELLE</menu>
		<menu class="titre">
				<?php
				include '../lib/php/connectAD.php';
				$matricule = $_SESSION['sp_matricule'];
				$sql = "SELECT SP_NOM, SP_PRENOM FROM POMPIER WHERE SP_MATRICULE = $matricule";
				afficheRequete($sql);
				?>
		</menu>
		<menu class="content">
		
					<?php
					
					$sql = 'SELECT FORMATION.FOR_ID, FOR_LIBELLE, FOR_DTE_DEBUT, FOR_DTE_FIN, FOR_SALLE, FOR_ADRESSE, FOR_CP, FOR_VILLE  FROM FORMATION, INSCRIRE
					WHERE FORMATION.FOR_ID=INSCRIRE.FOR_ID AND SP_MATRICULE="'.$matricule.'"';	
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
							echo "<fieldset>

                                        <div class = 'gauche'>$libelle</div>";
						   echo "       <div class = 'droite'>
                                            du $dtedebut au $dtefin
                                            $salle<br/>
                                            $adresse<br/>
                                            $cp $ville<br/>
                                            
						                </div>";
					       echo "</fieldset>";
						}
					
					
					?>
		</menu>
</menu>