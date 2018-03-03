<?php include("Acceuil.php");

?>



<?php

    $Login=$_SESSION['login'];

    $base = mysqli_connect ('localhost', 'root', '','Entraide');

//on test que le bouton envoi est bien été appuyé et que l'utilisateur a bien rentré l'id de l'article a supprimer
    if (isset($_POST['envoie2']) && $_POST['envoie2'] == 'envoie2') {
        if ((isset($_POST['idArticle']) && !empty($_POST['idArticle']))){
        $id=$_POST['idArticle'];
            
                        //on envoi la requete de suppression de l'article
                        $sql_delete="DELETE FROM articles WHERE login='$Login' AND id ='$id'  "; 
                        $req_delete = mysqli_query($base, $sql_delete);   
                    }
                    
                   
                }
            

    ?>

<html>



     <form action="supprimerArticle2.php" method="post"><br/>
     <input type="text" name="idArticle" ><br/>
     <input type="submit" name="envoie2" value="envoie2"><br/>
     </form>

    </html>