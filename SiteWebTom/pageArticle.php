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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

</head>

<body>
    <?php
    $id = $_GET['id'];
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=Entraide;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } 
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }    

    $rep =  $bdd->query("SELECT corpsTexte, login, categorie FROM articles WHERE id = '$id'");

    $donnees= $rep->fetch();
        ?>
        <div class="col-md-4"></div>
        <div class="col-md-4">
        	<h1><?php echo $donnees['login']; ?></h1><br />
        	<p>
        		<?php echo $donnees['corpsTexte']; ?>
        	</p>        	
        </div>
        <div class="col-md-4"></div>
    <?php
    $rep->closeCursor();   

    ?>


</body>

</html>