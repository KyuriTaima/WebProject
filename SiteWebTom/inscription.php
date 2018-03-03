<?php 
 include("Acceuil.php");
    // on teste si le visiteur a soumis le formulaire
    if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
       // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
       if  (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm'])     && isset($_POST['niveau']) && !empty($_POST['niveau']) && isset($_POST['email']) && !empty($_POST['email']) ) {
          // on teste les deux mots de passe
          if ($_POST['pass'] != $_POST['pass_confirm']) {
             $erreur = 'Les 2 mots de passe sont différents.';
          }
          else {

             try
                {
          $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                } 
            catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }    
 
             // on recherche si ce login est déjà utilisé par un autre membre
            

            $req_select = $bdd->prepare('SELECT count(id) FROM membre WHERE login=?');
            $req_select ->execute(array($_POST['login']));
            $donnees_select = $req_select ->fetchColumn();
            
            //on test l'unicité du login puis on insert le couple login/mdp dans la bdd
             if ($donnees_select == 0) {
                $hashed_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $req = $bdd->prepare('INSERT INTO membre(login,pass_md5, email, catSoPro  ) VALUES(?,?,?,?)');
                $req->execute(array($_POST['login'], $hashed_password, $_POST['email'], $_POST['niveau'] ));
             
                
                //on crée la session puis on se dirige vers la page d'acceuil des membres
                $_SESSION['login'] = $_POST['login'];
                header('Location: Entree.php');
                exit();
                
             }
             else {
                $erreur = 'Un membre possède déjà ce login.';
                
             }
          }
       }
       else {
        
          $erreur = 'Au moins un des champs est vide.';
       } 
    } 
    ?>
    <html>
    <head>
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/style.css">
    <?php  ?>

    </head>
      
    <body>
    <!--Ci dessous les forms qui permettent au PHP de récuperer les infos-->
        <form action="inscription.php" method="post">
        <p>

         Inscription à l'espace membre :<br />
    
         Login : <input type="text" name="login" ><br />
         Mot de passe : <input type="password" name="pass"><br />
         Confirmation du mot de passe : <input type="password" name="pass_confirm" ><br />
         email: <input type="text" name="email" ><br />
         Catégorie socio-professionelle: 
        <input type="radio" name="niveau" value=1>College
        <input type="radio" name="niveau" value=2>Lycée
        <input type="radio" name="niveau" value=3>Etudes supérieures
        <input type="radio" name="niveau" value=4>Diplomé
        <input type="radio" name="niveau" value=5>Autre
        

        
        <input type="submit" name="inscription" value="Inscription">
        </p>
   
   
    </form>
    </body>
    </html>