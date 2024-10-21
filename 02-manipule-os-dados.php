<?php

echo "Média notas do film";

$filmName = "Sonic 3";
$yearOfRelease = "2025";
$sumRating = 9;
$sumRating += 10;
$sumRating += 8;
$sumRating += 10;
$averageRating = $sumRating / 4;
$available = false;
if ($available) {
    $available = "sim";
} else {
    $available = "não";
}
echo "Nome do filme: $filmName\nAno de lançamento: $yearOfRelease\nMédia de: $averageRating\nDisponivél no plano: $available\n";
