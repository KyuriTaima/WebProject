<?php /*Detruit la sessuin en cours puis redirige vers la page de connection*/ 

    session_start(); 
    session_unset(); 
    session_destroy();
    ob_start(); 
    header('Location: index.php'); 
    ob_end_flush();
    exit(); 
    ?>