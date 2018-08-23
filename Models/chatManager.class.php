<?php
//sert a rien pour l'insatant------------------------------------------------------------------------------------------
class chatManager{

 private $_db;

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function setDB($db){
    	$this->_db=$db;
    }

    	function getChat(){

		 $q = $this->_db->prepare('SELECT * FROM chat ');
    	 $q->execute();
    	 $chats = [];

	    while ($donnees = $q->fetch())
		    {
		      $chat= new chat();
		      $chat->hydrate($donnees);
		      $chats[] = $chat;
		    }
		 
		 return $chats;
	}




}




?>