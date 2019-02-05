<?php 

	
	$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";

    
    
    require ($EntraideMVC_DIR. '/Models/user.class.php');
	require ($EntraideMVC_DIR. '/Models/userManager.class.php');
	require($EntraideMVC_DIR. '/Models/Connexion.php');


	if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
    	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {
 			$userManager->connectWebsite();
 		}
	}

	require($EntraideMVC_DIR. '/Views/Menu.php');
	require($EntraideMVC_DIR. "/Views/Connexion.php"); 

 ?>
 