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
    <title>My document</title>
    <link rel="stylesheet" href="assets/style.css" />  

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

    $rep =  $bdd->query('SELECT corpsTexte, login, id FROM articles WHERE categorie="M3"');

    while ($donnees= $rep->fetch())
    {
        $login = $donnees['login'];
        $id = $donnees['id'];
        echo '<p>'. "<a href='pageArticle.php?id=$id'> $login " . ' -- '. htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';    }
    $rep->closeCursor();   
    ob_end_flush();
    ?>


</body>

</html>