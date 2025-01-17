<?php
  $repInclude = "./include/";
  require($repInclude . "_init.inc.php");

  // page inaccessible si visiteur non connecté
  if (!estVisiteurConnecte()) {
      header("Location: cSeConnecter.php");  
  }

  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");

?>
  <!-- Division principale -->
  <div id="contenu">
    <div id="min-height">
      <h2>Bienvenue sur l'intranet GSB</h2>
    </div>
  </div>
<?php 
    require($repInclude . "_pied.inc.html");
    require($repInclude . "_fin.inc.php");
?>