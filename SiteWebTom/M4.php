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

    $rep =  $bdd->query('SELECT corpsTexte, login FROM articles WHERE categorie="M4"');

    while ($donnees= $rep->fetch())
    {
        echo '<p>'. htmlspecialchars($donnees['login'] ). ' -- '. htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';
    }
    $rep->closeCursor();   

    ?>


</body>

</html>