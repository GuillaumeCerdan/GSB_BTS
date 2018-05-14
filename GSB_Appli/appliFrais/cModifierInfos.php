
<?php
$repInclude = './include/';
require_once($repInclude . "_init.inc.php");
if (!estVisiteurConnecte()) {
    header("Location: cSeConnecter.php");  
}
require($repInclude . "_entete.inc.html");
require($repInclude . "_sommaire.inc.php");
?>

<h2>Modifier mes infos</h2>
<form action="include/_changeInfos.php" method="post">
  <div class="corpsForm">
    <div style="display: inline-block; margin-left: 25px; margin-bottom: 25px;">
      <h2>Changer nom de famille</h2>
      <input name="nomFamille" value="" placeholder="Changer nom de famille" />
      <input type="submit" value="Valider" size="20" title="Changer mes informations" style="width: 20%" />
</form>



<h2>Changer adresse</h2>
<input name="adresse" value="" placeholder="Changer son adresse" />
<input name="ville" value="" placeholder="Changer sa ville" />
<input name="cp" value="" placeholder="Changer son code postal" style="margin-bottom: 25px;" />
<br>
</div>
</div>