
<?php
	session_start();
    $login =$_SESSION['login'];
	$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');
    $q = $bd ->prepare('INSERT INTO chat (loginUser, textChat) VALUES (?, ?)'); //envoie le message dans la bdd
    $q->execute(array($login,$_POST['text'])); 
?>
