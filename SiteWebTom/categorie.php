<?php include("Acceuil.php");

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
        $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } 
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }    

    $rep =  $bdd->prepare('SELECT corpsTexte, login FROM articles WHERE categorie = ?');
    $rep->execute(array($_GET['cat']));

    while ($donnees= $rep->fetch())
    {
        $login = $donnees['login'];
        echo '<p>'. "<a href='profile.php?login=$login'> $login " . ' -- '. htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';
    }
    $rep->closeCursor();   

    ?>


</body>

</html>