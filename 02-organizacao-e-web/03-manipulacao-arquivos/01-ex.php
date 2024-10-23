<?php

$arquivo = fopen('./teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
echo''. $primeiraLinha .'';
fclose($arquivo);