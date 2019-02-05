<?php
session_start();
if (!isset($_SESSION['login'])) {
   header ('Location: /EntraideMVC/Controllers/Connexion.php');
   exit(); 
} 

	$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";



    require($EntraideMVC_DIR. '/Models/chat.class.php'); //inutile pour l'insatnt
    require($EntraideMVC_DIR. '/Models/chatManager.class.php'); //inutile pour l'insatnt
    require($EntraideMVC_DIR. '/Models/Chat.php'); //inutile pour l'insatnt
	require($EntraideMVC_DIR. '/Views/Menu.php');
    require($EntraideMVC_DIR. '/Views/Chat.php');

?>

<script src="http://127.0.0.1/EntraideMVC/jquery/jquery.js"></script>
<script src="http://127.0.0.1/EntraideMVC/module/chat/chat.js"></script>






