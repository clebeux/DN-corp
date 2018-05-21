<?php
    session_start();
    echo "Session path: <br/>".session_save_path()."<br /><br /><br />";
    $_SESSION['sp_matricule'] = 5;
    echo $_SESSION['sp_matricule'];
?>