
<?php


/* on teste si le visiteur a soumis le formulaire de connexion*/
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {

 if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {


   try
   {
    $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  } 
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }


       //on teste si une entrée de la base contient ce couple login / pass
  $req = $bdd->prepare('SELECT pass_md5 FROM membre WHERE login=? ');
  $req->execute(array($_POST['login']));
  $donnees = $req->fetch();



  
    if (password_verify($_POST['pass'],$donnees['pass_md5']))
    {
    session_start();
    $_SESSION['login'] = $_POST['login'];

    header('Location: Entree.php');
    
    
  
  }else
  {
        //Suite du traitement car le nom n'est pas dans la table
    echo('Login ou mot de pass invalide');
 
  }
}
else {
  echo('Au moins un des champs est vide.');
} 

} 
?>
<html>
<head>
  <title>Accueil</title>
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <?php include("Acceuil.php"); ?>

  <!-- ci dessous les forms qui permetteront au php de récupérer les infos -->
  <form action="index.php" method="post">
   <p>
    Connexion à l'espace membre :<br />

    Login : <input type="text" name="login"> <br />
    Mot de passe : <input type="password" name="pass" > <br />

    <input type="submit" name="connexion" value="Connexion"> <br />

    <a href="inscription.php">Vous inscrire</a> <!--Lien vers la page d'inscription si l'utilisateur n'a pas de compte -->
  </p>


</form>


</body>
</html>