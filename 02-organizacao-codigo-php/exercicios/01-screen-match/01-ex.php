<?php

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        '+' => $numero1 + $numero2,
        '-' => $numero1 - $numero2,
        '/' => $numero2 != 0 ? $numero1 / $numero2 : 0, 
        '*' => $numero1 * $numero2,
    };
}
$num1 = 1;
$num2 = 0;
$ope = "/";

echo operacaoMatematica($num1, $num2, "/");