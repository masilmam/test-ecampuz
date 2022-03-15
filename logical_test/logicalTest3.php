<?php
// a = bilangan pembilang
// b = bilangan penyebut

function pembagian($a, $b) {
  $aUp = $a + 1;
  $aDown = $a - 1;

  if ($a > $b) {
    $i = 0;
    while(1) {
      if($b * $i == $a || $b * $i == $aUp || $b * $i == $aDown) {
      $hasil = $i;
      break;
      }
    
      $i++;
    }
  } else {
    $hasil = 0;
  }

  echo 'Bilangan Pembilang = ' . $a . '<br>';
  echo 'Bilangan Penyebut = ' . $b . '<br>';
  echo '<br>Maka, ' . $a . ' : ' . $b . ' adalah ' . $hasil;
}

pembagian(7,2);

?>
