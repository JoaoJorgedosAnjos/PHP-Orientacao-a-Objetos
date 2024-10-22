<?php

function calculaImc(int $altura, int $peso)
{
    return $peso / ($altura * $altura); 
}

$altura = $argv[1] / 100;
$peso = $argv[2];
$imc = calculaImc($altura,$peso); 
echo "IMC = {$imc}";