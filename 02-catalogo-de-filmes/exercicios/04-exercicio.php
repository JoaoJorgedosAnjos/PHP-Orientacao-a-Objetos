<?php
// Função para verificar se um ano é bissexto
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

// Solicita o ano ao usuário
$year = intval(readline("Digite um ano: "));

// Verifica se o ano é bissexto
if (isLeapYear($year)) {
    echo "$year é um ano bissexto.\n";
} else {
    echo "$year não é um ano bissexto.\n";
}

/*
<?php

$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}
*/