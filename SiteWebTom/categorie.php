<?php include("Acceuil.php");

if (!isset($_SESSION['login'])) {
   header ('Location: index.php');
   exit(); 
} 
?>
<html>

<head>
    <title>My document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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

    $rep =  $bdd->prepare('SELECT corpsTexte, login FROM articles WHERE categorie = ?');
    $rep->execute(array($_GET['cat']));

    ?> 
    <div class="container">
    <?php 


    while ($donnees= $rep->fetch())
    {
    ?>

    <article class="col-md-12 col-xs-12 col-sm-12">

        <div class="panel panel-info"> 
            <div id="banniere_titre">
            <h4> Titre de l'article </h4>
            </div>  

      <?php 
        $corps = htmlspecialchars($donnees['corpsTexte']);
        $login = $donnees['login'];
        $id = $donnees['id'];
      ?> 

      <div id="banniere_texte">
        <?php echo $corps; ?>
      </div>

      
        </div>
    <p class="text-right"> <strong> <?php  echo "<a href='profile.php?login=$login'>" ?> Voir le profil de <?php echo $login ?>   </a> </strong> </p>    
    </article>

  <?php 


        //$login = $donnees['login'];
        //echo '<p>'. "<a href='profile.php?login=$login'> $login " . ' -- '. htmlspecialchars($donnees['corpsTexte']) . '<br />' . '</p>';
    }
    $rep->closeCursor();   

    ?>


</body>

</html>