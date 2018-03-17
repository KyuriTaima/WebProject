<?php /* ouvre le menu et la session Si l'utilisateur n'est pas connecté il est redirigé vers la page de connection */
    include("Acceuil.php");
    if (!isset($_SESSION['login'])) {
       header ('Location: index.php');
       exit(); 
    } 
    ?>
<html>
<style></style>

<head>
    
    <title>Menu</title>

    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
    <!-- Contenu de la page d'acceuil ... -->
    <?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT corpsTexte, login , id, categorie FROM articles');
while ($donnees = $reponse->fetch())
{
   
   $corps = htmlspecialchars($donnees['corpsTexte']);
   $login = $donnees['login'];
   $id = $donnees['id'];
   echo '<p>'. "<a href='pageArticle.php?id=$id'> $login " . ' -- '. htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';
}
$reponse->closeCursor();
?>
   
</body>
</html>