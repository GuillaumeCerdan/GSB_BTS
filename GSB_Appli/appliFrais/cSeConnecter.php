<?php
/**
 * Script de contrôle et d'affichage du cas d'utilisation "Se connecter"
 * @package default
 * @todo  RAS
 */
  $repInclude = './include/';
  require($repInclude . "_init.inc.php");

  // est-on au 1er appel du programme ou non ?
  $etape=(count($_POST)!=0)?'validerConnexion' : 'demanderConnexion';
  // test de hashage des mots de passe
  if ($etape=='validerConnexion') { // un client demande à s'authentifier
      // acquisition des données envoyées, ici login et mot de passe
      $login = lireDonneePost("txtLogin");
      $mdp = lireDonneePost("txtMdp");
      // La connection crypte le mot de passe avec la clé 'sha256' ce qui permet de garder le même mot de passage
      // mais il est crypté dans la base de donnée donc même si quelqu'un rentre, il n'aura pas la clé donc pas les mdp
      //$mdp = hash('sha256', $_POST['txtMdp']);
      $lgUser = verifierInfosConnexion($idConnexion, $login, $mdp) ;
      // si l'id utilisateur a été trouvé, donc informations fournies sous forme de tableau
      if ( is_array($lgUser) ) {
          affecterInfosConnecte($lgUser["id"], $lgUser["login"]);
      }
      else {
          ajouterErreur($tabErreurs, "Pseudo et/ou mot de passe incorrects");
      }
  }
  if ( $etape == "validerConnexion" && nbErreurs($tabErreurs) == 0 ) {
        header("Location:cAccueil.php");
  }

/*  require($repInclude . "_entete.inc.html");*/
  /*require($repInclude . "_sommaire.inc.php");*/

?>


<!-- Division pour le contenu principal -->


  <link rel="stylesheet" href="styles/styles.css">
    <div id="contenu">
      <div class="bck">
      <div class="container-white">
        <img src="./images/logo.jpg" id="logoGSB" alt="Laboratoire Galaxy-Swiss Bourdin" title="Laboratoire Galaxy-Swiss Bourdin" />
      <h2 class="title-home">Identification utilisateur</h2>
<?php
          if ( $etape == "validerConnexion" )
          {
              if ( nbErreurs($tabErreurs) > 0 )
              {
                echo toStringErreurs($tabErreurs);
              }
          }
?>




      <form id="frmConnexion" action="" method="post">
      <div class="corpsForm">
        <input type="hidden" name="etape" id="etape" value="validerConnexion" />
      <p>
        <label for="txtLogin" class="label" accesskey="n">Login<br></label>
        <input class="input" type="text" id="txtLogin" name="txtLogin" maxlength="20" size="15" value="" title="Entrez votre login" />
      </p>
      <p>
        <label for="txtMdp" class="label" accesskey="m">Mot de passe<br></label>
        <input class="input" type="password" id="txtMdp" name="txtMdp" minlength="4" maxlength="16" size="15" value=""  title="Entrez votre mot de passe"/>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input type="submit" id="ok" value="Valider" class="btn" />
        <input type="reset" id="annuler" value="Effacer" class="btn" />
      </p>
      </div>
      </form>
      <p class="asterisk">Tous les champs sont obligatoires !</p>
    </div>
    </div>
  </div>
<?php/*
    require($repInclude . "_pied.inc.html");
    require($repInclude . "_fin.inc.php");*/
?>
