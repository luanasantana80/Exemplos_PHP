<?php 

    $numero=$_POST['n1'];
    $numero2=$_POST['n2'];
    $origin=$numero;

    $soma = 0;
    while ($numero <= $numero2) {
      if ($numero % 2 == 0) {
        echo "$numero";
      }
      $soma=$soma+$numero;
      $numero++;
      
    }


?>