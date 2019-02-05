
<?php

	$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";

	require ($EntraideMVC_DIR. '/Models/user.class.php');
	require ($EntraideMVC_DIR. '/Models/userManager.class.php');

    require($EntraideMVC_DIR. '/Views/Menu.php');

    require($EntraideMVC_DIR. '/Models/Inscription.php');
   

    if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
       // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
       if  (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass_confirm']) &&      !empty($_POST['pass_confirm']) && isset($_POST['niveau']) && !empty($_POST['niveau']) && isset($_POST['email']) && !empty($_POST['email']) ) {
		
       		$userManager->add();

		}	

	}
	 require($EntraideMVC_DIR. "/Views/Inscription.php"); 
	?>