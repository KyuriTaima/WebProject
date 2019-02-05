<?php
foreach ($articles as $value){
    

        $titre= $value->getNameNews();
        $corps = $value->getContentNews();
        $idAuteur = $value->getIdUser();
        $auteur = new user;
        $userManager->connectOther($auteur,$idAuteur);
        $login=$auteur->getLogin();
        $idConnect= $user->getIdUser();
        $idArticle= $value->getIdNews();
        
    ?>

    <article class="col-md-12 col-xs-12 col-sm-12">

        <div class="panel panel-info"> 
            <div id="banniere_titre">
            <h4> 
              <?php
                echo($titre);
              ?>
             </h4>
            </div>  

      

      <div id="banniere_texte">
        <?php echo ($corps); ?>
      </div>

      
        </div>
    <p class="text-right"> <strong> <?php  echo ("<a href='Controllers/profile.php?id=$idAuteur'>"); ?> Voir le profil de <?php echo ($login); ?>   </a> </strong> </p>
    <?php
    if (($idAuteur == $idConnect)&& isset($propreArticle) && ($propreArticle == true) ) {
      
      ?>
      <div>
      <form action='' method="post">
      <input type="hidden" name="idArticle" value='<?php echo($idArticle) ?>' />  
      <input type="submit" name="Supprimer" value="Supprimer">
      </form>
    </div>
    </article>
<?php
}
?>
<?php

} ?>