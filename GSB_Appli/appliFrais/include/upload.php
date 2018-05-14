<?php
// Connection à la base de donnée
include_once 'connection_bdd.php';
// 
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$image = $_FILES["fileToUpload"]["tmp_name"];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($image);
    if($check == false) {
        echo "Ce fichier n'est pas une image";
        $uploadOk = 0;
    }
}
var_dump($uploadOk);
if ($uploadOk == 0) {
    echo "Désolé, votre fichier n'a pa pu être uploadé...";
}
if ($uploadOk == 1) {
    var_dump($image);
    if (move_uploaded_file($image, $target_file)) {
        echo "Le fichier " . basename($image) . " a bien été uploadé";
        header('Location: ../cSaisieFicheFrais.php');
        var_dump($toto);
    } else {
        echo "Désolé, votre fichier n'a pa pu être uploadé...";
    }
}
?>