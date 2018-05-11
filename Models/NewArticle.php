<?php
	$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');
	$userManager = new userManager($bd);
	$articleManager= new articleManager($bd);

	$user = new user;
	$userManager->connect($user);
	

function addArticle($articleManager,$user){
if (isset($_POST['envoie']) && $_POST['envoie'] == 'envoie') {
    // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
    if (isset($_POST['categorie']) && !empty($_POST['categorie']) && isset($_POST['article']) && !empty($_POST['article']) && isset($_POST['nameArticle']) && !empty($_POST['nameArticle'])) {

       $categorie = $_POST['categorie'];
       $article= $_POST['article'];
       $nomArticle=$_POST['nameArticle'];
       $idUser= $user->getIdUser();

      $articleManager-> addArticle($categorie, $article, $nomArticle, $idUser);

       
   
    

}

    
} 
}














?>