<?php
    include("Acceuil.php"); 
   
    if (!isset($_SESSION['login'])) {
       header ('Location: index.php');
       exit(); 
    } 
    ?>
<html>

<head>
    <title>My document</title>
    <link rel="stylesheet" href="assets/style.css">
    

</head>

<body>
    <p>
    <div id="wrapper">

        <header>
            <h1>
                <img src="images/bandeau_maths3eme.jpg" alt="Entraide Maths 3eme" />
            </h1>
        </header>
    
        <div id="listeArticles">
                <ul>
                    <li>
                        <h1>
                             <a href="M3Article1.php">post 1</a>
                        </h1>
                    </li>
                    <li>
                        <h1>
                            <a href="M3Article2.php">post 2</a>
                        </h1>
                    </li>

                </ul>
        </div>
   
    </div>
</p>
</body>

</html>