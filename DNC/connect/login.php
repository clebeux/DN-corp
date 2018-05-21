<?php

include "../lib/php/connectAD.php";

// Session
session_start();

//PAGE
$acceuil    = "<META http-equiv='refresh' content='1;URL=../index.php'>";
$sp         = "<META http-equiv='refresh' content='0;URL=../01_sp/01_sp.php'>";
$cta        = "<META http-equiv='refresh' content='0;URL=../02_cta/02_cta.php'>";
$sf         = "<META http-equiv='refresh' content='0;URL=../03_sf/03_sf.php'>";


//GET
$login = $_GET['login']."\r\n";
$mdp = $_GET['pswd'];


//SQL
$sql = "SELECT LOG_LOGIN, LOG_MDP, LOG_PROFIL, SP_MATRICULE FROM LOGIN WHERE LOG_LOGIN = '$login' AND LOG_MDP = '$mdp';";
//executeSQL($requete);
$results = tableSQL($sql);

    foreach ($results as $ligne) {
        //Extraction valeur ligne courante
        $rows_matricule =   $ligne['SP_MATRICULE'];
        $rows_gra_id    =   $ligne['GRA_ID'];
        $rows_login     =   $ligne['LOG_LOGIN'];
        $rows_mdp       =   $ligne['LOG_MDP'];
        $rows_profil    =   $ligne['LOG_PROFIL'];
        //verification du login et mdp de l'utilisateur sur la db
        if ((strtoupper ($login)) == (strtoupper ($rows_login)) && ($mdp == $rows_mdp)){
            
            $_SESSION['sp_matricule'] = $rows_matricule;
            $_SESSION['gra_id'] = $rows_gra_id;
            $_SESSION['log_profil'] = $rows_profil;
                //Redirection avec login vrai
                switch ($rows_profil) {
                    case "SP":
                        echo $sp;
                        break;
                    case "CTA":
                        echo $cta;
                        break;
                    case "SF":
                        echo $sf;
                        break;
                }
        }
    }

    // Login Faux-> Redirection
    echo "<h1>Login incorrect ..</h1><br />";
    echo "Redirection vers la page d'Acceuil";
    echo $acceuil;

deconnexion()
//mode procedural
//mysqli_close($connexion);

?>