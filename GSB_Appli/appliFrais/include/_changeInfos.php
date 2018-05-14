<?php
    require_once("_init.inc.php");
    $idConnexion=connecterServeurBD();
    $link = mysqli_connect("localhost", "root", "root");

    //$nomFamille = isset($_POST['nomFamille']) ? $_POST['nomFamille'] : NULL;
    $nomFamille = $_POST['nomFamille'];
    $idVisiteur = obtenirIdUserConnecte();
    var_dump($idVisiteur);
    var_dump($nomFamille);
    $req = "UPDATE visiteur from gsb_valide SET('" . $nomFamille . "') WHERE id='" . $idVisiteur . "'";
    if (mysqli_query($idConnexion, $req) === true) {
        echo 'Ca a marché mon cochon';
    }
    else {
        echo 'NOPE';
    }
    if (!mysqli_query($idConnexion, $req)) {
        printf("Erreur : %s\n", mysqli_error($idConnexion));
    }
?>