<?php
class userManager
{
    private $_db;

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function setDB($db){
    	$this->_db=$db;
    }

  public function add()
  {

  	$req_select =  $this->_db->prepare('SELECT count(idUser) FROM user WHERE login=?');
    $req_select ->execute(array($_POST['login']));
    $donnees_select = $req_select ->fetchColumn();
    
     //on test l'unicité du login puis on insert le couple login/mdp dans la bdd
     if ($donnees_select == 0) {
     	
	  	$hashed_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
	    $q = $this->_db->prepare('INSERT INTO user(login,pass, mail, socialBackground) VALUES(?,?,?,?)');
	    $q->execute(array($_POST['login'], $hashed_password, $_POST['email'], $_POST['niveau']));
	    $_SESSION['login'] = $_POST['login'];
	    session_start();
	    header('Location: ../index.php');
        exit();
    	}
    	echo("Login déjà existant");
  }


   public function connectWebsite()
  {
  	if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {

	 	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {
	  	$req = $this->_db->prepare('SELECT pass FROM user WHERE login=? ');
	  	$req->execute(array($_POST['login']));
	  	$donnees = $req->fetch();

		  	if (password_verify($_POST['pass'],$donnees['pass'])){
		  		session_start();
		  		$_SESSION['login'] = $_POST['login'];
		  		$hashed_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
		  		header('Location: ../index.php');
		  		exit();
  			}
  		}
  	}
  }
  
  public function connect(user $user){
    $q=$this->_db->prepare('SELECT * FROM user WHERE login=?');
    $q->execute(array($_SESSION['login']));
    $donnees = $q->fetch();
    $user->hydrate($donnees);

  }

  public function connectOther(user $userProfile, $id){
    $q=$this->_db->prepare('SELECT * FROM user WHERE idUser=?');
    $q->execute(array($id));
    $donnees = $q->fetch();
    $userProfile->hydrate($donnees);

  }
  

public function searchUser(int $id){
  $q=$this->_db->prepare('SELECT login FROM user WHERE login=?');
    $q->execute(array($id));
    $donnees = $q->fetch();
    return $donnees;
}

public function updtatePass($user, $hashed_password){
  $user->setPass($hashed_password);
  $id = $user->getIdUser();
  $q=$this->_db->prepare('UPDATE user SET pass=? WHERE idUser =?');
  $q ->execute(array($hashed_password,$id));

}
public function updtateEmail($user, $email){
  $user->setMail($email);
  $id = $user->getIdUser();
  $q=$this->_db->prepare('UPDATE user SET mail=? WHERE idUser =?');
  $q ->execute(array($email,$id));

}


public function updtateSocialBackground($user, $niveau){
  $user->setSocialBackground($niveau);
  $id = $user->getIdUser();
  $q=$this->_db->prepare('UPDATE user SET socialBackground=? WHERE idUser =?');
  $q->execute(array($niveau,$id));

}

}

?>