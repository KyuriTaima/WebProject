<?php

foreach ($info as $key => $value)
  {
  	
  	if (($key != '_pass') &&($key != '_idUser')){
  		$champ =  substr($key,1);
	    echo($champ .' : '.$value.'</br>');
	}
  }

?>