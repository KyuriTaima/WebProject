<?php /* ouvre le menu et la session Si l'utilisateur n'est pas connecté il est redirigé vers la page de connection */
    include("Acceuil.php");
    if (!isset($_SESSION['login'])) {
       header ('Location: index.php');
       exit(); 
    } 

    try
   {
    $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } 
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }

    $req = $bdd->prepare('SELECT email,catSoPro, DateCreation FROM membre WHERE login=? ');
      $req->execute(array($_GET['login']));
      while ($donnees = $req->fetch())
{
   
    echo '<p>'. htmlspecialchars($_GET['login']) . ' -- '. htmlspecialchars($donnees['email']) . ' -- '. htmlspecialchars($donnees['catSoPro']) .  ' -- '. htmlspecialchars($donnees['DateCreation']) .  '<br />' . '</p>';
}











    ?>