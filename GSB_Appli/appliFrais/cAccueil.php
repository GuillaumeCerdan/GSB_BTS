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

 
<div id="left" onclick="goToFicheFrais()">
  <img class="logo-png" src="resources/sheet.png"/>
  <p>Consulter mes fiches de frais</p>
</div>
<div id="right" onclick="goToSaisieFrais()">
  <img class="logo-png" src="resources/pen-sheet.png"/>
  <p>Saisie fiches de frais du mois de <?php echo obtenirLibelleMois(intval(substr($mois,4,2))) ?></p>
</div>


<script type="text/javascript">

var right = document.getElementById('right');
var left = document.getElementById('left');

function goToFicheFrais() {
  window.location.href="cConsultFichesFrais.php";
}

function goToSaisieFrais() {
  window.location.href="cSaisieFicheFrais.php";
}

</script>




<!--  function addClients($name, $nsiret, $adress, $phonenumber, $entreprise, $job, $city, $cp, $country, $email) {
         $req = 'INSERT INTO client (name, surname, adress, entreprise, phonenumber, date) VALUES ("'.htmlspecialchars($name).'", "'.htmlspecialchars($nsiret).'","'.htmlspecialchars($phonenumber).'",  "'.htmlspecialchars($entreprise).'", "'.htmlspecialchars($job).'", "'.htmlspecialchars($city).'",  "'.htmlspecialchars($cp).'",  "'.htmlspecialchars($country).'",  "'.htmlspecialchars($email).'")';
         return getPDO()->query($req);
     }



     function getPartialsClients(){
         $req = 'SELECT idclient, name, adress, entreprise, phonenumber, email FROM client ORDER BY idclient DESC';
         return getPDO()->query($req);
     }
     function getFullClient($idclient){
         $req = 'SELECT idclient, name, nsiret, adress, phonenumber, entreprise, idproject, date, job, city, cp, country, email FROM client WHERE idclient="' . $idclient . '" ORDER BY idclient DESC';
         return getPDO()->query($req);
     } -->