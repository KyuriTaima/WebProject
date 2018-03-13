<?php
    include("sesArticles.php");
    

//on test que le bouton envoi est bien été appuyé et que l'utilisateur a bien rentré l'id de l'article a supprimer
    if (isset($_POST['envoie2']) && $_POST['envoie2'] == 'envoie2') {
        if ((isset($_POST['idArticle']) && !empty($_POST['idArticle']))){
        $id=$_POST['idArticle'];
            
                        //on envoi la requete de suppression de l'article
                        $req= $bdd->prepare('DELETE FROM articles WHERE login=? AND id =? ');
                        $req ->execute(array($_SESSION['login']),$id );
 
                    }
                    
                   
                }
            

    ?>

<html>

    <body>
    
     <form action="supprimerArticle2.php" method="post"><br/>
    
     <input type="text" name="idArticle" > Rentrez l'id de l'article à supprimer <br/>
     <input type="submit" name="envoie2" value="envoie2"><br/>
     </form>
     </body>

    </html>