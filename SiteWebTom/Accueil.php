<?php
    session_start(); 
    ?>
<html>
<style></style>

<head>
    
    <title>Menu</title>
    <!--Ouverture de la feuille de style CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.js">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://freakspot.net/theme/js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    

   <!-- <link rel="stylesheet" href="assets/styleAcceuil.css"> -->
    
</head>


<body>
    <!--Création de la classe nav qui pointe sur tout le menu -->

<nav class="navbar ">
  <div class="container">
    <div class="navbar-header">
    </div>


    <ul class="nav navbar-nav">
    
    
    <button class="btn btn-default btn-lg "  type="button" >
    <a href="Accueil.php"></a> Entraide
    </button>

    
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