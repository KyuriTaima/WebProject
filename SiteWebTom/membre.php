<?php //Page d'acceuil des membres
     
     ob_start();
     include("Accueil.php"); 

     if (!isset($_SESSION['login'])) {
         header ('Location: index.php');
         exit(); 
     } 
     
     if (isset($_POST['changement']) && $_POST['changement'] == 'Go') {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=id5300649_root;charset=utf8', 'id5300649_root', 'tomrollet',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        if(isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']) ) {
            $hashed_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $req_update = $bdd->prepare('UPDATE membre SET pass_md5=? WHERE login =?');
            $req_update ->execute(array($hashed_password,$_SESSION['login']));

        }

        if(isset($_POST['email']) && !empty($_POST['email']) ) {
            $req_update = $bdd->prepare('UPDATE membre SET email=? WHERE login =?');
            $req_update ->execute(array($_POST['email'],$_SESSION['login']));

        }

        if(isset($_POST['niveau']) && !empty($_POST['niveau']) ) {
            $req_update = $bdd->prepare('UPDATE membre SET CatSoPro=? WHERE login =?');
            $req_update ->execute(array($_POST['niveau'],$_SESSION['login']));

        }

}

ob_end_flush();
        ?>





      
    <html>
    <head>
    <title>Espace membre</title>
    </head>
      
    <body>
    
    Bienvenue <?php echo ($_SESSION['login']); ?>!<br />

    

    <form action="membre.php" method="post">
        <p>

         Voulez vous changer des informations? <br />
    
         
         Mot de passe : <input type="password" name="pass"><br />
         Confirmation du mot de passe : <input type="password" name="pass_confirm" ><br />
         email: <input type="text" name="email" ><br />

         Catégorie socio-professionelle: 
        <input type="radio" name="niveau" value=1>College
        <input type="radio" name="niveau" value=2>Lycée
        <input type="radio" name="niveau" value=3>Etudes supérieures
        <input type="radio" name="niveau" value=4>Diplomé
        <input type="radio" name="niveau" value=5>Autre
        

        
        <input type="submit" name="changement" value="Go">
        </p>
    
    </body>
    </html>