
<?php

session_start();
$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";
require ($EntraideMVC_DIR. '/Models/userManager.class.php');
    require ($EntraideMVC_DIR. '/Models/user.class.php');
	require ($EntraideMVC_DIR. '/Models/article.class.php');
	require ($EntraideMVC_DIR. '/Models/articleManager.class.php');
	


	require($EntraideMVC_DIR. '/Models/NewArticle.php');


	addArticle($articleManager,$user);
	require($EntraideMVC_DIR. '/Views/Menu.php');
	require($EntraideMVC_DIR. '/Views/NewArticle.php');





	?>