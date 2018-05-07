<?php 

ob_start();
include("Accueil.php"); 
if (!isset($_SESSION['login'])) {
    header ('Location: index.php');
    exit(); 
}
?>

<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=id5300649_root;charset=utf8', 'id5300649_root', 'tomrollet',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    $req= $bdd->prepare('SELECT corpsTexte, login, id FROM articles WHERE login= ?  ');
    $req ->execute(array($_SESSION['login']));

    while ($donnees = $req->fetch())
    {
        
        $login = $donnees['login'];
        echo '<p>'. "<a href='profile.php?login=$login'>". "id= ". $donnees['id'].  "       ".  htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';
    }
    $req->closeCursor();
    ob_end_flush();
    ?>

</body></html>
