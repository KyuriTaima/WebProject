<?php include("Acceuil.php"); ?>
<html>

<head>
    <title>My document</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
 
    <?php
    $nArticle = 1;
    $Login=$_SESSION['login'];
    $base = mysqli_connect ('localhost', 'root', '','Entraide');
  
    $sql_select = "SELECT corpsTexte, categorie FROM articles WHERE (categorie ='M3')";
    $req = mysqli_query($base, $sql_select);
       /* var_dump($sql_select);
        var_dump($req);*/
     
        
    $i = 0;
    while ($data = mysqli_fetch_array($req, MYSQLI_ASSOC)) {
        if($i == $nArticle){
            echo ($data['corpsTexte'].'<br />');
        }
        $i++;  
    }

    ?>


</body>

</html>