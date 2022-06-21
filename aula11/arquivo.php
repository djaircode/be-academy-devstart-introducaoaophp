<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Alessandro'.PHP_EOL); //fwrite = File Write
fwrite($arquivo, 'Bruno'.PHP_EOL); //PHP_EOL = End Of Line in any OS
fwrite($arquivo, 'Luiza'.PHP_EOL);

fopen($arquivo); //Closes the files simply to save memory
