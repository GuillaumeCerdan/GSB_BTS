<?php
/*
 * Page d'accueil de l'application web AppliFrais
 * @package default
 * @todo  RAS
 */
  $repInclude = "./include/";
  require($repInclude . "_init.inc.php");

  // page inaccessible si visiteur non connecté
  if (!estVisiteurConnecte()) {
    header("Location: cSeConnecter.php");  
  }

  require($repInclude . "_entete.inc.html");
  require($repInclude . "_sommaire.inc.php");

  $mois = sprintf("%04d%02d", date("Y"), date("m"));

?>
  <!-- Division principale -->
  <div id="contenu">
    <div id="min-height">
      <h2>Bienvenue sur l'intranet GSB</h2>

</div>


<script type="text/javascript">

var right = document.getElementById('right');
var left = document.getElementById('left');

function goToFicheFrais() {
}

  window.location.href="cSaisieFicheFrais.php";
      <div id="left" class="home-container" onclick="goToFicheFrais()">
        <img src="resources/sheet.svg"/>
        <p class="ctr-txt-abs">Consulter mes fiches de frais</p>
      </div>
      <div id="right" class="home-container" onclick="goToSaisieFrais()">
        <img src="resources/pen-sheet.svg"/>
        <p class="ctr-txt-abs">Saisie fiches de frais du mois de <?php echo obtenirLibelleMois(intval(substr($mois,4,2))) ?></p>
      </div>

    </div>
  </div>
  

<?php        
  require($repInclude . "_pied.inc.html");
  require($repInclude . "_fin.inc.php");
?> 
