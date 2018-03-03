<?php include("Acceuil.php");
// NE FONCTIONNE PAS
?>



<?php

    $Login=$_SESSION['login'];

    $base = mysqli_connect ('localhost', 'root', '','Entraide');


    if (isset($_POST['envoie2']) && $_POST['envoie2'] == 'envoie2') {
    if (isset($_POST['nom']) && !empty($_POST['nom'])){
        if ((isset($_POST['idArticle']) && !empty($_POST['idArticle']))){
        $id=$_POST['idArticle'];
        $cat=$_POST['nom'];

            
    $sql0 = "SELECT count(*) FROM articles WHERE login='$Login' AND categorie ='$cat' ";

    
    $req = mysqli_query($base, $sql0);
    $data = mysqli_fetch_array($req,  MYSQLI_BOTH );
    $nbArticle = $data[0];

            

            if (($id>=1)&&($id<=$nbArticle)){
                $i=0;

                /*
                $sql_id = "SELECT id FROM articles WHERE login='$Login' AND categorie ='$cat' ";
                $reqid = mysqli_query($base, $sql_id);
                $data = mysqli_fetch_array($reqid, MYSQLI_BOTH)
                */


                $sql_select = "SELECT count(*) FROM articles WHERE login='$Login' AND categorie ='$cat' ";
                $req1 = mysqli_query($base, $sql_select);

                while ($data = mysqli_fetch_array($req1, MYSQLI_BOTH)) {
                var_dump($cat);
                    if($i == $id-1)
                    {
                        $sql_delete="DELETE FROM articles WHERE login='$Login' AND categorie ='$cat'  "; 
                        $req_delete = mysqli_query($base, $sql_delete);   
                    }
                    
                 $i++;  
                }
            }
        }
    }
  }
    

    ?>
<html>
<form action="supprimerArticle.php" method="post">
<input type="radio" name="nom" value="P3"  checked>Physique 3eme
<input type="radio" name="nom" value="P4">Physique 4eme
<input type="radio" name="nom" value="M3">Maths 3eme
<input type="radio" name="nom" value="M4">Maths 4eme


     <form action="supprimerArticle.php" method="post"><br/>
     <input type="text" name="idArticle" ><br/>
     <input type="submit" name="envoie2" value="envoie2"><br/>
     </form>

    </html>