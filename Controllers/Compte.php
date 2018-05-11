<?php
session_start();
if (!isset($_SESSION['login'])) {
   header ('Location: /EntraideMVC/Controllers/Connexion.php');
   exit(); 
} 

$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";

    
    require ($EntraideMVC_DIR. '/Models/userManager.class.php');
    require ($EntraideMVC_DIR. '/Models/user.class.php');
    require($EntraideMVC_DIR. '/Models/Compte.php');
	
	changePass($userManager,$user );
		
	changeEmail($userManager,$user);
		
	changeSocialBackground($userManager,$user);
		


	
	require($EntraideMVC_DIR. '/Views/Menu.php');
	require($EntraideMVC_DIR. '/Views/Compte.php');



	?>