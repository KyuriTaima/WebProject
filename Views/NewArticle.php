


<html>
<head>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <!--Ci dessous les forms permettant au PHP de récuperer les informations misent par l'utilisateur-->
    <form action="NewArticle.php" method="post">



        <input type="radio" name="categorie" value="3">Physique 3eme
        <input type="radio" name="categorie" value="4">Physique 4eme
        <input type="radio" name="categorie" value="1">Maths 3eme
        <input type="radio" name="categorie" value="2">Maths 4eme
        <br />
        Nom de l'article: <textarea name="nameArticle" rows=1    cols=20></textarea>><br />
        Tapez votre article ici:<textarea name="article" rows=10    cols=30></textarea>><br />
        <input type="submit" name="envoie" value="envoie">
    </form>

</body>

</html>
