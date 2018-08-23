<html lang="en">
<style></style>
<!DOCTYPE html>
<head>
    


    <!--Ouverture de la feuille de style CSS -->
    <link rel="stylesheet" href="http://127.0.0.1/EntraideMVC/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/EntraideMVC/assets/style.css">

    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://127.0.0.1/EntraideMVC/bootstrap/js/bootstrap.min.js"></script>
    





   <!-- <link rel="stylesheet" href="assets/styleAcceuil.css"> -->
    



<nav class="navbar navbar-expand-lg navbar-inverse">


   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

<span class="icon-bar"></span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>                        

</button>
  
  <div class="collapse navbar-collapse" id="myNavbar">
    <div class="navbar-header">
    </div>


    <ul class="nav navbar-nav">
    
    <input type="button" class="btn btn-default btn-lg " value="Entraide" onclick="location.href = 'http://127.0.0.1/EntraideMVC/index.php'">
    
    <div class="btn-group">
      <button class="btn btn-danger dropdown-toggle btn-lg" type="button" id="dropdownMathsButton" data-toggle="dropdown" >
      Maths
      </button>
      <div class="dropdown-menu " aria-labelledby="dropdownMathsButton">
      
    <a class="dropdown-item" href="http://127.0.0.1/EntraideMVC/Controllers/Article.php?article=1"> Niveau 3eme<br/></a>
    
    <a class="dropdown-item" href="http://127.0.0.1/EntraideMVC/Controllers/Article.php?article=2">Niveau 4eme<br/></a>

     </div>
      </div>
    <div class="btn-group"> 
    <button class="btn btn-warning dropdown-toggle btn-lg" type="button" id="dropdownPhysiqueButton" data-toggle="dropdown" >
      Physique
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownPhysiqueButton">
    
    <a class="dropdown-item" href="http://127.0.0.1/EntraideMVC/Controllers/Article.php?article=3">Niveau 3eme<br /></a>
    
    <a class="dropdown-item" href="http://127.0.0.1/EntraideMVC/Controllers/Article.php?article=4">Niveau 4eme<br /></a>
     
     </div>
     </div>
    <div class="btn-group"> 
     <button class="btn btn-success dropdown-toggle btn-lg" type="button" id="dropdownArticlesButton" data-toggle="dropdown" >
      Articles
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownArticleButton">
    
    <a href="http://127.0.0.1/EntraideMVC/Controllers/NewArticle.php">Saisir une nouvelle question</a><br />
    
    <a href="http://127.0.0.1/EntraideMVC/Controllers/Article.php?article=own">Voir ses questions</a><br />
     </div>
     </div>

     <div class="btn-group"> 
     <button class="btn btn-primary dropdown-toggle btn-lg" type="button"  onclick="location.href = 'http://127.0.0.1/EntraideMVC/Controllers/Chat.php'"  >
      Chat
  
    </button>
     </div>

     <div class="btn-group"> 
    <button class="btn btn-info dropdown-toggle btn-lg" type="button" id="dropdownCompteButton" data-toggle="dropdown" >
      Compte
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownCompteButton">
    <?php
                //Affiche les boutons de connexion et d'inscription que si aucune session n'est ouverte
                if (!isset($_SESSION['login'])){
                    echo'  <a href="http://127.0.0.1/EntraideMVC/Controllers/Connexion.php">Se connecter</a><br />';
                } 
                ?>  
                    </li>
                    <li>
                    <?php
                    if (!isset($_SESSION['login'])){
                    echo'<a href="http://127.0.0.1/EntraideMVC/Controllers/Inscription.php">S&rsquo;inscrie</a>';
                } 
                ?>
                    </li>
                    <li>
                    <?php
                   //Affiche le bouton de déconnexion que si aucuinne session est actuellement ouverte
                      if (isset($_SESSION['login'])){
                        
                         echo'<a href="http://127.0.0.1/EntraideMVC/Controllers/Deconnexion.php">Se déconnecter</a><br />';   
                    } 
                    ?>
                    </li>
                    <li>
                    <?php
                   //Affiche le bouton de déconnexion que si aucuinne session est actuellement ouverte
                      if (isset($_SESSION['login'])){
                        
                         echo'<a href="http://127.0.0.1/EntraideMVC/Controllers/Compte.php"> Espace membre</a>';   
                    } 
                    ?>
     </div>
     </div>
     </div>
    </ul>
  </div>
  
</nav>




</body>




</html>







 


​

  

​

