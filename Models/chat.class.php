<?php //sert a rien pour l'insatnt ///////////////////////////////////////////////////////////////////////////////////////:
class chat{

	private $_idChat;	
	private $_loginUser; 		
	private $_textChat;	
	private $_dateChat; 		




	public function setIdChat($idChat){
	    $idChat = (int) $idChat;
	    $this->_idChat = $idChat;
	}
    public function setloginUser($loginUser){
	  
	    $this->_loginUser = $loginUser;
	 
	}
     public function setdateChat($dateChat)
	{
	    $this->_dateChat = $dateChat;
	}
	 public function settextChat($textChat)
	{
	    $this->_textChat = $textChat;
	}



public function hydrate(array $donnees)

{
  foreach ($donnees as $key => $value)
  {
    // On récupère le nom du setter correspondant à l'attribut.
    $method = 'set'.ucfirst($key);
    // Si le setter correspondant existe.
    if (method_exists($this, $method))
    {
      // On appelle le setter.
      $this->$method($value);
    }
  }
}



public function getIdChat() {
	    return $this->_idChat;
	}

	public function getLoginUser(){
	   return $this->_loginUser;
	}
    public function getDateChat(){
	    return $this->_dateChat;
	}
    public function getTextChat()
	{
	    return $this->_textChat;
	}












}
?>