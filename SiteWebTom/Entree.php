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

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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

?> 
 <div class="container">
<?php 
while ($donnees = $reponse->fetch())
{
  ?>

    <article class="col-md-4 col-xs-12 col-sm-6">

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
    <p class="text-right"> <strong><?php  echo "<a href='pageArticle.php?id=$id'>" ?> Lire l'article de <?php echo $login ?>   </a>  </strong> </p>    
    </article>

  <?php 
}
$reponse->closeCursor();

?> 
</div>
   
</body>
</html>