<?php

$idade = 17;

echo $idade >= 19 ? "de menor" : "de maior";

echo "<br>";

$nome = 'Ale';
echo isset($nome) ? $nome : 'nome não definido';

echo $nome ?? 'nome não definido';