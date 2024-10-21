<?php

echo"Digite uma temperatura em Celsius: ";
$celsius = $argv[1];
$fahrenheit = ($celsius * 1.8) + 32;

echo"A conversão de Celsius {$celsius} para Fahrenheit é: {$fahrenheit}";