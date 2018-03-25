<?php
    session_start(); 
    ?>
<html lang="en">
<style></style>
<!DOCTYPE html>
<head>
    
<title>Bootstrap Example</title>
    <!--Ouverture de la feuille de style CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">

    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    

    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



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
    
    <input type="button" class="btn btn-default btn-lg " value="Entraide" onclick="location.href = 'Entree.php'">
    
    <div class="btn-group">
      <button class="btn btn-danger dropdown-toggle btn-lg" type="button" id="dropdownMathsButton" data-toggle="dropdown" >
      Maths
      </button>
      <div class="dropdown-menu " aria-labelledby="dropdownMathsButton">
      
    <a class="dropdown-item" href="categorie.php?cat=M3"> Niveau 3eme<br/></a>
    
    <a class="dropdown-item" href="categorie.php?cat=M4">Niveau 4eme<br/></a>

     </div>
      </div>
    <div class="btn-group"> 
    <button class="btn btn-warning dropdown-toggle btn-lg" type="button" id="dropdownPhysiqueButton" data-toggle="dropdown" >
      Physique
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownPhysiqueButton">
    
    <a class="dropdown-item" href="categorie.php?cat=P3">Niveau 3eme<br /></a>
    
    <a class="dropdown-item" href="categorie.php?cat=P4">Niveau 4eme<br /></a>
     
     </div>
     </div>
    <div class="btn-group"> 
     <button class="btn btn-success dropdown-toggle btn-lg" type="button" id="dropdownArticlesButton" data-toggle="dropdown" >
      Articles
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownArticleButton">
    
    <a href="SaisieArticle.php">Saisir une nouvelle question</a><br />
    
    <a href="sesArticles">Voir ses questions</a><br />
    <a href="supprimerArticle2.php">Supprimer un de ses articles</a>
     </div>
     </div>

     <div class="btn-group"> 
    <button class="btn btn-info dropdown-toggle btn-lg" type="button" id="dropdownCompteButton" data-toggle="dropdown" >
      Compte
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownCompteButton">
    <?php
                //Affiche les boutons de connexion et d'inscription que si aucune session n'est ouverte
                if (!isset($_SESSION['login'])){
                    echo'  <a href="index.php">Se connecter</a><br />';
                } 
                ?>  
                    </li>
                    <li>
                    <?php
                    if (!isset($_SESSION['login'])){
                    echo'<a href="inscription.php">S&rsquo;inscrie</a>';
                } 
                ?>
                    </li>
                    <li>
                    <?php
                   //Affiche le bouton de déconnexion que si aucuinne session est actuellement ouverte
                      if (isset($_SESSION['login'])){
                        
                         echo'<a href="deconnexion.php">Se déconnecter</a><br />';   
                    } 
                    ?>
                    </li>
                    <li>
                    <?php
                   //Affiche le bouton de déconnexion que si aucuinne session est actuellement ouverte
                      if (isset($_SESSION['login'])){
                        
                         echo'<a href="membre.php"> Espace membre</a>';   
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

