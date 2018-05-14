<?php

include '/../include/connection_bdd.php';



function allcrypt($bd){
  $requete = 'select id_gen_mdp, mdp from visiteur';
  $result = $bd->query($requete);
  foreach ($result as $row) {
      if (strlen($row['mdp']) > 15){
          continue;
      }
      else {
          $mdp = crypte($row['mdp']);
          $requete = 'update visiteur set mdp = "'.$mdp.'" where id_gen_mdp = "'.$row['id'].'"';
          $result = $bd->query($requete);
      }
  }
}


allcrypt($conn);


// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Instanciation d'un tableau qui récupère tous les mots de passe non hashés
// $arr_nh = array();

// $result = mysqli_query($conn, "SELECT mdp FROM visiteur");
// while($row = mysqli_fetch_assoc($result)) {
//   array_push($arr_nh, $row);
// }
// var_dump($arr_nh);
// for ($o = 1; $o < count($arr_nh); $o++) {
//   $arr_nh['mdp'][$o] = hash('sha256', strval($arr_nh[$o]));
// }
// count($arr_nh);


// $result1 = mysqli_query("UPDATE visiteur SET mdp = '" . $arr_h[$o] . "'");


// // Instanciation d'un tableau hash tous les mots de passe



// // Boucle qui insère les mots de passe hashés
// for ($w = 1; $w < 28; $w++) {
//   $arr_h[$w] = mysqli_query("UPDATE visiteur SET mdp=' . $arr_h[$w] . ' WHERE id_gen_mdp=' . $w . '");
// }


?>
