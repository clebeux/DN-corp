<?php

include "lib/php/connectAD.php";

//recuperation des variables
$login = $_GET['login']."\r\n";
$mdp = $_GET['pswd'];
$rows_matricule = "0";

//requete SQL
$sql = "SELECT LOG_LOGIN, LOG_MDP, LOG_PROFIL, SP_MATRICULE FROM LOGIN WHERE LOG_LOGIN = '$login' AND LOG_MDP = '$mdp';";
//executeSQL($requete);
$results = tableSQL($sql);
// Si le nombre de ligne est > 0

    //pour chaque ligne du tableau $resultats
    foreach ($results as $ligne) {
        //on extrait chaque valeur de la ligne courante
        $rows_matricule= $ligne['SP_MATRICULE'];
        $rows_login= $ligne['LOG_LOGIN'];
        $rows_mdp= $ligne['LOG_MDP'];
        $rows_fctn = $ligne['LOG_PROFIL'];
        //verification du login et mdp de l'utilisateur sur la db
        if (($login == $rows_login) && ($mdp == $rows_mdp)){
            session_start();
            $_SESSION['matricule'] = $rows_matricule;
                //Redirection avec login vrai
                switch ($rows_fctn) {
                    case "SP":
                        echo "<META http-equiv='refresh' content='0;URL=01_sp/01_sp.php'>";
                        break;
                    case "CTA":
                        echo "<META http-equiv='refresh' content='0;URL=02_cta/02_cta.php'>";
                        break;
                    case "SF":
                        echo "<META http-equiv='refresh' content='0;URL=03_sf/03_sf.php'>";
                        break;
                }
        }
    }
    echo "<h1>Login incorrect ..</h1><br />";
    echo "Redirection vers la page d'Acceuil";
    echo "<META http-equiv='refresh' content='1;URL=index.php'>";
// Redirection avec login faux




deconnexion()
//mode procedural
//mysqli_close($connexion);

?>