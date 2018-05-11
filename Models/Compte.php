<?php

$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');
	$userManager = new userManager($bd);

	$user = new user;
	$userManager->connect($user);


	function changePass($userManager,$user ){
		if (isset($_POST['changement']) && $_POST['changement'] == 'Go') {
			if(isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']) && ($_POST['pass_confirm'] == $_POST['pass']) ) {
            $hashed_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $userManager->updtatePass($user, $hashed_password );

		}
	}
}
	function changeEmail($userManager,$user){
		if (isset($_POST['changement']) && $_POST['changement'] == 'Go') {
			if(isset($_POST['email']) && !empty($_POST['email']) ) {
            $email = $_POST['email'];
            $userManager->updtateEmail($user, $email);
        }
		}
	}    
	function changeSocialBackground($userManager,$user){
		if (isset($_POST['changement']) && $_POST['changement'] == 'Go') {
			if(isset($_POST['niveau']) && !empty($_POST['niveau']) ) {
				$niveau = $_POST['niveau'];
				$userManager->updtateSocialBackground($user, $niveau);
        }
		}
	}






	?>