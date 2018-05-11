<?php
class article{

	private $_idNews;	
	private $_idUser; 		
	private $_nameNews;	
	private $_dateNews; 		
	private $_contentNews; 		
	private $_categoryNews;


	public function setIdNews($idNews) {
	    $idNews = (int) $idNews;
	    $this->_idNews = $idNews;
	}

	public function setIdUser($idUser){
	    $idUser = (int) $idUser;
	    $this->_idUser = $idUser;
	}
    public function setNameNews($nameNews){
	  if (is_string($nameNews))
	  {
	    $this->_nameNews = $nameNews;
	  }
	}
    public function setDateNews($dateNews)
	{
	    $this->_dateNews = $dateNews;
	}
    
    public function setContentNews($contentNews)
	{
	  if (is_string($contentNews))
	    {
	    $this->_contentNews = $contentNews;
	  }
	}
    public function setCategoryNews($categoryNews)
	{
		$categoryNews = (int) $categoryNews;
	    $this->_categoryNews = $categoryNews;
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




public function getIdNews() {
	    return $this->_idNews;
	}

	public function getIdUser(){
	   return $this->_idUser;
	}
    public function getNameNews(){
	    return $this->_nameNews;
	}
    public function getDateNews()
	{
	    return $this->_dateNews;
	}
    
    public function getContentNews()
	{
	    return $this->_contentNews;
	 
	}
    public function getCategoryNews()
	{
	    return $this->_categoryNews;
	}











}
?>