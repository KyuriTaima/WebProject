<?php include("Acceuil.php");
if (!isset($_SESSION['login'])) {
       header ('Location: index.php');
       exit(); 
    } 
     ?>
<html>

<head>
    <title>My document</title>
    <link rel="stylesheet" href="assets/style.css" />  

</head>

<body>
    Lire un post de maths 3ieme<br/>
    <?php
     $Login=$_SESSION['login'];
     $base = mysqli_connect ('localhost', 'root', '','Entraide');

     //on envoi une requete pour trouver le nombre d'articles qui correspondent à ceux de la catégorie voulue
     $sql0 = "SELECT count(*) FROM articles WHERE (categorie ='P4')";
     $req0 = mysqli_query($base, $sql0);
     $data0 = mysqli_fetch_array($req0, MYSQLI_NUM);
     //on laisse a l'utilisateur le choix de l'article
     if($data0[0]!=0){
        echo('Choisissez un article de physique à lire entre 1 et '.$data0[0]);
}else{
    echo("Il n'y a pas d'article de Physique niveau 4eme");
}     ?>
     <!--Ci dessous les forms qui permettent au PHP de récuperer les infos-->
     <form action="P4.php" method="post"><br/>
     <input type="text" name="idArticle" ><br/>
     <input type="submit" name="envoie" value="envoie"><br/>
     </form>
     <p>
     <?php
     //on test si les variables sont bien définies et si le bouton submit a été appuyé
      if (isset($_POST['envoie']) && $_POST['envoie'] == 'envoie') {

        if ((isset($_POST['idArticle']) && !empty($_POST['idArticle']))){

            $id=$_POST['idArticle'];
            $envoie= $_POST['envoie'];
            //On test que l'utilisateur choississe bien un article dans ceux proposés
            if (($id>=1)&&($id<=$data0[0])){

                $sql_select = "SELECT corpsTexte FROM articles WHERE (categorie ='P4')";
                $req = mysqli_query($base, $sql_select);
                $i = 0;
                //Boucle permettant d'afficher que l'article voulue/ A optimiser
                  while ($data = mysqli_fetch_array($req, MYSQLI_ASSOC)) {
                if($i == $id-1){
                    
                     echo ($data['corpsTexte'].'<br />');
                    
                
                     }
                 $i++;  
                }

            }
            
        }
    }

    ?>
    </p>

    
</body>

</html>