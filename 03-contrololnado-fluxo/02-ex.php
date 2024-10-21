<?php

echo"Digite a altura e o peso: \n";
$altura = $argv[1] / 100;
$peso = $argv[2];
$imc = $peso / ($altura * $altura); 
echo "IMC = {$imc}";