<!DOCTYPE html>

<!--
/** 
 * Contient la division pour le sommaire, sujet à des variations suivant la 
 * connexion ou non d'un utilisateur, et dans l'avenir, suivant le type de cet utilisateur 
 * @todo  RAS
 */
-->
<!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">  
      </div>
<?php      
  include_once 'connection_bdd.php';
  if (estVisiteurConnecte() ) {
    $idUser = obtenirIdUserConnecte() ;
    $lgUser = obtenirDetailVisiteur($idConnexion, $idUser);
    $nom = $lgUser['nom'];
    $prenom = $lgUser['prenom'];
    $role = "Visiteur Médical";

    
    ?>
      <h2>
      <?php
      echo $nom . " " . $prenom . " / " . $role;
      ?>
      </h2>         
      <?php
      // affichage des éventuelles erreurs déjà détectées
  }
  if (nbErreurs($tabErreurs) > 0) {
  echo toStringErreurs($tabErreurs);
  }     

?>
</div>

</html>    