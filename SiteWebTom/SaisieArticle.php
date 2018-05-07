<?php

ob_start();
include("Accueil.php");
if (!isset($_SESSION['login'])) {
    header ('Location: index.php');
    exit(); 
} 

if (isset($_POST['envoie']) && $_POST['envoie'] == 'envoie') {
    // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
    if ((isset($_POST['categorie']) && !empty($_POST['categorie'])) && (isset($_POST['article']) && !empty($_POST['article']))) {
       

       try
       {
        $bdd = new PDO('mysql:host=localhost;dbname=id5300649_root;charset=utf8', 'id5300649_root', 'tomrollet',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
ob_end_flush();
?>

<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <!--Ci dessous les forms permettant au PHP de récuperer les informations misent par l'utilisateur-->
    <form action="SaisieArticle.php" method="post">



        <input type="radio" name="categorie" value="P3">Physique 3eme
        <input type="radio" name="categorie" value="P4">Physique 4eme
        <input type="radio" name="categorie" value="M3">Maths 3eme
        <input type="radio" name="categorie" value="M4">Maths 4eme


        Tapez votre question ici:<textarea name="article" rows=30    cols=50></textarea>><br />
        <input type="submit" name="envoie" value="envoie">
    </form>

</body>

</html>
