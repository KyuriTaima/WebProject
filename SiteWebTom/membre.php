<?php //Page d'acceuil des membres
     include("Acceuil.php"); 
    

     if (!isset($_SESSION['login'])) {
         header ('Location: index.php');
         exit(); 
     } 
     
     if (isset($_POST['changement']) && $_POST['changement'] == 'Go') {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        if(isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']) ) {
            $req_update = $bdd->prepare('UPDATE membre SET pass_md5=? WHERE login =?');
            $req_update ->execute(array($_POST['pass'],$_SESSION['login']));

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


        ?>





      
    <html>
    <head>
    <title>Espace membre</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
      
    <body>
        <div class="row">
            <span class="col-md-offset-4 col-md-4"><h1>Bienvenue <?php echo ($_SESSION['login']); ?>!</h1><br /></span>
        </div>

    
        <div class="row">
            <div class=" col-md-offset-4 col-md-4">
            <form action="membre.php" method="post">
                <p>

                 <h2>Voulez vous changer des informations? </h2><br />
            
                 
                 Mot de passe : <input type="password" name="pass"><br /><br />
                 Confirmation du mot de passe : <input type="password" name="pass_confirm" ><br /><br />
                 email: <input type="text" name="email" ><br />

                 Catégorie socio-professionelle: 
                <input type="radio" name="niveau" value=1>College
                <input type="radio" name="niveau" value=2>Lycée
                <input type="radio" name="niveau" value=3>Etudes supérieures
                <input type="radio" name="niveau" value=4>Diplomé
                <input type="radio" name="niveau" value=5>Autre
                

                
                <input type="submit" name="changement" value="Go">
                </p>
            </form>
        </div>
    
    </body>
    </html>