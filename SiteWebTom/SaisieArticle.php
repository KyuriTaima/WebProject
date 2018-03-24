<?php
include("Acceuil.php");
if (!isset($_SESSION['login'])) {
    header ('Location: index.php');
    exit(); 
} 

if (isset($_POST['envoie']) && $_POST['envoie'] == 'envoie') {
    // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
    if ((isset($_POST['categorie']) && !empty($_POST['categorie'])) && (isset($_POST['article']) && !empty($_POST['article']))) {
       

       try
       {
        $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $req = $bdd->prepare('INSERT INTO articles(login, categorie, corpsTexte) VALUES(?,?,?)');
    $req->execute(array($_SESSION['login'], $_POST['categorie'], $_POST['article']));
     //on envoi le requette demandant d'insérer dans la table 'articles' les différenetes informations voulues
    
    
} 
}
?>

<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="row">
		<span class="col-md-4"></span>
		<h1 class="col-md-4">Saisie d'un nouvel article</h1>
		<span class="col-md-4"></span>
	</div>

    <!--Ci dessous les forms permettant au PHP de récuperer les informations misent par l'utilisateur-->
    <div class="row">
    <form action="SaisieArticle.php" method="post">

    	<span class="col-md-2"></span>
    	<span class="col-md-4">
	        <input type="radio" name="categorie" value="P3" >Physique 3eme<br />
	        <input type="radio" name="categorie" value="P4" >Physique 4eme<br />
	        <input type="radio" name="categorie" value="M3" >Maths 3eme<br />
	        <input type="radio" name="categorie" value="M4" ">Maths 4eme<br />
    	</span>

    	<span class="col-md-6">
        Tapez votre question ici:<br /><textarea name="article" rows=30    cols=50></textarea>><br />
        <input type="submit" name="envoie" value="envoie">
    </span>
    </form>
</div>

</body>

</html>
