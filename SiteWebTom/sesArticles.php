<?php 
include("Acceuil.php"); 
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
        $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


    $req= $bdd->prepare('SELECT corpsTexte FROM articles WHERE login= ?  ');
    $req ->execute(array($_SESSION['login']));

    while ($donnees = $req->fetch())
    {
        echo '<p>'. htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';
    }
    $req->closeCursor();
    ?>

</body></html>