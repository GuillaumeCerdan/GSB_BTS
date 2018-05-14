<?php

$repInclude = './include/';
require($repInclude . "_init.inc.php");

if (!estVisiteurConnecte()) {
    header("Location: cSeConnecter.php");  
}
require($repInclude . "_entete.inc.html");
require($repInclude . "_sommaire.inc.php");


?>

<div>

<form action="include/upload.php" method="post" enctype="multipart/form-data">
    Choisissez l'image à upload :
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Image à upload" name="submit">
</form>

</div>