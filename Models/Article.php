<?php
	$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');
	$userManager = new userManager($bd);
	$articleManager= new articleManager($bd);

	$user = new user;
	$userManager->connect($user);
	
    function afficheAllArticle($articleManager){
    	
 	 	$articles=$articleManager->getAllArticle();
 		return $articles;
 	 }	

	function afficheCategorieArticle($articleManager, $categorie){
		$articles=$articleManager->getCartegorieArticle($categorie);
 		return $articles;

	}

	function affichePropreArticle($articleManager,$user){
		$id = $user->getIdUser();
		$articles=$articleManager->getPropreArticle($id);
		
		return $articles;



	}

	function deleteArticle($articleManager){
		 if ( isset($_POST['Supprimer']) && $_POST['Supprimer'] == 'Supprimer'){
		 $idArticle = $_POST['idArticle'];
		$articleManager->delete($idArticle);
		if (isset($_GET['article'])){
		header('Location: '.$_SERVER['PHP_SELF'].'?article=own');
		die;
	}else{
		header('Location: '.$_SERVER['PHP_SELF']);
		die;

	}
	}
	}
  ?>