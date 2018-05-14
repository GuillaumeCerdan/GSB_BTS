<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gsb-prod";
$conn = mysqli_connect($servername, $username, $password, $dbname);

function crypte($mdp) {
    $cryppw = hash("sha256", $mdp);
    return $cryppw;
}
?>