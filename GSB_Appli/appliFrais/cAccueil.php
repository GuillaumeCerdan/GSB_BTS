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

?>
  <!-- Division principale -->
  <div id="contenu">
    <div id="min-height">
      <h2>Bienvenue sur l'intranet GSB</h2>

 



<!-- guillaume.js
$(document).on('click' ,'.displayFullClient' , function() {
    $('#display_client').modal('show');

    $.ajax({
        url : "includes/getClient.php",
        type : 'GET',
        data : {idclient: $(this).attr("data-id")},
        success: function(result){
            console.log(result);
          $("#tbody_client").html(result);
        },
        error: function (e) {
          console.log('Error.', e);
        }
    });
}); -->




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