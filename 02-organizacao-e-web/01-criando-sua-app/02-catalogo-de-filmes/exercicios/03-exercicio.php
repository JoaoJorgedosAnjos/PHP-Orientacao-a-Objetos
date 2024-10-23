<?php

echo"Digite um valor em metro(s)";
$valueInMeter = $argv[1];

$valueInCentimeter = $valueInMeter * 100;
echo"O valor em cementimetros é de: {$valueInCentimeter}cm \n";