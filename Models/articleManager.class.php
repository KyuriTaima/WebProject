<?php
class articleManager{

 private $_db;

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function setDB($db){
    	$this->_db=$db;
    }

    
    public function getAllArticle(){
    	 $q = $this->_db->prepare('SELECT * FROM news ');
    	 $q->execute();
    	 $articles = [];

	    while ($donnees = $q->fetch())
		    {
		      $article= new article();
		      $article->hydrate($donnees);
		      $articles[] = $article;
		    }
		    
		 return $articles;
    }


    public function getCartegorieArticle($categorie){
		 $q = $this->_db->prepare('SELECT * FROM news WHERE categoryNews = ? ');
		 $q->execute(array($categorie));
		 $articles = [];

	    while ($donnees = $q->fetch())
		    {
		      $article= new article();
		      $article->hydrate($donnees);
		      $articles[] = $article;
		    }
		    
		 return $articles;


    }

    public function getPropreArticle($id){
		 $q = $this->_db->prepare('SELECT * FROM news WHERE idUser = ? ');
		 $q->execute(array($id));
		 $articles = [];

	    while ($donnees = $q->fetch())
		    {
		      $article= new article();
		      $article->hydrate($donnees);
		      $articles[] = $article;
		    }
		    
		 return $articles;


    }


    public function addArticle($categorie, $article, $nomArticle, $idUser){
    	$q = $this->_db->prepare('INSERT INTO news(idUser, categoryNews, nameNews, contentNews) VALUES(?,?,?,?)');
    	$q->execute(array($idUser,$categorie,$nomArticle,$article, ));

    }

    public function delete($idArticle){
    	$q = $this->_db->prepare('DELETE FROM news WHERE idNews = ?');
    	$q->execute(array($idArticle ));

    }







}




?>