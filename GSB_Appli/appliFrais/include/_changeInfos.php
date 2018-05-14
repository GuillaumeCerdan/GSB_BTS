<?php
    require_once("_init.inc.php");
    $idConnexion=connecterServeurBD();
    $link = mysqli_connect("localhost", "root", "root");

    $nomFamille = $_POST['nomFamille'];
    $idVisiteur = obtenirIdUserConnecte();
    var_dump($idVisiteur);
    var_dump($nomFamille);
    $req_nomFamille = "UPDATE visiteur SET('" . $nomFamille . "') WHERE id='" . $idVisiteur . "'";
    if (mysqli_query($idConnexion, $req_nomFamille) === true) {
        echo 'Ca a marché mon cochon';
    }
    else {
        echo 'NOPE';
    }
    if (!mysqli_query($idConnexion, $req)) {
        printf("Erreur : %s\n", mysqli_error($idConnexion));
    }
?>