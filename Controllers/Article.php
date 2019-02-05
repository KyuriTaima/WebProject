<?php
session_start();
if (!isset($_SESSION['login'])) {
   header ('Location: /EntraideMVC/Controllers/Connexion.php');
   exit(); 
} 

	$EntraideMVC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/EntraideMVC";

    
    require ($EntraideMVC_DIR. '/Models/userManager.class.php');
    require ($EntraideMVC_DIR. '/Models/user.class.php');
	require ($EntraideMVC_DIR. '/Models/article.class.php');
	require ($EntraideMVC_DIR. '/Models/articleManager.class.php');
	


	require($EntraideMVC_DIR. '/Models/Article.php');
	require($EntraideMVC_DIR. '/Views/Menu.php');


	if (!isset($_GET['article'])){
    $articles=afficheAllArticle($articleManager);

    }else{
    	$categorie = $_GET['article'];
        if ($categorie == "own"){
            $propreArticle = true;
            $articles=affichePropreArticle($articleManager,$user);
        }else{
    	$articles=afficheCategorieArticle($articleManager,$categorie);
            }
    	
    }
    if (sizeof($articles)==0){
    		echo("Wow such empty");
    	}

    deleteArticle($articleManager);
	require($EntraideMVC_DIR. "/Views/Article.php"); 





?>