<?php

$bd = new PDO('mysql:host=localhost;dbname=entraidemvc;charset=utf8', 'tomrollet', 'tomrollet');
$userManager = new userManager($bd);











?>