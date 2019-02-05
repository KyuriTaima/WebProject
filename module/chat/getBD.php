
<?php
	session_start();
    $login =$_SESSION['login'];
	$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');

		 $q = $bd ->prepare('SELECT * FROM chat ORDER BY dateChat'); //récupère tous les chats de la bdd
    	 $q->execute();
    	 $posts = array();

    	  while ($donnees = $q->fetch()){ //stock tous les messages dans un tableau
    	  	$loginUser=$donnees['loginUser']; 
			$text=$donnees['textChat']; 
			$date=$donnees['dateChat'];
			$posts[] = array('loginUser'=> $loginUser, 'text'=> $text, 'date'=> $date); 
    	  }
    	
		$fp = fopen('chat.json', 'w');
		fwrite($fp, json_encode($posts)); //tableau envoyé dans le JSON
		fclose($fp)



?>