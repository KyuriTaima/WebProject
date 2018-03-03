<?php /*Detruit la sessuin en cours puis redirige vers la page de connection*/ 
    session_start(); 
    session_unset(); 
    session_destroy(); 
    header('Location: index.php'); 
    exit(); 
    ?>