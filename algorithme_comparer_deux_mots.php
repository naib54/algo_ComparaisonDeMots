<?php

$Chien = ['caravane'];
$Carnaval = ['carnaval'];

for($i = 0 ; $i < count($Chien) ; $i++){
    if($Chien[$i] < $Carnaval[$i]){
        echo("Le mot chien est avant le mot carnaval dans l'alphabet");
    }elseif($Chien[$i] > $Carnaval[$i]){
        echo("Le mot carnaval est avant le mot chien dans le dictionnaire");
    }
}

  
  /*if($Chien[$i] != $Carnaval[$i]){
    echo"Carnaval est avant chien dans l'alphabet <br>";
  }elseif ($Chien[$i] < $Carnaval[$i]){
    echo"Chien est avant carnaval dans l'alphabet <br>";*/
  
  ?>