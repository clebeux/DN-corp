<?php 

    include "connectAD.php";
    
    
    $SP_MATRICULE = "10";
    $FOR_ID = 'CYN 2';
    
    
    
    // Inscription
    $sql = "INSERT INTO INSCRIRE(SP_MATRICULE, FOR_ID) VALUES ('$SP_MATRICULE','$FOR_ID')";
    executeSQL($sql);
    
    
    //Desinscrition
    $sql = "DELETE FROM INSCRIRE WHERE SP_MATRICULE = '$SP_MATRICULE' AND FOR_ID = '$FOR_ID'";
    executeSQL($sql);
?>