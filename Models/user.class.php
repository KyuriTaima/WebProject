<?php
class user{
    private $_idUser;
     private $_login;
    private $_pass;
    private $_dateCreation;
    private $_mail ;
    private $_socialBackground;

public function setIdUser($idUser)
 {
    $idUser = (int) $idUser;
    $this->_idUser = $idUser;
}
    public function setLogin($login)
{
  if (is_string($login))
    {
    $this->_login = $login;
  }
}

    public function setPass($pass)
{
  if (is_string($pass))
    {
    $this->_pass = $pass;
  }
}
    public function setDateCreation($dateCreation)
{
    $this->_dateCreation = $dateCreation;
}
    public function setMail($mail)
{
  if (is_string($mail))
    {
    $this->_mail = $mail;
  }
}
    public function setSocialBackground($socialBackground)
{
    $this->_socialBackground = $socialBackground;
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

public function getInfoUser( ){

  $info = get_object_vars($this);
  return $info;



}


public function getIdUser(){
  return $this->_idUser;
}
public function getLogin(){
  return $this->_login;
}

}

?>