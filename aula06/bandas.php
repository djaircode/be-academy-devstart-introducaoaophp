<?php

$bandas = [
  'Dream Theater',   //0
  'Neo Pi Neo',      //1
  'Exaltasamba',     //2
  'Iron Maiden',     //3
  'Aviões do Forró', //4
 ];

$bandas[100] = 'Nirvana';
$bandas[9] = 'Calcinha Preta';

$bandas[2] = 'Turma do Pagode';

echo '<ul>';

foreach ($bandas as $cadaBanda) {
  echo "<li>{$cadaBanda}</li>";
}

?>