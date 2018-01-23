<?php

for ($i = 0; $i < 28; $i++) {
  $count = $i;
  $requeteMdp1 = mysqli_prepare(connecterServeurBD(), "SELECT mdp from visiteur WHERE id_gen_mdp='$count'");
  $requeteMdp1->execute();
  echo($requeteMdp1);
}
  $requeteMdp2 = mysqli_prepare("UPDATE visiteur SET mdp='$requeteMdp1' WHERE id_gen_mdp='$count'");


?>
