<?php

echo "Digite 3 notas";
$notas1 = $argv[1] ?? 0; 
$notas2 = $argv[2] ?? 0; 
$notas3 = $argv[3] ?? 0;

$averageScore = ($notas1 + $notas2 + $notas3) /3;

echo "A média das notas é: $averageScore\n";
