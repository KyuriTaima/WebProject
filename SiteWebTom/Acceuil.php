<?php
    session_start(); 
    ?>
<html>
<style></style>

<head>
    
    <title>Menu</title>
    <!--Ouverture de la feuille de style CSS -->
    <link rel="stylesheet" href="assets/styleAcceuil.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
</head>


<body>
    <!--Création de la classe nav qui pointe sur tout le menu -->
    <nav id="colorNav">
        <ul>
            <li  class="green"> <!--Une case du menu -->
                <a href="Entree.php" class="icon-home">Accueil</a> <!--Sous menu -->
               
            <li class="red">
                <a href="#" class="icon-cogs">Maths</a>
                <ul>
                    <li>
                        <a href="M3Article1.php">Niveau 3eme</a>
                    </li>
                    <li>
                        <a href="M4.php">Niveau 4eme</a>
                    </li>
                   
                </ul>
            </li>
            <li class="blue">
                <a href="#" class="icon-twitter">Physique</a>
                <ul>
                    <li>
                        <a href="P3.php">Niveau 3eme</a>
                    </li>
                    <li>
                        <a href="P4.php">Niveau 4eme</a>
                    </li>

                </ul>
            </li>
            <li class="yellow">
                <a href="#" class="icon-beaker">Rédaction</a>
                <ul>
                    <li>
                        <a href="SaisieArticle.php">Saisir une nouvelle question</a>
                    </li>
                    <li>
                        <a href="sesArticles">Voir ses questions</a>
                    </li>
                    <li>
                        <a href="supprimerArticle2.php">Supprimer un de ses articles</a>
                    </li>
                </ul>
            </li>
            <li class="purple">
                <a href="#" class="icon-envelope">Compte</a>
                <ul>
                <li>
                <?php
                //Affiche les boutons de connexion et d'inscription que si aucune session n'est ouverte
                if (!isset($_SESSION['login'])){
                    echo' <a href="index.php">Se connecter</a>';
                } 
                ?>  
                    </li>
                    <li>
                    <?php
                    if (!isset($_SESSION['login'])){
                    echo' <a href="inscription.php">S inscrie</a>';
                } 
                ?>
                    </li>
                    <li>
                    <?php
                   //Affiche le bouton de déconnexion que si aucuinne session est actuellement ouverte
                      if (isset($_SESSION['login'])){
                        
                         echo'<a href="deconnexion.php"> Se déconnecter</a>';   
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
                    </li>

                </ul>
            </li>
        </ul>
    </nav>


</body>


</html>