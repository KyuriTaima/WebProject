<?php
session_start();
if (!isset($_SESSION['login'])) {
   header ('Location: /EntraideMVC/Controllers/Connexion.php');
   exit(); 
} 

	$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";

    
    require ($EntraideMVC_DIR. '/Models/userManager.class.php');
    require ($EntraideMVC_DIR. '/Models/user.class.php');
	require($EntraideMVC_DIR. '/Models/Profile.php');
	require($EntraideMVC_DIR. '/Views/Menu.php');


	$info =showProfile($userProfile);


	require($EntraideMVC_DIR. "/Views/Profile.php"); 





?>