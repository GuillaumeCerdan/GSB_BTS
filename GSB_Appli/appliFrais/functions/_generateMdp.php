<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gsb_valide";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

for ($i = 0; $i < 28; $i++) {

  $sql1 = "SELECT mdp FROM visiteur WHERE id_gen_mdp='$i'";

  if (mysqli_query($conn, $sql1)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  $mdp_hash = hash('sha256', 'RETURN QUERY');

  $sql2 = "UPDATE visiteur SET mdp='$mdp_hash' WHERE id='$count'";

  if (mysqli_query($conn, $sql2)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

}









mysqli_close($conn);


?>
