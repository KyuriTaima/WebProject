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