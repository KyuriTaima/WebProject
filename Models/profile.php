<?php
$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');
    $userManager = new userManager($bd);
 

    $user = new user;
    $userProfile = new user;

    $userManager->connect($user); 
    $userManager->connectOther($userProfile, $_GET['id'] );


    function showProfile($userProfile){
        
        $info=$userProfile->getInfoUser();
        return $info;
        var_dump($info);
    }






    ?>